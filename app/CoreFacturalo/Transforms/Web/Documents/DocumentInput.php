<?php

namespace App\CoreFacturalo\Transforms\Web\Documents;

use App\CoreFacturalo\Helpers\Number\NumberLetter;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\ActionInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\ChargeInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\DetractionInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\DiscountInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\EstablishmentInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\GuideInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\ItemInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\LegendInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\OptionalInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\PerceptionInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\PersonInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\PrepaymentInput;
use App\CoreFacturalo\Transforms\Web\Documents\Partials\RelatedInput;
use App\CoreFacturalo\Transforms\TransformFunctions;
use App\Models\Tenant\Catalogs\Code;
use App\Models\Tenant\Company;
use App\Models\Tenant\Document;
use Illuminate\Support\Str;

class DocumentInput
{
    public static function transform($inputs)
    {
        $document_type_code =  Code::getCodeById($inputs['document_type_id']);
        $series = TransformFunctions::findSeries($inputs['series_id']);
        $number = $inputs['number'];
        $date_of_issue = $inputs['date_of_issue'];
        $time_of_issue = $inputs['time_of_issue'];
        $currency_type_code = Code::getCodeById($inputs['currency_type_id']);
        $purchase_order = array_key_exists('purchase_order', $inputs)?$inputs['purchase_order']:null;
        $exchange_rate_sale = $inputs['exchange_rate_sale'];

        $total_prepayment = $inputs['total_prepayment'];
        $total_discount = $inputs['total_discount'];
        $total_charge = $inputs['total_charge'];
        $total_exportation = $inputs['total_exportation'];
        $total_free = $inputs['total_free'];
        $total_taxed = $inputs['total_taxed'];
        $total_unaffected = $inputs['total_unaffected'];
        $total_exonerated = $inputs['total_exonerated'];
        $total_igv = $inputs['total_igv'];
        $total_base_isc = $inputs['total_base_isc'];
        $total_isc = $inputs['total_isc'];
        $total_base_other_taxes = $inputs['total_base_other_taxes'];
        $total_other_taxes = $inputs['total_other_taxes'];
        $total_taxes = $inputs['total_taxes'];
        $total_value = $inputs['total_value'];
        $total = $inputs['total'];

        $company = Company::active();
        $soap_type_id = $company->soap_type_id;
        $number = TransformFunctions::newNumber($soap_type_id, $document_type_code, $series, $number);
        $filename = TransformFunctions::filename($company, $document_type_code, $series, $number);

        TransformFunctions::validateUniqueDocument($soap_type_id, $document_type_code, $series, $number);

        $array_establishment = EstablishmentInput::transform($inputs);
        $array_customer = PersonInput::transform($inputs);

        $items = ItemInput::transform($inputs);
        $charges = ChargeInput::transform($inputs);
        $discounts = DiscountInput::transform($inputs);
        $prepayments = PrepaymentInput::transform($inputs);
        $guides = GuideInput::transform($inputs);
        $related = RelatedInput::transform($inputs);
        $perception = PerceptionInput::transform($inputs);
        $detraction = DetractionInput::transform($inputs);
        $optional = OptionalInput::transform($inputs);
        $legends = LegendInput::transform($inputs);

        $legends[] = [
            'code' => 1000,
            'value' => NumberLetter::convertToLetter($total)
        ];

        $invoice = null;
        $note = null;
        $type = 'invoice';
        $group_id = null;

        if(in_array($document_type_code, ['01', '03'])) {
            $group_id = ($document_type_code === '01')?'01':'02';
            $invoice = [
                'date_of_due' => $inputs['date_of_due'],
                'operation_type_code' => Code::getCodeById($inputs['operation_type_id'])
            ];
        } else {
            $aff_document_id = $inputs['affected_document_id'];
            $note_credit_or_debit_type_id = $inputs['note_credit_or_debit_type_id'];
            $note_description = $inputs['note_description'];
            $aux_aff_document = Document::find($aff_document_id);
            $group_id = $aux_aff_document->group_id;
            if ($document_type_code === '07') {
                $note_type = 'credit';
                $note_credit_type_code = Code::getCodeById($note_credit_or_debit_type_id);
                $note_debit_type_code = null;
                $type = 'credit';
            } else {
                $note_type = 'debit';
                $note_credit_type_code = null;
                $note_debit_type_code = Code::getCodeById($note_credit_or_debit_type_id);
                $type = 'debit';
            }

            $note = [
                'note_type' => $note_type,
                'note_credit_type_code' => $note_credit_type_code,
                'note_debit_type_code' => $note_debit_type_code,
                'note_description' => $note_description,
                'affected_document_id' => $aff_document_id,
            ];
        }

        return [
            'type' => $type,
            'group_id' => $group_id,
            'user_id' => auth()->id(),
            'external_id' => Str::uuid(),
            'establishment_id' => $array_establishment['establishment_id'],
            'establishment' => $array_establishment['establishment'],
            'soap_type_id' => $soap_type_id,
            'state_type_id' => '01',
            'ubl_version' => '2.1',
            'filename' => $filename,
            'document_type_code' => $document_type_code,
            'series' => $series,
            'number' => $number,
            'date_of_issue' => $date_of_issue,
            'time_of_issue' => $time_of_issue,
            'customer_id' => $array_customer['customer_id'],
            'customer' => $array_customer['customer'],
            'currency_type_code' => $currency_type_code,
            'purchase_order' => $purchase_order,
            'exchange_rate_sale' => $exchange_rate_sale,
            'total_prepayment' => $total_prepayment,
            'total_discount' => $total_discount,
            'total_charge' => $total_charge,
            'total_exportation' => $total_exportation,
            'total_free' => $total_free,
            'total_taxed' => $total_taxed,
            'total_unaffected' => $total_unaffected,
            'total_exonerated' => $total_exonerated,
            'total_igv' => $total_igv,
            'total_base_isc' => $total_base_isc,
            'total_isc' => $total_isc,
            'total_base_other_taxes' => $total_base_other_taxes,
            'total_other_taxes' => $total_other_taxes,
            'total_taxes' => $total_taxes,
            'total_value' => $total_value,
            'total' => $total,
            'items' => $items,
            'charges' => $charges,
            'discounts' => $discounts,
            'prepayments' => $prepayments,
            'guides' => $guides,
            'related' => $related,
            'perception' => $perception,
            'detraction' => $detraction,
            'legends' => $legends,
            'optional' => $optional,
            'invoice' => $invoice,
            'note' => $note,
            'actions' => ActionInput::transform($inputs),
        ];
    }
}