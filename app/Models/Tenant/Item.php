<?php

namespace App\Models\Tenant;

use App\Models\Tenant\Catalogs\Code;

class Item extends ModelTenant
{
    protected $with = ['item_type', 'unit_type', 'currency_type'];
    protected $fillable = [
        'description',
        'item_type_id',
        'internal_id',
        'item_code',
        'item_code_gs1',
        'unit_type_id',
        'currency_type_id',
        'unit_price',
        'has_isc',
        'system_isc_type_id',
        'percentage_isc',
        'suggested_price'
    ];

    public function item_type()
    {
        return $this->belongsTo(ItemType::class);
    }

    public function unit_type()
    {
        return $this->belongsTo(Code::class, 'unit_type_id');
    }

    public function currency_type()
    {
        return $this->belongsTo(Code::class, 'currency_type_id');
    }

    public function system_isc_type()
    {
        return $this->belongsTo(Code::class, 'system_isc_type_id');
    }
}