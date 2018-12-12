<?php

namespace App\Models\Tenant\Catalogs;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class CurrencyType extends Model
{
    use UsesTenantConnection;

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id', 'description', 'active', 'symbol'
    ];

    protected $casts = ['id' => 'string'];
}