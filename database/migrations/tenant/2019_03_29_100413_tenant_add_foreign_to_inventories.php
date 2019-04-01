<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantAddForeignToInventories extends Migration
{
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->dropForeign(['item_id', 'warehouse_id']);
        });
    }
}
