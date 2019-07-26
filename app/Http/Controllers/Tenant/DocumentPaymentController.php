<?php
namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\DocumentPaymentRequest;
use App\Http\Requests\Tenant\DocumentRequest;
use App\Http\Resources\Tenant\DocumentPaymentCollection;
use App\Models\Tenant\Document;
use App\Models\Tenant\DocumentPayment;
use App\Models\Tenant\PaymentMethodType;
use App\Models\Tenant\Catalogs\CurrencyType;

class DocumentPaymentController extends Controller
{
    public function records($document_id)
    {
        $records = DocumentPayment::where('document_id', $document_id)->get();

        return new DocumentPaymentCollection($records);
    }

    public function tables()
    {
        return [
            'payment_method_types' => PaymentMethodType::all(),
            'currency_types' => CurrencyType::all(),

        ];
    }

    public function document($document_id)
    {
        $document = Document::find($document_id);

         
        $acum_payments_usd = 0;
        $acum_payments_pen = 0;
        
        $payment_usd = collect($document->payments)->where('currency_type_id','USD')->sum('payment');
        $payment_pen = collect($document->payments)->where('currency_type_id','PEN')->sum('payment');

        if($document->currency_type_id == 'PEN'){

            $acum_payments_usd = $payment_usd * $document->exchange_rate_sale;
            $acum_payments_pen = $payment_pen;
            
        }else{

            $acum_payments_usd = $payment_usd;
            $acum_payments_pen = $payment_pen / $document->exchange_rate_sale;

        }

        // $total_paid = collect($document->payments)->sum('payment');
        $total_paid = round($acum_payments_usd + $acum_payments_pen, 2);
        $total = $document->total;
        $total_difference = round($total - $total_paid, 2);

        return [
            'number_full' => $document->number_full,
            'total_paid' => $total_paid,
            'total' => $total,
            'total_difference' => $total_difference
        ];

    }

    public function store(DocumentPaymentRequest $request)
    {
        $id = $request->input('id');
        $record = DocumentPayment::firstOrNew(['id' => $id]);
        $record->fill($request->all());
        $record->save();

        return [
            'success' => true,
            'message' => ($id)?'Pago editado con éxito':'Pago registrado con éxito'
        ];
    }

    public function destroy($id)
    {
        $item = DocumentPayment::findOrFail($id);
        $item->delete();

        return [
            'success' => true,
            'message' => 'Pago eliminado con éxito'
        ];
    }
}
