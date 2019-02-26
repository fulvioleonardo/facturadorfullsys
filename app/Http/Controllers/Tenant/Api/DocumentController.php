<?php
namespace App\Http\Controllers\Tenant\Api;

use App\CoreFacturalo\Facturalo;
use App\CoreFacturalo\Helpers\Storage\StorageDocument;
use App\Http\Controllers\Controller;
use App\Models\Tenant\Document;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    use StorageDocument;

    public function __construct()
    {
        $this->middleware('input.request:document,api', ['only' => ['store', 'storeServer']]);
    }

    public function store(Request $request)
    {
        $fact = DB::connection('tenant')->transaction(function () use($request) {
            $facturalo = new Facturalo();
            $facturalo->save($request->all());
            $facturalo->createXmlUnsigned();
            $facturalo->signXmlUnsigned();
            $facturalo->updateHash();
            $facturalo->updateQr();
            $facturalo->createPdf();
            $facturalo->sendEmail();
            $facturalo->senderXmlSignedBill();

            return $facturalo;
        });

        $document = $fact->getDocument();
        $response = $fact->getResponse();

        return [
            'success' => true,
            'data' => [
                'number' => $document->number_full,
                'filename' => $document->filename,
                'external_id' => $document->external_id,
                'number_to_letter' => $document->number_to_letter,
                'hash' => $document->hash,
                'qr' => $document->qr,
            ],
            'links' => [
                'xml' => $document->download_external_xml,
                'pdf' => $document->download_external_pdf,
                'cdr' => ($response['sent'])?$document->download_external_cdr:'',
            ],
            'response' => ($response['sent'])?array_except($response, 'sent'):[]
        ];
    }

    public function send(Request $request)
    {
        if($request->has('external_id')) {
            $external_id = $request->input('external_id');
            $document = Document::where('external_id', $external_id)->first();
            if(!$document) {
                throw new Exception("El documento con código externo {$external_id}, no se encuentra registrado.");
            }
            if($document->group_id !== '01') {
                throw new Exception("El tipo de documento {$document->document_type_id} es inválido, no es posible enviar.");
            }
            $fact = new Facturalo();
            $fact->setDocument($document);
            $fact->loadXmlSigned();
            $fact->onlySenderXmlSignedBill();
            $response = $fact->getResponse();
            return [
                'success' => true,
                'data' => [
                    'number' => $document->number_full,
                    'filename' => $document->filename,
                    'external_id' => $document->external_id,
                ],
                'links' => [
                    'cdr' => $document->download_external_cdr,
                ],
                'response' => array_except($response, 'sent')
            ];
        }
    }

    public function storeServer(Request $request)
    {
        $fact = DB::connection('tenant')->transaction(function () use ($request) {
            $facturalo = new Facturalo();
            $facturalo->save($request->all());

            return $facturalo;
        });
        $document = $fact->getDocument();
        $data_json = $document->data_json;

        $this->uploadStorage($document->filename, json_decode($data_json->file_xml_signed), 'signed');
        $this->uploadStorage($document->filename, json_decode($data_json->file_pdf), 'pdf');

        $document->external_id = $data_json->external_id;
        $document->hash = $data_json->hash;
        $document->qr = $data_json->qr;
        $document->save();

        return [
            'success' => true,
        ];
    }

    public function documentCheckServer($external_id)
    {
        $document = Document::where('external_id', $external_id)->first();

//        if ($document->state_type_id === '05') {
//           $file_cdr = $this->getStorage($document->filename, 'cdr');
//        } else {
            $file_cdr = null;
//        }

        return [
            'success' => true,
            'state_type_id' => $document->state_type_id,
//            'file_cdr' => json_decode($file_cdr)
        ];
    }
}