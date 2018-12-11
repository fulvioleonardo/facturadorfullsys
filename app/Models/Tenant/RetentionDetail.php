<?php

namespace App\Models\Tenant;

use App\Models\Tenant\Catalogs\CurrencyType;
use App\Models\Tenant\Catalogs\DocumentType;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class RetentionDetail extends Model
{
    use UsesTenantConnection;

    public $timestamps = false;
    protected $with = ['document_type', 'currency_type'];
    protected $fillable = [
        'retention_id',
        'document_type_id',
        'number',
        'date_of_issue',
        'date_of_retention',
        'currency_type_id',
        'total_document',
        'total_retention',
        'total',
        'exchange',
        'payments',
    ];

    protected $casts = [
        'date_of_issue' => 'date',
        'date_of_retention' => 'date'
    ];

    public function getPaymentsAttribute($value)
    {
        return (object)json_decode($value);
    }

    public function setPaymentsAttribute($value)
    {
        $this->attributes['payments'] = json_encode($value);
    }

    public function document_type()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function currency_type()
    {
        return $this->belongsTo(CurrencyType::class);
    }
}