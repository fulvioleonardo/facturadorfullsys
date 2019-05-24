<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Resources\Tenant\DocumentCollection;
use App\Models\Tenant\Catalogs\DocumentType;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\DocumentExport;
use Illuminate\Http\Request;
use App\Traits\ReportTrait;
use App\Models\Tenant\Establishment;
use App\Models\Tenant\Document;
use App\Models\Tenant\Company;
use Carbon\Carbon;

class ReportController extends Controller
{
    use ReportTrait;
    
    public function index() {
        $documentTypes = DocumentType::query()
            ->where('active', 1)
            ->get();

        $establishments = Establishment::all();
        
        return view('tenant.reports.index', compact('documentTypes','establishments'));
    }
    
    public function search(Request $request) {
        $documentTypes = DocumentType::all();
        $td = $this->getTypeDoc($request->document_type);
        $establishments = Establishment::all();
        $serie = $request->serie;
        
        $d = null;
        $a = null;
        $establishment = $request->establishment;
        $establishment_id = $this->getEstablishmentId($establishment);
        
        if ($request->has('d') && $request->has('a') && ($request->d != null && $request->a != null)) {
            $d = $request->d;
            $a = $request->a;
            
            if (is_null($td)) {
                $reports = Document::with(['state_type', 'person', 'items'])
                    ->whereBetween('date_of_issue', [$d, $a])
                    ->latest()
                    ->get();
            }
            else {
                $reports = Document::with(['state_type', 'person', 'items'])
                    ->whereBetween('date_of_issue', [$d, $a])
                    ->latest()
                    ->where('document_type_id', $td)
                    ->get();
            }
        }
        else {
            if (is_null($td)) {
                $reports = Document::with(['state_type', 'person', 'items'])
                    ->latest()
                    ->get();
            } else {
                $reports = Document::with(['state_type', 'person', 'items'])
                    ->latest()
                    ->where('document_type_id', $td)
                    ->get();
            }
        }
        
        if (!is_null($establishment_id)){
            $reports = $reports->where('establishment_id', $establishment_id);
        }
        
        if (!is_null($serie)) {
            $reports = $reports->filter(function($row) use($serie) {
                $exist = false;
                
                foreach ($row->items as $item) {
                    if (collect($item->item->series)->where('number', $serie)->count() > 0) $exist = true;
                }
                
                return $exist;
            });
        }
        
        return view("tenant.reports.index", compact("reports", "a", "d", "td", "documentTypes", "establishment", "establishments", "serie"));
    }
    
    public function pdf(Request $request) {
        
        $company = Company::first();
        $establishment = Establishment::first();
        $td = $request->td;
        $establishment_id = $this->getEstablishmentId($request->establishment);

        if ($request->has('d') && $request->has('a') && ($request->d != null && $request->a != null)) {
            $d = $request->d;
            $a = $request->a;
            
            if (is_null($td)) {
                $reports = Document::with([ 'state_type', 'person'])
                    ->whereBetween('date_of_issue', [$d, $a])
                    ->latest()
                    ->get();
            }
            else {
                $reports = Document::with([ 'state_type', 'person'])
                    ->whereBetween('date_of_issue', [$d, $a])
                    ->latest()
                    ->where('document_type_id', $td)
                    ->get();
            }
        }
        else {
            if (is_null($td)) {
                $reports = Document::with([ 'state_type', 'person'])
                    ->latest()
                    ->get();
            }
            else {
                $reports = Document::with([ 'state_type', 'person'])
                    ->latest()
                    ->where('document_type_id', $td)
                    ->get();
            }
        }

        if(!is_null($establishment_id)){
            $reports = $reports->where('establishment_id', $establishment_id);
        }

        $pdf = PDF::loadView('tenant.reports.report_pdf', compact("reports", "company", "establishment"));
        $filename = 'Reporte_Documentos'.date('YmdHis');
        
        return $pdf->download($filename.'.pdf');
    }
    
    public function excel(Request $request) {
        $company = Company::first();
        $establishment = Establishment::first();
        $td= $request->td;
        $establishment_id = $this->getEstablishmentId($request->establishment);
       
        if ($request->has('d') && $request->has('a') && ($request->d != null && $request->a != null)) {
            $d = $request->d;
            $a = $request->a;
            
            if (is_null($td)) {
                $records = Document::with([ 'state_type', 'person'])
                    ->whereBetween('date_of_issue', [$d, $a])
                    ->latest()
                    ->get();
            }
            else {
                $records = Document::with([ 'state_type', 'person'])
                    ->whereBetween('date_of_issue', [$d, $a])
                    ->latest()
                    ->where('document_type_id', $td)
                    ->get();
            }
        }
        else {
            if (is_null($td)) {
                $records = Document::with([ 'state_type', 'person'])
                    ->latest()
                    ->get();
            }
            else {
                $records = Document::with([ 'state_type', 'person'])
                    ->where('document_type_id', $td)
                    ->latest()
                    ->get();
            }
        }

        if(!is_null($establishment_id)){
            $records = $records->where('establishment_id', $establishment_id);
        }
        
        return (new DocumentExport)
                ->records($records)
                ->company($company)
                ->establishment($establishment)
                ->download('ReporteDoc'.Carbon::now().'.xlsx');
    }
}
