<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
        });

        Schema::create('codes', function (Blueprint $table) {
            $table->char('id', 8)->index();
            $table->char('catalog_id', 2);
            $table->string('code', 10);
            $table->string('description');
            $table->boolean('active');
            $table->string('tribute_code')->nullable();
            $table->string('tribute_name')->nullable();
            $table->decimal('rate', 9, 3)->nullable();
            $table->string('level')->nullable();
            $table->string('type')->nullable();

            $table->foreign('catalog_id')->references('id')->on('catalogs');
        });

        DB::table('catalogs')->insert([
//            ['id' => '01', 'description' => 'Código de tipo de documento'],
//            ['id' => '02', 'description' => 'Códigos de tipo de monedas'],
//            ['id' => '03', 'description' => 'Códigos de tipo de unidad de medida comercial'],
//            ['id' => '04', 'description' => 'Códigos de Países'],
            ['id' => '05', 'description' => 'Códigos de tipos de tributos'],
//            ['id' => '06', 'description' => 'Códigos de tipos de documentos de identidad'],
//            ['id' => '07', 'description' => 'Códigos de tipo de afectación del IGV'],
//            ['id' => '08', 'description' => 'Códigos de tipos de sistema de cálculo del ISC'],
            ['id' => '09', 'description' => 'Códigos de tipo de nota de crédito electrónica'],
            ['id' => '10', 'description' => 'Códigos de Tipo de nota de débito electrónica'],
            ['id' => '11', 'description' => 'Resumen diario de boletas de venta y notas electrónicas - Código de tipo de valor de venta'],
            ['id' => '12', 'description' => 'Códigos - Documentos relacionados tributarios'],
//            ['id' => '13', 'description' => 'Ubicación geográfica (UBIGEO)'],
            ['id' => '14', 'description' => 'Códigos - Otros conceptos tributarios'],
            ['id' => '15', 'description' => 'Códigos - Elementos adicionales en la Factura Electrónica y/o Boleta de Venta Electrónica'],
//            ['id' => '16', 'description' => 'Códigos – Tipo de precio de venta unitario'],
//            ['id' => '17', 'description' => 'Códigos – Tipo de operación'],
            ['id' => '18', 'description' => 'Códigos – Modalidad de traslado'],
            ['id' => '19', 'description' => 'Resumen Diario de boletas de venta y notas electrónicas - Códigos de estado de ítem'],
            ['id' => '20', 'description' => 'Códigos – Motivos de traslado'],
            ['id' => '21', 'description' => 'Documentos relacionados - aplicable solo para la Guía de remisión electrónica'],
            ['id' => '22', 'description' => 'Regímenes de Percepción'],
            ['id' => '23', 'description' => 'Regímenes de Retención'],
            ['id' => '24', 'description' => 'Recibo electrónico por servicios públicos'],
            ['id' => '25', 'description' => 'Código producto SUNAT'],
            ['id' => '26', 'description' => 'Tipo de préstamo'],
            ['id' => '27', 'description' => 'Indicador de primera vivienda '],
//            ['id' => '51', 'description' => 'Código de tipo de factura'],
            ['id' => '52', 'description' => 'Código de leyendas'],
            ['id' => '53', 'description' => 'Códigos de cargos o descuentos '],
            ['id' => '54', 'description' => 'Códigos de bienes y servicios sujetos a detracción'],
            ['id' => '55', 'description' => 'Código de identificación del ítem'],
            ['id' => '56', 'description' => 'Código de tipo de servicio público'],
            ['id' => '57', 'description' => 'Código de tipo de servicios públicos - telecomunicaciones '],
            ['id' => '58', 'description' => 'Código de tipo de medidor – recibo de luz'],
            ['id' => '59', 'description' => 'Medios de pago'],
        ]);

        DB::table('codes')->insert([
//            ['id' => '01000001', 'catalog_id' => '01', 'code' => '01', 'description' => 'FACTURA ELECTRÓNICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000003', 'catalog_id' => '01', 'code' => '03', 'description' => 'BOLETA DE VENTA ELECTRÓNICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000006', 'catalog_id' => '01', 'code' => '06', 'description' => 'Carta de porte aéreo', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000007', 'catalog_id' => '01', 'code' => '07', 'description' => 'NOTA DE CRÉDITO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000008', 'catalog_id' => '01', 'code' => '08', 'description' => 'NOTA DE DÉBITO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000009', 'catalog_id' => '01', 'code' => '09', 'description' => 'Guia de remisión remitente', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000012', 'catalog_id' => '01', 'code' => '12', 'description' => 'Ticket de maquina registradora', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000013', 'catalog_id' => '01', 'code' => '13', 'description' => 'Documento emitido por bancos, instituciones financieras, crediticias y de seguros que se encuentren bajo el control de la superintendencia de banca y seguros', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000014', 'catalog_id' => '01', 'code' => '14', 'description' => 'Recibo de servicios públicos', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000015', 'catalog_id' => '01', 'code' => '15', 'description' => 'Boletos emitidos por el servicio de transporte terrestre regular urbano de pasajeros y el ferroviario público de pasajeros prestado en vía férrea local.', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000016', 'catalog_id' => '01', 'code' => '16', 'description' => 'Boleto de viaje emitido por las empresas de transporte público interprovincial de pasajeros', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000018', 'catalog_id' => '01', 'code' => '18', 'description' => 'Documentos emitidos por las afp', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000020', 'catalog_id' => '01', 'code' => '20', 'description' => 'Comprobante de retencion', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000021', 'catalog_id' => '01', 'code' => '21', 'description' => 'Conocimiento de embarque por el servicio de transporte de carga marítima', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000024', 'catalog_id' => '01', 'code' => '24', 'description' => 'Certificado de pago de regalías emitidas por perupetro s.a.', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000031', 'catalog_id' => '01', 'code' => '31', 'description' => 'Guía de remisión transportista', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000037', 'catalog_id' => '01', 'code' => '37', 'description' => 'Documentos que emitan los concesionarios del servicio de revisiones técnicas', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000040', 'catalog_id' => '01', 'code' => '40', 'description' => 'Comprobante de percepción', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000041', 'catalog_id' => '01', 'code' => '41', 'description' => 'Comprobante de percepción – venta interna (físico - formato impreso)', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000043', 'catalog_id' => '01', 'code' => '43', 'description' => 'Boleto de compañias de aviación transporte aéreo no regular', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000045', 'catalog_id' => '01', 'code' => '45', 'description' => 'Documentos emitidos por centros educativos y culturales, universidades, asociaciones y fundaciones.', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000056', 'catalog_id' => '01', 'code' => '56', 'description' => 'Comprobante de pago seae', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000071', 'catalog_id' => '01', 'code' => '71', 'description' => 'Guia de remisión remitente complementaria', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '01000072', 'catalog_id' => '01', 'code' => '72', 'description' => 'Guia de remisión transportista complementaria', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

//            ['id' => '02000PEN', 'catalog_id' => '02', 'code' => 'PEN', 'description' => 'Soles', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '02000USD', 'catalog_id' => '02', 'code' => 'USD', 'description' => 'Dólares Americanos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '02000EUR', 'catalog_id' => '02', 'code' => 'EUR', 'description' => 'Euros', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

//            ['id' => '030000BX', 'catalog_id' => '03', 'code' => 'BX', 'description' => 'Caja', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000GLL', 'catalog_id' => '03', 'code' => 'GLL', 'description' => 'Galones', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000GRM', 'catalog_id' => '03', 'code' => 'GRM', 'description' => 'Gramos', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000KGM', 'catalog_id' => '03', 'code' => 'KGM', 'description' => 'Kilos', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000LTR', 'catalog_id' => '03', 'code' => 'LTR', 'description' => 'Litros', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000MTR', 'catalog_id' => '03', 'code' => 'MTR', 'description' => 'Metros', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000FOT', 'catalog_id' => '03', 'code' => 'FOT', 'description' => 'Pies', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000INH', 'catalog_id' => '03', 'code' => 'INH', 'description' => 'Pulgadas', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000NIU', 'catalog_id' => '03', 'code' => 'NIU', 'description' => 'Unidades', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000YRD', 'catalog_id' => '03', 'code' => 'YRD', 'description' => 'Yardas', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '03000HUR', 'catalog_id' => '03', 'code' => 'HUR', 'description' => 'Hora', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],


//            ['id' => '040000AX', 'catalog_id' => '04', 'code' => 'AX', 'description' => 'AALAND ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AF', 'catalog_id' => '04', 'code' => 'AF', 'description' => 'AFGHANISTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AL', 'catalog_id' => '04', 'code' => 'AL', 'description' => 'ALBANIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000DZ', 'catalog_id' => '04', 'code' => 'DZ', 'description' => 'ALGERIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AS', 'catalog_id' => '04', 'code' => 'AS', 'description' => 'AMERICAN SAMOA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AD', 'catalog_id' => '04', 'code' => 'AD', 'description' => 'ANDORRA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AO', 'catalog_id' => '04', 'code' => 'AO', 'description' => 'ANGOLA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AI', 'catalog_id' => '04', 'code' => 'AI', 'description' => 'ANGUILLA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AQ', 'catalog_id' => '04', 'code' => 'AQ', 'description' => 'ANTARCTICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AG', 'catalog_id' => '04', 'code' => 'AG', 'description' => 'ANTIGUA AND BARBUDA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AR', 'catalog_id' => '04', 'code' => 'AR', 'description' => 'ARGENTINA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AM', 'catalog_id' => '04', 'code' => 'AM', 'description' => 'ARMENIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AW', 'catalog_id' => '04', 'code' => 'AW', 'description' => 'ARUBA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AU', 'catalog_id' => '04', 'code' => 'AU', 'description' => 'AUSTRALIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AT', 'catalog_id' => '04', 'code' => 'AT', 'description' => 'AUSTRIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AZ', 'catalog_id' => '04', 'code' => 'AZ', 'description' => 'AZERBAIJAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BS', 'catalog_id' => '04', 'code' => 'BS', 'description' => 'BAHAMAS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BH', 'catalog_id' => '04', 'code' => 'BH', 'description' => 'BAHRAIN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BD', 'catalog_id' => '04', 'code' => 'BD', 'description' => 'BANGLADESH', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BB', 'catalog_id' => '04', 'code' => 'BB', 'description' => 'BARBADOS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BY', 'catalog_id' => '04', 'code' => 'BY', 'description' => 'BELARUS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BE', 'catalog_id' => '04', 'code' => 'BE', 'description' => 'BELGIUM', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BZ', 'catalog_id' => '04', 'code' => 'BZ', 'description' => 'BELIZE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BJ', 'catalog_id' => '04', 'code' => 'BJ', 'description' => 'BENIN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BM', 'catalog_id' => '04', 'code' => 'BM', 'description' => 'BERMUDA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BT', 'catalog_id' => '04', 'code' => 'BT', 'description' => 'BHUTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BO', 'catalog_id' => '04', 'code' => 'BO', 'description' => 'BOLIVIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BA', 'catalog_id' => '04', 'code' => 'BA', 'description' => 'BOSNIA AND HERZEGOWINA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BW', 'catalog_id' => '04', 'code' => 'BW', 'description' => 'BOTSWANA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BV', 'catalog_id' => '04', 'code' => 'BV', 'description' => 'BOUVET ISLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BR', 'catalog_id' => '04', 'code' => 'BR', 'description' => 'BRAZIL', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IO', 'catalog_id' => '04', 'code' => 'IO', 'description' => 'BRITISH INDIAN OCEAN TERRITORY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BN', 'catalog_id' => '04', 'code' => 'BN', 'description' => 'BRUNEI DARUSSALAM', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BG', 'catalog_id' => '04', 'code' => 'BG', 'description' => 'BULGARIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BF', 'catalog_id' => '04', 'code' => 'BF', 'description' => 'BURKINA FASO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000BI', 'catalog_id' => '04', 'code' => 'BI', 'description' => 'BURUNDI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KH', 'catalog_id' => '04', 'code' => 'KH', 'description' => 'CAMBODIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CM', 'catalog_id' => '04', 'code' => 'CM', 'description' => 'CAMEROON', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CA', 'catalog_id' => '04', 'code' => 'CA', 'description' => 'CANADA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CV', 'catalog_id' => '04', 'code' => 'CV', 'description' => 'CAPE VERDE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KY', 'catalog_id' => '04', 'code' => 'KY', 'description' => 'CAYMAN ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CF', 'catalog_id' => '04', 'code' => 'CF', 'description' => 'CENTRAL AFRICAN REPUBLIC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TD', 'catalog_id' => '04', 'code' => 'TD', 'description' => 'CHAD', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CL', 'catalog_id' => '04', 'code' => 'CL', 'description' => 'CHILE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CN', 'catalog_id' => '04', 'code' => 'CN', 'description' => 'CHINA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CX', 'catalog_id' => '04', 'code' => 'CX', 'description' => 'CHRISTMAS ISLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CC', 'catalog_id' => '04', 'code' => 'CC', 'description' => 'COCOS (KEELING) ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CO', 'catalog_id' => '04', 'code' => 'CO', 'description' => 'COLOMBIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KM', 'catalog_id' => '04', 'code' => 'KM', 'description' => 'COMOROS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CD', 'catalog_id' => '04', 'code' => 'CD', 'description' => 'CONGO, Democratic Republic of (was Zaire)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CG', 'catalog_id' => '04', 'code' => 'CG', 'description' => 'CONGO, Republic of', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CK', 'catalog_id' => '04', 'code' => 'CK', 'description' => 'COOK ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CR', 'catalog_id' => '04', 'code' => 'CR', 'description' => 'COSTA RICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CI', 'catalog_id' => '04', 'code' => 'CI', 'description' => 'COTE D`IVOIRE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000HR', 'catalog_id' => '04', 'code' => 'HR', 'description' => 'CROATIA (local name: Hrvatska)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CU', 'catalog_id' => '04', 'code' => 'CU', 'description' => 'CUBA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CY', 'catalog_id' => '04', 'code' => 'CY', 'description' => 'CYPRUS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CZ', 'catalog_id' => '04', 'code' => 'CZ', 'description' => 'CZECH REPUBLIC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000DK', 'catalog_id' => '04', 'code' => 'DK', 'description' => 'DENMARK', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000DJ', 'catalog_id' => '04', 'code' => 'DJ', 'description' => 'DJIBOUTI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000DM', 'catalog_id' => '04', 'code' => 'DM', 'description' => 'DOMINICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000DO', 'catalog_id' => '04', 'code' => 'DO', 'description' => 'DOMINICAN REPUBLIC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000EC', 'catalog_id' => '04', 'code' => 'EC', 'description' => 'ECUADOR', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000EG', 'catalog_id' => '04', 'code' => 'EG', 'description' => 'EGYPT', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SV', 'catalog_id' => '04', 'code' => 'SV', 'description' => 'EL SALVADOR', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GQ', 'catalog_id' => '04', 'code' => 'GQ', 'description' => 'EQUATORIAL GUINEA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ER', 'catalog_id' => '04', 'code' => 'ER', 'description' => 'ERITREA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000EE', 'catalog_id' => '04', 'code' => 'EE', 'description' => 'ESTONIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ET', 'catalog_id' => '04', 'code' => 'ET', 'description' => 'ETHIOPIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000FK', 'catalog_id' => '04', 'code' => 'FK', 'description' => 'FALKLAND ISLANDS (MALVINAS)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000FO', 'catalog_id' => '04', 'code' => 'FO', 'description' => 'FAROE ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000FJ', 'catalog_id' => '04', 'code' => 'FJ', 'description' => 'FIJI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000FI', 'catalog_id' => '04', 'code' => 'FI', 'description' => 'FINLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000FR', 'catalog_id' => '04', 'code' => 'FR', 'description' => 'FRANCE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GF', 'catalog_id' => '04', 'code' => 'GF', 'description' => 'FRENCH GUIANA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PF', 'catalog_id' => '04', 'code' => 'PF', 'description' => 'FRENCH POLYNESIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TF', 'catalog_id' => '04', 'code' => 'TF', 'description' => 'FRENCH SOUTHERN TERRITORIES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GA', 'catalog_id' => '04', 'code' => 'GA', 'description' => 'GABON', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GM', 'catalog_id' => '04', 'code' => 'GM', 'description' => 'GAMBIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GE', 'catalog_id' => '04', 'code' => 'GE', 'description' => 'GEORGIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000DE', 'catalog_id' => '04', 'code' => 'DE', 'description' => 'GERMANY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GH', 'catalog_id' => '04', 'code' => 'GH', 'description' => 'GHANA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GI', 'catalog_id' => '04', 'code' => 'GI', 'description' => 'GIBRALTAR', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GR', 'catalog_id' => '04', 'code' => 'GR', 'description' => 'GREECE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GL', 'catalog_id' => '04', 'code' => 'GL', 'description' => 'GREENLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GD', 'catalog_id' => '04', 'code' => 'GD', 'description' => 'GRENADA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GP', 'catalog_id' => '04', 'code' => 'GP', 'description' => 'GUADELOUPE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GU', 'catalog_id' => '04', 'code' => 'GU', 'description' => 'GUAM', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GT', 'catalog_id' => '04', 'code' => 'GT', 'description' => 'GUATEMALA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GN', 'catalog_id' => '04', 'code' => 'GN', 'description' => 'GUINEA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GW', 'catalog_id' => '04', 'code' => 'GW', 'description' => 'GUINEA-BISSAU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GY', 'catalog_id' => '04', 'code' => 'GY', 'description' => 'GUYANA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000HT', 'catalog_id' => '04', 'code' => 'HT', 'description' => 'HAITI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000HM', 'catalog_id' => '04', 'code' => 'HM', 'description' => 'HEARD AND MC DONALD ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000HN', 'catalog_id' => '04', 'code' => 'HN', 'description' => 'HONDURAS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000HK', 'catalog_id' => '04', 'code' => 'HK', 'description' => 'HONG KONG', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000HU', 'catalog_id' => '04', 'code' => 'HU', 'description' => 'HUNGARY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IS', 'catalog_id' => '04', 'code' => 'IS', 'description' => 'ICELAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IN', 'catalog_id' => '04', 'code' => 'IN', 'description' => 'INDIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ID', 'catalog_id' => '04', 'code' => 'ID', 'description' => 'INDONESIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IR', 'catalog_id' => '04', 'code' => 'IR', 'description' => 'IRAN (ISLAMIC REPUBLIC OF)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IQ', 'catalog_id' => '04', 'code' => 'IQ', 'description' => 'IRAQ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IE', 'catalog_id' => '04', 'code' => 'IE', 'description' => 'IRELAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IL', 'catalog_id' => '04', 'code' => 'IL', 'description' => 'ISRAEL', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000IT', 'catalog_id' => '04', 'code' => 'IT', 'description' => 'ITALY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000JM', 'catalog_id' => '04', 'code' => 'JM', 'description' => 'JAMAICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000JP', 'catalog_id' => '04', 'code' => 'JP', 'description' => 'JAPAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000JO', 'catalog_id' => '04', 'code' => 'JO', 'description' => 'JORDAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KZ', 'catalog_id' => '04', 'code' => 'KZ', 'description' => 'KAZAKHSTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KE', 'catalog_id' => '04', 'code' => 'KE', 'description' => 'KENYA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KI', 'catalog_id' => '04', 'code' => 'KI', 'description' => 'KIRIBATI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KP', 'catalog_id' => '04', 'code' => 'KP', 'description' => 'KOREA, DEMOCRATIC PEOPLE`S REPUBLIC OF', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KR', 'catalog_id' => '04', 'code' => 'KR', 'description' => 'KOREA, REPUBLIC OF', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KW', 'catalog_id' => '04', 'code' => 'KW', 'description' => 'KUWAIT', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KG', 'catalog_id' => '04', 'code' => 'KG', 'description' => 'KYRGYZSTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LA', 'catalog_id' => '04', 'code' => 'LA', 'description' => 'LAO PEOPLE`S DEMOCRATIC REPUBLIC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LV', 'catalog_id' => '04', 'code' => 'LV', 'description' => 'LATVIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LB', 'catalog_id' => '04', 'code' => 'LB', 'description' => 'LEBANON', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LS', 'catalog_id' => '04', 'code' => 'LS', 'description' => 'LESOTHO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LR', 'catalog_id' => '04', 'code' => 'LR', 'description' => 'LIBERIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LY', 'catalog_id' => '04', 'code' => 'LY', 'description' => 'LIBYAN ARAB JAMAHIRIYA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LI', 'catalog_id' => '04', 'code' => 'LI', 'description' => 'LIECHTENSTEIN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LT', 'catalog_id' => '04', 'code' => 'LT', 'description' => 'LITHUANIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LU', 'catalog_id' => '04', 'code' => 'LU', 'description' => 'LUXEMBOURG', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MO', 'catalog_id' => '04', 'code' => 'MO', 'description' => 'MACAU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MK', 'catalog_id' => '04', 'code' => 'MK', 'description' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MG', 'catalog_id' => '04', 'code' => 'MG', 'description' => 'MADAGASCAR', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MW', 'catalog_id' => '04', 'code' => 'MW', 'description' => 'MALAWI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MY', 'catalog_id' => '04', 'code' => 'MY', 'description' => 'MALAYSIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MV', 'catalog_id' => '04', 'code' => 'MV', 'description' => 'MALDIVES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ML', 'catalog_id' => '04', 'code' => 'ML', 'description' => 'MALI', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MT', 'catalog_id' => '04', 'code' => 'MT', 'description' => 'MALTA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MH', 'catalog_id' => '04', 'code' => 'MH', 'description' => 'MARSHALL ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MQ', 'catalog_id' => '04', 'code' => 'MQ', 'description' => 'MARTINIQUE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MR', 'catalog_id' => '04', 'code' => 'MR', 'description' => 'MAURITANIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MU', 'catalog_id' => '04', 'code' => 'MU', 'description' => 'MAURITIUS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000YT', 'catalog_id' => '04', 'code' => 'YT', 'description' => 'MAYOTTE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MX', 'catalog_id' => '04', 'code' => 'MX', 'description' => 'MEXICO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000FM', 'catalog_id' => '04', 'code' => 'FM', 'description' => 'MICRONESIA, FEDERATED STATES OF', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MD', 'catalog_id' => '04', 'code' => 'MD', 'description' => 'MOLDOVA, REPUBLIC OF', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MC', 'catalog_id' => '04', 'code' => 'MC', 'description' => 'MONACO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MN', 'catalog_id' => '04', 'code' => 'MN', 'description' => 'MONGOLIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MS', 'catalog_id' => '04', 'code' => 'MS', 'description' => 'MONTSERRAT', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MA', 'catalog_id' => '04', 'code' => 'MA', 'description' => 'MOROCCO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MZ', 'catalog_id' => '04', 'code' => 'MZ', 'description' => 'MOZAMBIQUE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MM', 'catalog_id' => '04', 'code' => 'MM', 'description' => 'MYANMAR', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NA', 'catalog_id' => '04', 'code' => 'NA', 'description' => 'NAMIBIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NR', 'catalog_id' => '04', 'code' => 'NR', 'description' => 'NAURU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NP', 'catalog_id' => '04', 'code' => 'NP', 'description' => 'NEPAL', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NL', 'catalog_id' => '04', 'code' => 'NL', 'description' => 'NETHERLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AN', 'catalog_id' => '04', 'code' => 'AN', 'description' => 'NETHERLANDS ANTILLES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NC', 'catalog_id' => '04', 'code' => 'NC', 'description' => 'NEW CALEDONIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NZ', 'catalog_id' => '04', 'code' => 'NZ', 'description' => 'NEW ZEALAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NI', 'catalog_id' => '04', 'code' => 'NI', 'description' => 'NICARAGUA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NE', 'catalog_id' => '04', 'code' => 'NE', 'description' => 'NIGER', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NG', 'catalog_id' => '04', 'code' => 'NG', 'description' => 'NIGERIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NU', 'catalog_id' => '04', 'code' => 'NU', 'description' => 'NIUE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NF', 'catalog_id' => '04', 'code' => 'NF', 'description' => 'NORFOLK ISLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000MP', 'catalog_id' => '04', 'code' => 'MP', 'description' => 'NORTHERN MARIANA ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000NO', 'catalog_id' => '04', 'code' => 'NO', 'description' => 'NORWAY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000OM', 'catalog_id' => '04', 'code' => 'OM', 'description' => 'OMAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PK', 'catalog_id' => '04', 'code' => 'PK', 'description' => 'PAKISTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PW', 'catalog_id' => '04', 'code' => 'PW', 'description' => 'PALAU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PS', 'catalog_id' => '04', 'code' => 'PS', 'description' => 'PALESTINIAN TERRITORY, Occupied', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PA', 'catalog_id' => '04', 'code' => 'PA', 'description' => 'PANAMA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PG', 'catalog_id' => '04', 'code' => 'PG', 'description' => 'PAPUA NEW GUINEA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PY', 'catalog_id' => '04', 'code' => 'PY', 'description' => 'PARAGUAY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PE', 'catalog_id' => '04', 'code' => 'PE', 'description' => 'PERU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PH', 'catalog_id' => '04', 'code' => 'PH', 'description' => 'PHILIPPINES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PN', 'catalog_id' => '04', 'code' => 'PN', 'description' => 'PITCAIRN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PL', 'catalog_id' => '04', 'code' => 'PL', 'description' => 'POLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PT', 'catalog_id' => '04', 'code' => 'PT', 'description' => 'PORTUGAL', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PR', 'catalog_id' => '04', 'code' => 'PR', 'description' => 'PUERTO RICO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000QA', 'catalog_id' => '04', 'code' => 'QA', 'description' => 'QATAR', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000RE', 'catalog_id' => '04', 'code' => 'RE', 'description' => 'REUNION', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000RO', 'catalog_id' => '04', 'code' => 'RO', 'description' => 'ROMANIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000RU', 'catalog_id' => '04', 'code' => 'RU', 'description' => 'RUSSIAN FEDERATION', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000RW', 'catalog_id' => '04', 'code' => 'RW', 'description' => 'RWANDA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SH', 'catalog_id' => '04', 'code' => 'SH', 'description' => 'SAINT HELENA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000KN', 'catalog_id' => '04', 'code' => 'KN', 'description' => 'SAINT KITTS AND NEVIS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LC', 'catalog_id' => '04', 'code' => 'LC', 'description' => 'SAINT LUCIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000PM', 'catalog_id' => '04', 'code' => 'PM', 'description' => 'SAINT PIERRE AND MIQUELON', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VC', 'catalog_id' => '04', 'code' => 'VC', 'description' => 'SAINT VINCENT AND THE GRENADINES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000WS', 'catalog_id' => '04', 'code' => 'WS', 'description' => 'SAMOA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SM', 'catalog_id' => '04', 'code' => 'SM', 'description' => 'SAN MARINO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ST', 'catalog_id' => '04', 'code' => 'ST', 'description' => 'SAO TOME AND PRINCIPE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SA', 'catalog_id' => '04', 'code' => 'SA', 'description' => 'SAUDI ARABIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SN', 'catalog_id' => '04', 'code' => 'SN', 'description' => 'SENEGAL', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CS', 'catalog_id' => '04', 'code' => 'CS', 'description' => 'SERBIA AND MONTENEGRO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SC', 'catalog_id' => '04', 'code' => 'SC', 'description' => 'SEYCHELLES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SL', 'catalog_id' => '04', 'code' => 'SL', 'description' => 'SIERRA LEONE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SG', 'catalog_id' => '04', 'code' => 'SG', 'description' => 'SINGAPORE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SK', 'catalog_id' => '04', 'code' => 'SK', 'description' => 'SLOVAKIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SI', 'catalog_id' => '04', 'code' => 'SI', 'description' => 'SLOVENIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SB', 'catalog_id' => '04', 'code' => 'SB', 'description' => 'SOLOMON ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SO', 'catalog_id' => '04', 'code' => 'SO', 'description' => 'SOMALIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ZA', 'catalog_id' => '04', 'code' => 'ZA', 'description' => 'SOUTH AFRICA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GS', 'catalog_id' => '04', 'code' => 'GS', 'description' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ES', 'catalog_id' => '04', 'code' => 'ES', 'description' => 'SPAIN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000LK', 'catalog_id' => '04', 'code' => 'LK', 'description' => 'SRI LANKA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SD', 'catalog_id' => '04', 'code' => 'SD', 'description' => 'SUDAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SR', 'catalog_id' => '04', 'code' => 'SR', 'description' => 'SURINAME', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SJ', 'catalog_id' => '04', 'code' => 'SJ', 'description' => 'SVALBARD AND JAN MAYEN ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SZ', 'catalog_id' => '04', 'code' => 'SZ', 'description' => 'SWAZILAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SE', 'catalog_id' => '04', 'code' => 'SE', 'description' => 'SWEDEN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000CH', 'catalog_id' => '04', 'code' => 'CH', 'description' => 'SWITZERLAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000SY', 'catalog_id' => '04', 'code' => 'SY', 'description' => 'SYRIAN ARAB REPUBLIC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TW', 'catalog_id' => '04', 'code' => 'TW', 'description' => 'TAIWAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TJ', 'catalog_id' => '04', 'code' => 'TJ', 'description' => 'TAJIKISTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TZ', 'catalog_id' => '04', 'code' => 'TZ', 'description' => 'TANZANIA, UNITED REPUBLIC OF', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TH', 'catalog_id' => '04', 'code' => 'TH', 'description' => 'THAILAND', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TL', 'catalog_id' => '04', 'code' => 'TL', 'description' => 'TIMOR-LESTE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TG', 'catalog_id' => '04', 'code' => 'TG', 'description' => 'TOGO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TK', 'catalog_id' => '04', 'code' => 'TK', 'description' => 'TOKELAU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TO', 'catalog_id' => '04', 'code' => 'TO', 'description' => 'TONGA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TT', 'catalog_id' => '04', 'code' => 'TT', 'description' => 'TRINIDAD AND TOBAGO', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TN', 'catalog_id' => '04', 'code' => 'TN', 'description' => 'TUNISIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TR', 'catalog_id' => '04', 'code' => 'TR', 'description' => 'TURKEY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TM', 'catalog_id' => '04', 'code' => 'TM', 'description' => 'TURKMENISTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TC', 'catalog_id' => '04', 'code' => 'TC', 'description' => 'TURKS AND CAICOS ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000TV', 'catalog_id' => '04', 'code' => 'TV', 'description' => 'TUVALU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000UG', 'catalog_id' => '04', 'code' => 'UG', 'description' => 'UGANDA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000UA', 'catalog_id' => '04', 'code' => 'UA', 'description' => 'UKRAINE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000AE', 'catalog_id' => '04', 'code' => 'AE', 'description' => 'UNITED ARAB EMIRATES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000GB', 'catalog_id' => '04', 'code' => 'GB', 'description' => 'UNITED KINGDOM', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000US', 'catalog_id' => '04', 'code' => 'US', 'description' => 'UNITED STATES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000UM', 'catalog_id' => '04', 'code' => 'UM', 'description' => 'UNITED STATES MINOR OUTLYING ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000UY', 'catalog_id' => '04', 'code' => 'UY', 'description' => 'URUGUAY', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000UZ', 'catalog_id' => '04', 'code' => 'UZ', 'description' => 'UZBEKISTAN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VU', 'catalog_id' => '04', 'code' => 'VU', 'description' => 'VANUATU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VA', 'catalog_id' => '04', 'code' => 'VA', 'description' => 'VATICAN CITY STATE (HOLY SEE)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VE', 'catalog_id' => '04', 'code' => 'VE', 'description' => 'VENEZUELA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VN', 'catalog_id' => '04', 'code' => 'VN', 'description' => 'VIET NAM', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VG', 'catalog_id' => '04', 'code' => 'VG', 'description' => 'VIRGIN ISLANDS (BRITISH)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000VI', 'catalog_id' => '04', 'code' => 'VI', 'description' => 'VIRGIN ISLANDS (U.S.)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000WF', 'catalog_id' => '04', 'code' => 'WF', 'description' => 'WALLIS AND FUTUNA ISLANDS', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000EH', 'catalog_id' => '04', 'code' => 'EH', 'description' => 'WESTERN SAHARA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000YE', 'catalog_id' => '04', 'code' => 'YE', 'description' => 'YEMEN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ZM', 'catalog_id' => '04', 'code' => 'ZM', 'description' => 'ZAMBIA', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '040000ZW', 'catalog_id' => '04', 'code' => 'ZW', 'description' => 'ZIMBABWE', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '05001000', 'catalog_id' => '05', 'code' => '1000', 'description' => 'Igv impuesto general a las ventas', 'active' =>true, 'tribute_code' => 'VAT', 'tribute_name' => 'IGV', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05001016', 'catalog_id' => '05', 'code' => '1016', 'description' => 'Impuesto a la venta arroz pilado ', 'active' =>true, 'tribute_code' => 'VAT ', 'tribute_name' => 'IVAP', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05002000', 'catalog_id' => '05', 'code' => '2000', 'description' => 'Isc impuesto selectivo al consumo', 'active' =>true, 'tribute_code' => 'EXC', 'tribute_name' => 'ISC', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05009995', 'catalog_id' => '05', 'code' => '9995', 'description' => 'Exportación ', 'active' =>true, 'tribute_code' => 'FRE ', 'tribute_name' => 'EXP', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05009996', 'catalog_id' => '05', 'code' => '9996', 'description' => 'Gratuito ', 'active' =>true, 'tribute_code' => 'FRE', 'tribute_name' => 'GRA', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05009997', 'catalog_id' => '05', 'code' => '9997', 'description' => 'Exonerado ', 'active' =>true, 'tribute_code' => 'VAT', 'tribute_name' => 'EXO', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05009998', 'catalog_id' => '05', 'code' => '9998', 'description' => 'Inafecto ', 'active' =>true, 'tribute_code' => 'FRE ', 'tribute_name' => 'INA', 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '05009999', 'catalog_id' => '05', 'code' => '9999', 'description' => 'Otros conceptos de pago ', 'active' =>true, 'tribute_code' => 'OTH ', 'tribute_name' => 'OTR', 'rate' => null, 'level' => null, 'type' => null],


//            ['id' => '07000010', 'catalog_id' => '07', 'code' => '10', 'description' => 'Gravado - Operación Onerosa', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000011', 'catalog_id' => '07', 'code' => '11', 'description' => 'Gravado – Retiro por premio', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000012', 'catalog_id' => '07', 'code' => '12', 'description' => 'Gravado – Retiro por donación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000013', 'catalog_id' => '07', 'code' => '13', 'description' => 'Gravado – Retiro', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000014', 'catalog_id' => '07', 'code' => '14', 'description' => 'Gravado – Retiro por publicidad', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000015', 'catalog_id' => '07', 'code' => '15', 'description' => 'Gravado – Bonificaciones', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000016', 'catalog_id' => '07', 'code' => '16', 'description' => 'Gravado – Retiro por entrega a trabajadores', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000017', 'catalog_id' => '07', 'code' => '17', 'description' => 'Gravado – IVAP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000020', 'catalog_id' => '07', 'code' => '20', 'description' => 'Exonerado - Operación Onerosa', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000021', 'catalog_id' => '07', 'code' => '21', 'description' => 'Exonerado – Transferencia Gratuita', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000030', 'catalog_id' => '07', 'code' => '30', 'description' => 'Inafecto - Operación Onerosa', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000031', 'catalog_id' => '07', 'code' => '31', 'description' => 'Inafecto – Retiro por Bonificación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000032', 'catalog_id' => '07', 'code' => '32', 'description' => 'Inafecto – Retiro', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000033', 'catalog_id' => '07', 'code' => '33', 'description' => 'Inafecto – Retiro por Muestras Médicas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000034', 'catalog_id' => '07', 'code' => '34', 'description' => 'Inafecto - Retiro por Convenio Colectivo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000035', 'catalog_id' => '07', 'code' => '35', 'description' => 'Inafecto – Retiro por premio', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000036', 'catalog_id' => '07', 'code' => '36', 'description' => 'Inafecto - Retiro por publicidad', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '07000040', 'catalog_id' => '07', 'code' => '40', 'description' => 'Exportación de bienes o servicios', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

//            ['id' => '08000001', 'catalog_id' => '08', 'code' => '01', 'description' => 'Sistema al valor (Apéndice IV, lit. A – T.U.O IGV e ISC)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '08000002', 'catalog_id' => '08', 'code' => '02', 'description' => 'Aplicación del Monto Fijo (Apéndice IV, lit. B – T.U.O IGV e ISC)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '08000003', 'catalog_id' => '08', 'code' => '03', 'description' => 'Sistema de Precios de Venta al Público (Apéndice IV, lit. C – T.U.O IGV e ISC)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '09000001', 'catalog_id' => '09', 'code' => '01', 'description' => 'Anulación de la operación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000002', 'catalog_id' => '09', 'code' => '02', 'description' => 'Anulación por error en el RUC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000003', 'catalog_id' => '09', 'code' => '03', 'description' => 'Corrección por error en la descripción', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000004', 'catalog_id' => '09', 'code' => '04', 'description' => 'Descuento global', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000005', 'catalog_id' => '09', 'code' => '05', 'description' => 'Descuento por ítem', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000006', 'catalog_id' => '09', 'code' => '06', 'description' => 'Devolución total', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000007', 'catalog_id' => '09', 'code' => '07', 'description' => 'Devolución por ítem', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000008', 'catalog_id' => '09', 'code' => '08', 'description' => 'Bonificación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000009', 'catalog_id' => '09', 'code' => '09', 'description' => 'Disminución en el valor', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000010', 'catalog_id' => '09', 'code' => '10', 'description' => 'Otros Conceptos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000011', 'catalog_id' => '09', 'code' => '11', 'description' => 'Ajustes de operaciones de exportación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '09000012', 'catalog_id' => '09', 'code' => '12', 'description' => 'Ajustes afectos al IVAP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '10000001', 'catalog_id' => '10', 'code' => '01', 'description' => 'Intereses por mora', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '10000002', 'catalog_id' => '10', 'code' => '02', 'description' => 'Aumento en el valor', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '10000003', 'catalog_id' => '10', 'code' => '03', 'description' => 'Penalidades/ otros conceptos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '10000010', 'catalog_id' => '10', 'code' => '10', 'description' => 'Ajustes de operaciones de exportación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '10000011', 'catalog_id' => '10', 'code' => '11', 'description' => 'Ajustes afectos al IVAP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '11000001', 'catalog_id' => '11', 'code' => '01', 'description' => 'Gravado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '11000002', 'catalog_id' => '11', 'code' => '02', 'description' => 'Exonerado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '11000003', 'catalog_id' => '11', 'code' => '03', 'description' => 'Inafecto', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '11000004', 'catalog_id' => '11', 'code' => '04', 'description' => 'Exportación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '11000005', 'catalog_id' => '11', 'code' => '05', 'description' => 'Gratuita', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '12000001', 'catalog_id' => '12', 'code' => '01', 'description' => 'Factura – emitida para corregir error en el RUC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '12000002', 'catalog_id' => '12', 'code' => '02', 'description' => 'Factura – emitida por anticipos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '12000003', 'catalog_id' => '12', 'code' => '03', 'description' => 'Boleta de Venta – emitida por anticipos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '12000004', 'catalog_id' => '12', 'code' => '04', 'description' => 'Ticket de Salida - ENAPU', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '12000005', 'catalog_id' => '12', 'code' => '05', 'description' => 'Código SCOP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '12000099', 'catalog_id' => '12', 'code' => '99', 'description' => 'Otros', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '14001000', 'catalog_id' => '14', 'code' => '1000', 'description' => 'Total valor de venta – operaciones exportadas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14001001', 'catalog_id' => '14', 'code' => '1001', 'description' => 'Total valor de venta - operaciones gravadas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14001002', 'catalog_id' => '14', 'code' => '1002', 'description' => 'Total valor de venta - operaciones inafectas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14001003', 'catalog_id' => '14', 'code' => '1003', 'description' => 'Total valor de venta - operaciones exoneradas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14001004', 'catalog_id' => '14', 'code' => '1004', 'description' => 'Total valor de venta – Operaciones gratuitas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14001005', 'catalog_id' => '14', 'code' => '1005', 'description' => 'Sub total de venta', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14002001', 'catalog_id' => '14', 'code' => '2001', 'description' => 'Percepciones', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14002002', 'catalog_id' => '14', 'code' => '2002', 'description' => 'Retenciones', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14002003', 'catalog_id' => '14', 'code' => '2003', 'description' => 'Detracciones', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14002004', 'catalog_id' => '14', 'code' => '2004', 'description' => 'Bonificaciones', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14002005', 'catalog_id' => '14', 'code' => '2005', 'description' => 'Total descuentos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '14003001', 'catalog_id' => '14', 'code' => '3001', 'description' => 'FISE (Ley 29852) Fondo Inclusión Social Energético', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15001000', 'catalog_id' => '15', 'code' => '1000', 'description' => 'Monto en Letras', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15001002', 'catalog_id' => '15', 'code' => '1002', 'description' => 'Leyenda "TRANSFERENCIA GRATUITA DE UN BIEN Y/O SERVICIO PRESTADO GRATUITAMENTE"', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002000', 'catalog_id' => '15', 'code' => '2000', 'description' => 'Leyenda “COMPROBANTE DE PERCEPCIÓN”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002001', 'catalog_id' => '15', 'code' => '2001', 'description' => 'Leyenda “BIENES TRANSFERIDOS EN LA AMAZONÍA REGIÓN SELVAPARA SER CONSUMIDOS EN LA MISMA"', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002002', 'catalog_id' => '15', 'code' => '2002', 'description' => 'Leyenda “SERVICIOS PRESTADOS EN LA AMAZONÍA REGIÓN SELVA PARA SER CONSUMIDOS EN LA MISMA”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002003', 'catalog_id' => '15', 'code' => '2003', 'description' => 'Leyenda “CONTRATOS DE CONSTRUCCIÓN EJECUTADOS EN LA AMAZONÍA REGIÓN SELVA”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002004', 'catalog_id' => '15', 'code' => '2004', 'description' => 'Leyenda “Agencia de Viaje - Paquete turístico”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002005', 'catalog_id' => '15', 'code' => '2005', 'description' => 'Leyenda “Venta realizada por emisor itinerante”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002006', 'catalog_id' => '15', 'code' => '2006', 'description' => 'Leyenda: Operación sujeta a detracción', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15002007', 'catalog_id' => '15', 'code' => '2007', 'description' => 'Leyenda: Operación sujeta a IVAP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003000', 'catalog_id' => '15', 'code' => '3000', 'description' => 'Detracciones: CODIGO DE BB Y SS SUJETOS A DETRACCION', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003001', 'catalog_id' => '15', 'code' => '3001', 'description' => 'Detracciones: NUMERO DE CTA EN EL BN', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003002', 'catalog_id' => '15', 'code' => '3002', 'description' => 'Detracciones: Recursos Hidrobiológicos-Nombre y matrícula de la embarcación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003003', 'catalog_id' => '15', 'code' => '3003', 'description' => 'Detracciones: Recursos Hidrobiológicos-Tipo y cantidad de especie vendida', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003004', 'catalog_id' => '15', 'code' => '3004', 'description' => 'Detracciones: Recursos Hidrobiológicos -Lugar de descarga', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003005', 'catalog_id' => '15', 'code' => '3005', 'description' => 'Detracciones: Recursos Hidrobiológicos -Fecha de descarga', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003006', 'catalog_id' => '15', 'code' => '3006', 'description' => 'Detracciones: Transporte Bienes vía terrestre – Numero Registro MTC', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003007', 'catalog_id' => '15', 'code' => '3007', 'description' => 'Detracciones: Transporte Bienes vía terrestre – configuración vehicular', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003008', 'catalog_id' => '15', 'code' => '3008', 'description' => 'Detracciones: Transporte Bienes vía terrestre – punto de origen', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003009', 'catalog_id' => '15', 'code' => '3009', 'description' => 'Detracciones: Transporte Bienes vía terrestre – punto destino', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15003010', 'catalog_id' => '15', 'code' => '3010', 'description' => 'Detracciones: Transporte Bienes vía terrestre – valor referencial preliminar', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004000', 'catalog_id' => '15', 'code' => '4000', 'description' => 'Beneficio hospedajes: Código País de emisión del pasaporte', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004001', 'catalog_id' => '15', 'code' => '4001', 'description' => 'Beneficio hospedajes: Código País de residencia del sujeto no domiciliado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004002', 'catalog_id' => '15', 'code' => '4002', 'description' => 'Beneficio Hospedajes: Fecha de ingreso al país', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004003', 'catalog_id' => '15', 'code' => '4003', 'description' => 'Beneficio Hospedajes: Fecha de ingreso al establecimiento', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004004', 'catalog_id' => '15', 'code' => '4004', 'description' => 'Beneficio Hospedajes: Fecha de salida del establecimiento', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004005', 'catalog_id' => '15', 'code' => '4005', 'description' => 'Beneficio Hospedajes: Número de días de permanencia', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004006', 'catalog_id' => '15', 'code' => '4006', 'description' => 'Beneficio Hospedajes: Fecha de consumo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004007', 'catalog_id' => '15', 'code' => '4007', 'description' => 'Beneficio Hospedajes: Paquete turístico - Nombres y Apellidos del Huésped', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004008', 'catalog_id' => '15', 'code' => '4008', 'description' => 'Beneficio Hospedajes: Paquete turístico – Tipo documento identidad del huésped', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15004009', 'catalog_id' => '15', 'code' => '4009', 'description' => 'Beneficio Hospedajes: Paquete turístico – Numero de documento identidad de huésped', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15005000', 'catalog_id' => '15', 'code' => '5000', 'description' => 'Proveedores Estado: Número de Expediente', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15005001', 'catalog_id' => '15', 'code' => '5001', 'description' => 'Proveedores Estado : Código de unidad ejecutora', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15005002', 'catalog_id' => '15', 'code' => '5002', 'description' => 'Proveedores Estado : N° de proceso de selección', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15005003', 'catalog_id' => '15', 'code' => '5003', 'description' => 'Proveedores Estado : N° de contrato', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15006000', 'catalog_id' => '15', 'code' => '6000', 'description' => 'Comercialización de Oro : Código Unico Concesión Minera', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15006001', 'catalog_id' => '15', 'code' => '6001', 'description' => 'Comercialización de Oro : N° declaración compromiso', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15006002', 'catalog_id' => '15', 'code' => '6002', 'description' => 'Comercialización de Oro : N° Reg. Especial .Comerci. Oro', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15006003', 'catalog_id' => '15', 'code' => '6003', 'description' => 'Comercialización de Oro : N° Resolución que autoriza Planta de Beneficio', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15006004', 'catalog_id' => '15', 'code' => '6004', 'description' => 'Comercialización de Oro : Ley Mineral (% concent. oro)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15007000', 'catalog_id' => '15', 'code' => '7000', 'description' => 'Primera venta de mercancía identificable entre usuarios de la zona comercial', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '15007001', 'catalog_id' => '15', 'code' => '7001', 'description' => 'Venta exonerada del IGV-ISC-IPM. Prohibida la venta fuera de la zona comercial de Tacna', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

//            ['id' => '16000001', 'catalog_id' => '16', 'code' => '01', 'description' => 'Precio unitario (incluye el IGV)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '16000002', 'catalog_id' => '16', 'code' => '02', 'description' => 'Valor referencial unitario en operaciones no onerosas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '17000001', 'catalog_id' => '17', 'code' => '01', 'description' => 'Venta Interna', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000002', 'catalog_id' => '17', 'code' => '02', 'description' => 'Exportación de bienes', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000003', 'catalog_id' => '17', 'code' => '03', 'description' => 'No Domiciliados', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000004', 'catalog_id' => '17', 'code' => '04', 'description' => 'Venta Interna – Anticipos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000005', 'catalog_id' => '17', 'code' => '05', 'description' => 'Venta Itinerante', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000006', 'catalog_id' => '17', 'code' => '06', 'description' => 'Factura Guía', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000007', 'catalog_id' => '17', 'code' => '07', 'description' => 'Venta Arroz Pilado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000008', 'catalog_id' => '17', 'code' => '08', 'description' => 'Factura - Comprobante de Percepción', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000010', 'catalog_id' => '17', 'code' => '10', 'description' => 'Factura - Guía remitente', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000011', 'catalog_id' => '17', 'code' => '11', 'description' => 'Factura - Guía transportista', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000012', 'catalog_id' => '17', 'code' => '12', 'description' => 'Boleta de venta – Comprobante de Percepción.', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000013', 'catalog_id' => '17', 'code' => '13', 'description' => 'Gasto Deducible Persona Natural', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000014', 'catalog_id' => '17', 'code' => '14', 'description' => 'Exportación de servicios – prestación de servicios de hospedaje No Dom', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000015', 'catalog_id' => '17', 'code' => '15', 'description' => 'Exportación de servicios – Transporte de navieras', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000016', 'catalog_id' => '17', 'code' => '16', 'description' => 'Exportación de servicios – servicios a naves y aeronaves de bandera extranjera', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000017', 'catalog_id' => '17', 'code' => '17', 'description' => 'Exportación de servicios – RES', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000018', 'catalog_id' => '17', 'code' => '18', 'description' => 'Exportación de servicios - Servicios que conformen un Paquete Turístico', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000019', 'catalog_id' => '17', 'code' => '19', 'description' => 'Exportación de servicios – Servicios complementarios al transporte de carga', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000020', 'catalog_id' => '17', 'code' => '20', 'description' => 'Exportación de servicios – Suministro de energía eléctrica a favor de sujetos domiciliados en ZED', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '17000021', 'catalog_id' => '17', 'code' => '21', 'description' => 'Exportación de servicios – Prestación servicios realizados parcialmente en el extranjero', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '18000001', 'catalog_id' => '18', 'code' => '01', 'description' => 'Transporte público', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '18000002', 'catalog_id' => '18', 'code' => '02', 'description' => 'Transporte privado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '19000001', 'catalog_id' => '19', 'code' => '1', 'description' => 'Adicionar', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '19000002', 'catalog_id' => '19', 'code' => '2', 'description' => 'Modificar', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '19000003', 'catalog_id' => '19', 'code' => '3', 'description' => 'Anulado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '20000001', 'catalog_id' => '20', 'code' => '01', 'description' => 'Venta', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000014', 'catalog_id' => '20', 'code' => '14', 'description' => 'Venta sujeta a confirmación del comprador', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000002', 'catalog_id' => '20', 'code' => '02', 'description' => 'Compra', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000004', 'catalog_id' => '20', 'code' => '04', 'description' => 'Traslado entre establecimientos de la misma empresa', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000018', 'catalog_id' => '20', 'code' => '18', 'description' => 'Traslado emisor itinerante CP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000008', 'catalog_id' => '20', 'code' => '08', 'description' => 'Importación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000009', 'catalog_id' => '20', 'code' => '09', 'description' => 'Exportación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000019', 'catalog_id' => '20', 'code' => '19', 'description' => 'Traslado a zona primaria', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '20000013', 'catalog_id' => '20', 'code' => '13', 'description' => 'Otros', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '21000001', 'catalog_id' => '21', 'code' => '01', 'description' => 'Numeración DAM', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '21000002', 'catalog_id' => '21', 'code' => '02', 'description' => 'Número de orden de entrega', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '21000003', 'catalog_id' => '21', 'code' => '03', 'description' => 'Número SCOP', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '21000004', 'catalog_id' => '21', 'code' => '04', 'description' => 'Número de manifiesto de carga', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '21000005', 'catalog_id' => '21', 'code' => '05', 'description' => 'Número de constancia de detracción', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '21000006', 'catalog_id' => '21', 'code' => '06', 'description' => 'Otros', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '22000001', 'catalog_id' => '22', 'code' => '01', 'description' => 'Percepción venta interna ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.02, 'level' => null, 'type' => null],
            ['id' => '22000002', 'catalog_id' => '22', 'code' => '02', 'description' => 'Percepción a la adquisición de combustible', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.01, 'level' => null, 'type' => null],
            ['id' => '22000003', 'catalog_id' => '22', 'code' => '03', 'description' => 'Percepción realizada al agente de percepción con tasa especial', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.005, 'level' => null, 'type' => null],
            ['id' => '23000001', 'catalog_id' => '23', 'code' => '01', 'description' => '', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.03, 'level' => null, 'type' => null],

//            ['id' => '51000101', 'catalog_id' => '51', 'code' => '0101', 'description' => 'Venta interna ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000102', 'catalog_id' => '51', 'code' => '0102', 'description' => 'Venta Interna – Anticipos ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000103', 'catalog_id' => '51', 'code' => '0103', 'description' => 'Venta interna - Itinerante ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000110', 'catalog_id' => '51', 'code' => '0110', 'description' => 'Venta Interna - Sustenta Traslado de Mercadería - Remitente ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000111', 'catalog_id' => '51', 'code' => '0111', 'description' => 'Venta Interna - Sustenta Traslado de Mercadería - Transportista ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000112', 'catalog_id' => '51', 'code' => '0112', 'description' => 'Venta Interna - Sustenta Gastos Deducibles Persona Natural ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000120', 'catalog_id' => '51', 'code' => '0120', 'description' => 'Venta Interna - Sujeta al IVAP ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000121', 'catalog_id' => '51', 'code' => '0121', 'description' => 'Venta Interna - Sujeta al FISE ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000122', 'catalog_id' => '51', 'code' => '0122', 'description' => 'Venta Interna - Sujeta a otros impuestos ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000130', 'catalog_id' => '51', 'code' => '0130', 'description' => 'Venta Interna - Realizadas al Estado ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000200', 'catalog_id' => '51', 'code' => '0200', 'description' => 'Exportación de Bienes ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000201', 'catalog_id' => '51', 'code' => '0201', 'description' => 'Exportación de Servicios – Prestación servicios realizados íntegramente en el país', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000202', 'catalog_id' => '51', 'code' => '0202', 'description' => 'Exportación de Servicios – Prestación de servicios de hospedaje No Domiciliado ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000203', 'catalog_id' => '51', 'code' => '0203', 'description' => 'Exportación de Servicios – Transporte de navieras ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000204', 'catalog_id' => '51', 'code' => '0204', 'description' => 'Exportación de Servicios – Servicios a naves y aeronaves de bandera extranjera ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000205', 'catalog_id' => '51', 'code' => '0205', 'description' => 'Exportación de Servicios - Servicios que conformen un Paquete Turístico ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000206', 'catalog_id' => '51', 'code' => '0206', 'description' => 'Exportación de Servicios – Servicios complementarios al transporte de carga', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000207', 'catalog_id' => '51', 'code' => '0207', 'description' => 'Exportación de Servicios – Suministro de energía eléctrica a favor de sujetos domiciliados en ZED ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000208', 'catalog_id' => '51', 'code' => '0208', 'description' => 'Exportación de Servicios – Prestación servicios realizados parcialmente en el extranjero ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000301', 'catalog_id' => '51', 'code' => '0301', 'description' => 'Operaciones con Carta de porte aéreo (emitidas en el ámbito nacional) ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000302', 'catalog_id' => '51', 'code' => '0302', 'description' => 'Operaciones de Transporte ferroviario de pasajeros ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51000303', 'catalog_id' => '51', 'code' => '0303', 'description' => 'Operaciones de Pago de regalía petrolera ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51001001', 'catalog_id' => '51', 'code' => '1001', 'description' => 'Operación Sujeta a Detracción ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
//            ['id' => '51001002', 'catalog_id' => '51', 'code' => '1002', 'description' => 'Operación Sujeta a Detracción- Recursos Hidrobiológicos ', 'active' =>false, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],

            ['id' => '52001000', 'catalog_id' => '52', 'code' => '1000', 'description' => 'Monto en Letras', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52001002', 'catalog_id' => '52', 'code' => '1002', 'description' => 'Leyenda "TRANSFERENCIA GRATUITA DE UN BIEN Y/O SERVICIO PRESTADO GRATUITAMENTE"', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002000', 'catalog_id' => '52', 'code' => '2000', 'description' => 'Leyenda “COMPROBANTE DE PERCEPCIÓN”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002001', 'catalog_id' => '52', 'code' => '2001', 'description' => 'Leyenda “BIENES TRANSFERIDOS EN LA AMAZONÍA REGIÓN SELVA PARA SER CONSUMIDOS EN LA MISMA"', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002002', 'catalog_id' => '52', 'code' => '2002', 'description' => 'Leyenda “SERVICIOS PRESTADOS EN LA AMAZONÍA REGIÓN SELVA PARA SER CONSUMIDOS EN LA MISMA”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002003', 'catalog_id' => '52', 'code' => '2003', 'description' => 'Leyenda “CONTRATOS DE CONSTRUCCIÓN EJECUTADOS EN LA AMAZONÍA REGIÓN SELVA”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002004', 'catalog_id' => '52', 'code' => '2004', 'description' => 'Leyenda “Agencia de Viaje - Paquete turístico”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002005', 'catalog_id' => '52', 'code' => '2005', 'description' => 'Leyenda “Venta realizada por emisor itinerante”', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52002006', 'catalog_id' => '52', 'code' => '2006', 'description' => 'Leyenda "Operación sujeta a detracción"', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '52003000', 'catalog_id' => '52', 'code' => '3000', 'description' => 'Código interno generado por el software de Facturación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],


            ['id' => '54000001', 'catalog_id' => '54', 'code' => '001', 'description' => 'Azúcar ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000003', 'catalog_id' => '54', 'code' => '003', 'description' => 'Alcohol etílico ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000004', 'catalog_id' => '54', 'code' => '004', 'description' => 'Recursos hidrobiológicos ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000005', 'catalog_id' => '54', 'code' => '005', 'description' => 'Maíz amarillo duro ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000006', 'catalog_id' => '54', 'code' => '006', 'description' => 'Algodón ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000007', 'catalog_id' => '54', 'code' => '007', 'description' => 'Caña de azúcar ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000008', 'catalog_id' => '54', 'code' => '008', 'description' => 'Madera ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000009', 'catalog_id' => '54', 'code' => '009', 'description' => 'Arena y piedra. ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.15, 'level' => null, 'type' => null],
            ['id' => '54000010', 'catalog_id' => '54', 'code' => '010', 'description' => 'Residuos, subproductos, desechos, recortes y desperdicios ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000011', 'catalog_id' => '54', 'code' => '011', 'description' => 'Bienes del inciso A) del Apéndice I de la Ley del IGV ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000012', 'catalog_id' => '54', 'code' => '012', 'description' => 'Intermediación laboral y tercerización ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000013', 'catalog_id' => '54', 'code' => '013', 'description' => 'Animales vivos ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000014', 'catalog_id' => '54', 'code' => '014', 'description' => 'Carnes y despojos comestibles ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000015', 'catalog_id' => '54', 'code' => '015', 'description' => 'Abonos, cueros y pieles de origen animal ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000016', 'catalog_id' => '54', 'code' => '016', 'description' => 'Aceite de pescado ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000017', 'catalog_id' => '54', 'code' => '017', 'description' => 'Harina, polvo y “pellets” de pescado, crustáceos, moluscos y demás invertebrados acuáticos ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000018', 'catalog_id' => '54', 'code' => '018', 'description' => 'Embarcaciones pesqueras ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000019', 'catalog_id' => '54', 'code' => '019', 'description' => 'Arrendamiento de bienes muebles ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000020', 'catalog_id' => '54', 'code' => '020', 'description' => 'Mantenimiento y reparación de bienes muebles ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000021', 'catalog_id' => '54', 'code' => '021', 'description' => 'Movimiento de carga ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000022', 'catalog_id' => '54', 'code' => '022', 'description' => 'Otros servicios empresariales ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000023', 'catalog_id' => '54', 'code' => '023', 'description' => 'Leche ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.015, 'level' => null, 'type' => null],
            ['id' => '54000024', 'catalog_id' => '54', 'code' => '024', 'description' => 'Comisión mercantil ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.015, 'level' => null, 'type' => null],
            ['id' => '54000025', 'catalog_id' => '54', 'code' => '025', 'description' => 'Fabricación de bienes por encargo ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000026', 'catalog_id' => '54', 'code' => '026', 'description' => 'Servicio de transporte de personas ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000029', 'catalog_id' => '54', 'code' => '029', 'description' => 'Algodón en rama sin desmontar ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000030', 'catalog_id' => '54', 'code' => '030', 'description' => 'Contratos de construcción ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000031', 'catalog_id' => '54', 'code' => '031', 'description' => 'Oro gravado con el IGV ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000032', 'catalog_id' => '54', 'code' => '032', 'description' => 'Páprika y otros frutos de los géneros capsicum o pimienta ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000033', 'catalog_id' => '54', 'code' => '033', 'description' => 'Espárragos ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000034', 'catalog_id' => '54', 'code' => '034', 'description' => 'Minerales metálicos no auríferos ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000035', 'catalog_id' => '54', 'code' => '035', 'description' => 'Bienes exonerados del IGV ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '54000036', 'catalog_id' => '54', 'code' => '036', 'description' => 'Oro y demás minerales metálicos exonerados del IGV ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000037', 'catalog_id' => '54', 'code' => '037', 'description' => 'Demás servicios gravados con el IGV ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.15, 'level' => null, 'type' => null],
            ['id' => '54000039', 'catalog_id' => '54', 'code' => '039', 'description' => 'Minerales no metálicos ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.1, 'level' => null, 'type' => null],
            ['id' => '54000040', 'catalog_id' => '54', 'code' => '040', 'description' => 'Bien inmueble gravado con IGV ', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => 0.04, 'level' => null, 'type' => null],
            ['id' => '55003001', 'catalog_id' => '55', 'code' => '3001', 'description' => 'Detracciones: Recursos Hidrobiológicos-Matrícula de la embarcación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003002', 'catalog_id' => '55', 'code' => '3002', 'description' => 'Detracciones: Recursos Hidrobiológicos-Nombre de la embarcación', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003003', 'catalog_id' => '55', 'code' => '3003', 'description' => 'Detracciones: Recursos Hidrobiológicos-Tipo y cantidad de especie vendida', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003004', 'catalog_id' => '55', 'code' => '3004', 'description' => 'Detracciones: Recursos Hidrobiológicos -Lugar de descarga - Código de ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003005', 'catalog_id' => '55', 'code' => '3005', 'description' => 'Detracciones: Recursos Hidrobiológicos -Fecha de descarga', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003050', 'catalog_id' => '55', 'code' => '3050', 'description' => 'Transporte Terrestre - Número de asiento', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003051', 'catalog_id' => '55', 'code' => '3051', 'description' => 'Transporte Terrestre - Información de manifiesto de pasajeros', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003052', 'catalog_id' => '55', 'code' => '3052', 'description' => 'Transporte Terrestre - Número de documento de identidad del pasajero', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003053', 'catalog_id' => '55', 'code' => '3053', 'description' => 'Transporte Terrestre - Tipo de documento de identidad del pasajero', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003054', 'catalog_id' => '55', 'code' => '3054', 'description' => 'Transporte Terrestre - Nombres y apellidos del pasajero', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003055', 'catalog_id' => '55', 'code' => '3055', 'description' => 'Transporte Terrestre - Ciudad o lugar de destino - Ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003056', 'catalog_id' => '55', 'code' => '3056', 'description' => 'Transporte Terrestre - Ciudad o lugar de destino - Dirección detallada', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003057', 'catalog_id' => '55', 'code' => '3057', 'description' => 'Transporte Terrestre - Ciudad o lugar de origen - Ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003058', 'catalog_id' => '55', 'code' => '3058', 'description' => 'Transporte Terrestre - Ciudad o lugar de origen - Dirección detallada', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003059', 'catalog_id' => '55', 'code' => '3059', 'description' => 'Transporte Terrestre - Fecha de inicio programado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55003060', 'catalog_id' => '55', 'code' => '3060', 'description' => 'Transporte Terrestre - Hora de inicio programado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004000', 'catalog_id' => '55', 'code' => '4000', 'description' => 'Beneficio Hospedajes: Código de país de emisión del pasaporte', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004001', 'catalog_id' => '55', 'code' => '4001', 'description' => 'Beneficio Hospedajes: Código de país de residencia del sujeto no domiciliado', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004002', 'catalog_id' => '55', 'code' => '4002', 'description' => 'Beneficio Hospedajes: Fecha de ingreso al país', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004003', 'catalog_id' => '55', 'code' => '4003', 'description' => 'Beneficio Hospedajes: Fecha de Ingreso al Establecimiento', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004004', 'catalog_id' => '55', 'code' => '4004', 'description' => 'Beneficio Hospedajes: Fecha de Salida del Establecimiento', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004005', 'catalog_id' => '55', 'code' => '4005', 'description' => 'Beneficio Hospedajes: Número de Días de Permanencia', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004006', 'catalog_id' => '55', 'code' => '4006', 'description' => 'Beneficio Hospedajes: Fecha de Consumo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004007', 'catalog_id' => '55', 'code' => '4007', 'description' => 'Beneficio Hospedajes: Nombres y apellidos del huesped', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004008', 'catalog_id' => '55', 'code' => '4008', 'description' => 'Beneficio Hospedajes: Tipo de documento de identidad del huesped', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004009', 'catalog_id' => '55', 'code' => '4009', 'description' => 'Beneficio Hospedajes: Número de documento de identidad del huesped', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004030', 'catalog_id' => '55', 'code' => '4030', 'description' => 'Carta Porte Aéreo: Lugar de origen - Código de ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004031', 'catalog_id' => '55', 'code' => '4031', 'description' => 'Carta Porte Aéreo: Lugar de origen - Dirección detallada', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004032', 'catalog_id' => '55', 'code' => '4032', 'description' => 'Carta Porte Aéreo: Lugar de destino - Código de ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004033', 'catalog_id' => '55', 'code' => '4033', 'description' => 'Carta Porte Aéreo: Lugar de destino - Dirección detallada', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004040', 'catalog_id' => '55', 'code' => '4040', 'description' => 'BVME transporte ferroviario: Pasajero - Apellidos y Nombres', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004041', 'catalog_id' => '55', 'code' => '4041', 'description' => 'BVME transporte ferroviario: Pasajero - Tipo y número de documento de identidad', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004042', 'catalog_id' => '55', 'code' => '4042', 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de origen - Código de ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004043', 'catalog_id' => '55', 'code' => '4043', 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de origen - Dirección detallada', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004044', 'catalog_id' => '55', 'code' => '4044', 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de destino - Código de ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004045', 'catalog_id' => '55', 'code' => '4045', 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de destino - Dirección detallada', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004046', 'catalog_id' => '55', 'code' => '4046', 'description' => 'BVME transporte ferroviario: Servicio transporte:Número de asiento', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004047', 'catalog_id' => '55', 'code' => '4047', 'description' => 'BVME transporte ferroviario: Servicio transporte: Hora programada de inicio de viaje', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004048', 'catalog_id' => '55', 'code' => '4048', 'description' => 'BVME transporte ferroviario: Servicio transporte: Forma de pago', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004049', 'catalog_id' => '55', 'code' => '4049', 'description' => 'BVME transporte ferroviario: Servicio transporte: Número de autorización de la transacción', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004060', 'catalog_id' => '55', 'code' => '4060', 'description' => 'Regalía Petrolera: Decreto Supremo de aprobación del contrato', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004061', 'catalog_id' => '55', 'code' => '4061', 'description' => 'Regalía Petrolera: Area de contrato (Lote)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004062', 'catalog_id' => '55', 'code' => '4062', 'description' => 'Regalía Petrolera: Periodo de pago - Fecha de inicio', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004063', 'catalog_id' => '55', 'code' => '4063', 'description' => 'Regalía Petrolera: Periodo de pago - Fecha de fin', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55004064', 'catalog_id' => '55', 'code' => '4064', 'description' => 'Regalía Petrolera: Fecha de Pago', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55005000', 'catalog_id' => '55', 'code' => '5000', 'description' => 'Proveedores Estado: Número de Expediente', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55005001', 'catalog_id' => '55', 'code' => '5001', 'description' => 'Proveedores Estado: Código de Unidad Ejecutora', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55005002', 'catalog_id' => '55', 'code' => '5002', 'description' => 'Proveedores Estado: N° de Proceso de Selección', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55005003', 'catalog_id' => '55', 'code' => '5003', 'description' => 'Proveedores Estado: N° de Contrato', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55006000', 'catalog_id' => '55', 'code' => '6000', 'description' => 'Comercialización de Oro: Código Unico Concesión Minera', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55006001', 'catalog_id' => '55', 'code' => '6001', 'description' => 'Comercialización de Oro: N° declaración compromiso', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55006002', 'catalog_id' => '55', 'code' => '6002', 'description' => 'Comercialización de Oro: N° Reg. Especial .Comerci. Oro', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55006003', 'catalog_id' => '55', 'code' => '6003', 'description' => 'Comercialización de Oro: N° Resolución que autoriza Planta de Beneficio', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55006004', 'catalog_id' => '55', 'code' => '6004', 'description' => 'Comercialización de Oro: Ley Mineral (% concent. oro)', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007000', 'catalog_id' => '55', 'code' => '7000', 'description' => 'Gastos Art. 37 Renta: Número de Placa', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007001', 'catalog_id' => '55', 'code' => '7001', 'description' => 'Créditos Hipotecarios: Tipo de préstamo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007002', 'catalog_id' => '55', 'code' => '7002', 'description' => 'Créditos Hipotecarios: Indicador de Primera Vivienda', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007003', 'catalog_id' => '55', 'code' => '7003', 'description' => 'Créditos Hipotecarios: Partida Registral', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007004', 'catalog_id' => '55', 'code' => '7004', 'description' => 'Créditos Hipotecarios: Número de contrato', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007005', 'catalog_id' => '55', 'code' => '7005', 'description' => 'Créditos Hipotecarios: Fecha de otorgamiento del crédito', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007006', 'catalog_id' => '55', 'code' => '7006', 'description' => 'Créditos Hipotecarios: Dirección del predio - Código de ubigeo', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007007', 'catalog_id' => '55', 'code' => '7007', 'description' => 'Créditos Hipotecarios: Dirección del predio - Dirección completa', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007008', 'catalog_id' => '55', 'code' => '7008', 'description' => 'Créditos Hipotecarios: Dirección del predio - Urbanización', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007009', 'catalog_id' => '55', 'code' => '7009', 'description' => 'Créditos Hipotecarios: Dirección del predio - Provincia', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '55007010', 'catalog_id' => '55', 'code' => '7010', 'description' => 'Créditos Hipotecarios: Dirección del predio - Distrito', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000001', 'catalog_id' => '59', 'code' => '001', 'description' => 'Depósito en cuenta', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000002', 'catalog_id' => '59', 'code' => '002', 'description' => 'Giro', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000003', 'catalog_id' => '59', 'code' => '003', 'description' => 'Transferencia de fondos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000004', 'catalog_id' => '59', 'code' => '004', 'description' => 'Orden de pago', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000005', 'catalog_id' => '59', 'code' => '005', 'description' => 'Tarjeta de débito', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000006', 'catalog_id' => '59', 'code' => '006', 'description' => 'Tarjeta de crédito emitida en el país por una empresa del sistema financiero', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000007', 'catalog_id' => '59', 'code' => '007', 'description' => 'Cheques con la cláusula de "no negociable", "intransferibles", "no a la orden" u otra equivalente, a que se refiere el inciso g) del articulo 5° de la ley', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000008', 'catalog_id' => '59', 'code' => '008', 'description' => 'Efectivo, por operaciones en las que no existe obligación de utilizar medio de pago', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000009', 'catalog_id' => '59', 'code' => '009', 'description' => 'Efectivo, en los demás casos', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000010', 'catalog_id' => '59', 'code' => '010', 'description' => 'Medios de pago usados en comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000011', 'catalog_id' => '59', 'code' => '011', 'description' => 'Documentos emitidos por las edpymes y las cooperativas de ahorro y crédito no autorizadas a captar depósitos del público', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000012', 'catalog_id' => '59', 'code' => '012', 'description' => 'Tarjeta de crédito emitida en el país o en el exterior por una empresa no perteneciente al sistema financiero, cuyo objeto principal sea la emisión y administración de tarjetas de crédito', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000013', 'catalog_id' => '59', 'code' => '013', 'description' => 'Tarjetas de crédito emitidas en el exterior por empresas bancarias o financieras no domiciliadas', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000101', 'catalog_id' => '59', 'code' => '101', 'description' => 'Transferencias - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000102', 'catalog_id' => '59', 'code' => '102', 'description' => 'Cheques bancarios - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000103', 'catalog_id' => '59', 'code' => '103', 'description' => 'Orden de pago simple - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000104', 'catalog_id' => '59', 'code' => '104', 'description' => 'Orden de pago documentario - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000105', 'catalog_id' => '59', 'code' => '105', 'description' => 'Remesa simple - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000106', 'catalog_id' => '59', 'code' => '106', 'description' => 'Remesa documentaria - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000107', 'catalog_id' => '59', 'code' => '107', 'description' => 'Carta de crédito simple - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000108', 'catalog_id' => '59', 'code' => '108', 'description' => 'Carta de crédito documentario - comercio exterior', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
            ['id' => '59000999', 'catalog_id' => '59', 'code' => '999', 'description' => 'Otros medios de pago', 'active' =>true, 'tribute_code' => null, 'tribute_name' => null, 'rate' => null, 'level' => null, 'type' => null],
        ]);

        Schema::create('currency_types', function (Blueprint $table) {
            $table->char('id', 3)->index();
            $table->string('description');
            $table->string('symbol');
            $table->boolean('active');
        });

        DB::table('currency_types')->insert([
            ['id' => 'PEN', 'description' => 'Soles',               'symbol' => 'S/', 'active' => true],
            ['id' => 'USD', 'description' => 'Dólares Americanos',  'symbol' => '$',  'active' => true],
            ['id' => 'EUR', 'description' => 'Euros',               'symbol' => '€',  'active' => false],
        ]);

        Schema::create('price_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
            $table->boolean('active');
        });

        DB::table('price_types')->insert([
            ['id' => '01', 'description' => 'Precio unitario (incluye el IGV)',                      'active' =>true],
            ['id' => '02', 'description' => 'Valor referencial unitario en operaciones no onerosas', 'active' =>true],
        ]);

        Schema::create('affectation_igv_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
            $table->boolean('active');
            $table->boolean('free');
        });

        DB::table('affectation_igv_types')->insert([
            ['id' => '10', 'description' => 'Gravado - Operación Onerosa',                  'free' => false, 'active' => true],
            ['id' => '11', 'description' => 'Gravado – Retiro por premio',                  'free' => true,  'active' => true],
            ['id' => '12', 'description' => 'Gravado – Retiro por donación',                'free' => true,  'active' => true],
            ['id' => '13', 'description' => 'Gravado – Retiro',                             'free' => true,  'active' => true],
            ['id' => '14', 'description' => 'Gravado – Retiro por publicidad',              'free' => true,  'active' => true],
            ['id' => '15', 'description' => 'Gravado – Bonificaciones',                     'free' => true,  'active' => true],
            ['id' => '16', 'description' => 'Gravado – Retiro por entrega a trabajadores',  'free' => true,  'active' => true],
            ['id' => '17', 'description' => 'Gravado – IVAP',                               'free' => true,  'active' => false],
            ['id' => '20', 'description' => 'Exonerado - Operación Onerosa',                'free' => false, 'active' => true],
            ['id' => '21', 'description' => 'Exonerado – Transferencia Gratuita',           'free' => true,  'active' => true],
            ['id' => '30', 'description' => 'Inafecto - Operación Onerosa',                 'free' => false, 'active' => true],
            ['id' => '31', 'description' => 'Inafecto – Retiro por Bonificación',           'free' => true,  'active' => true],
            ['id' => '32', 'description' => 'Inafecto – Retiro',                            'free' => true,  'active' => true],
            ['id' => '33', 'description' => 'Inafecto – Retiro por Muestras Médicas',       'free' => true,  'active' => true],
            ['id' => '34', 'description' => 'Inafecto - Retiro por Convenio Colectivo',     'free' => true,  'active' => true],
            ['id' => '35', 'description' => 'Inafecto – Retiro por premio',                 'free' => true,  'active' => true],
            ['id' => '36', 'description' => 'Inafecto - Retiro por publicidad',             'free' => true,  'active' => true],
            ['id' => '40', 'description' => 'Exportación de bienes o servicios',            'free' => false, 'active' => true],
        ]);

        Schema::create('system_isc_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
            $table->boolean('active');
        });

        DB::table('system_isc_types')->insert([
            ['id' => '01', 'description' => 'Sistema al valor',                         'active' =>true],
            ['id' => '02', 'description' => 'Aplicación del Monto Fijo',                'active' =>true],
            ['id' => '03', 'description' => 'Sistema de Precios de Venta al Público',   'active' =>true],
        ]);

        Schema::create('document_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
            $table->string('short');
            $table->boolean('active');
        });

        DB::table('document_types')->insert([
            ['id' => '01', 'description' => 'FACTURA ELECTRÓNICA',                                          'short' => 'FT', 'active' => true],
            ['id' => '03', 'description' => 'BOLETA DE VENTA ELECTRÓNICA',                                  'short' => 'BV', 'active' => true],
            ['id' => '06', 'description' => 'Carta de porte aéreo',                                         'short' => '',   'active' => false],
            ['id' => '07', 'description' => 'NOTA DE CRÉDITO',                                              'short' => 'NC', 'active' => true],
            ['id' => '08', 'description' => 'NOTA DE DÉBITO',                                               'short' => 'ND', 'active' => true],
            ['id' => '09', 'description' => 'Guia de remisión remitente',                                   'short' => '',   'active' => false],
            ['id' => '12', 'description' => 'Ticket de maquina registradora',                               'short' => '',   'active' => false],
            ['id' => '13', 'description' => 'Documento emitido por bancos, instituciones financieras, 
                                             crediticias y de seguros que se encuentren bajo el control 
                                             de la superintendencia de banca y seguros',                    'short' => '',   'active' => false],
            ['id' => '14', 'description' => 'Recibo de servicios públicos',                                 'short' => '',   'active' => false],
            ['id' => '15', 'description' => 'Boletos emitidos por el servicio de transporte terrestre
                                             regular urbano de pasajeros y el ferroviario público de
                                             pasajeros prestado en vía férrea local.',                      'short' => '',   'active' => false],
            ['id' => '16', 'description' => 'Boleto de viaje emitido por las empresas de transporte
                                             público interprovincial de pasajeros',                         'short' => '',   'active' => false],
            ['id' => '18', 'description' => 'Documentos emitidos por las afp',                              'short' => '',   'active' => false],
            ['id' => '20', 'description' => 'Comprobante de retencion',                                     'short' => '',   'active' => false],
            ['id' => '21', 'description' => 'Conocimiento de embarque por el servicio de transporte de
                                             carga marítima',                                               'short' => '',   'active' => false],
            ['id' => '24', 'description' => 'Certificado de pago de regalías emitidas por perupetro s.a.',  'short' => '',   'active' => false],
            ['id' => '31', 'description' => 'Guía de remisión transportista',                               'short' => '',   'active' => false],
            ['id' => '37', 'description' => 'Documentos que emitan los concesionarios del servicio de
                                             revisiones técnicas',                                          'short' => '',   'active' => false],
            ['id' => '40', 'description' => 'Comprobante de percepción',                                    'short' => '',   'active' => false],
            ['id' => '41', 'description' => 'Comprobante de percepción – venta interna
                                             (físico - formato impreso)',                                   'short' => '',   'active' => false],
            ['id' => '43', 'description' => 'Boleto de compañias de aviación transporte aéreo no regular',  'short' => '',   'active' => false],
            ['id' => '45', 'description' => 'Documentos emitidos por centros educativos y culturales, 
                                             universidades, asociaciones y fundaciones.',                   'short' => '',   'active' => false],
            ['id' => '56', 'description' => 'Comprobante de pago seae',                                     'short' => '',   'active' => false],
            ['id' => '71', 'description' => 'Guia de remisión remitente complementaria',                    'short' => '',   'active' => false],
            ['id' => '72', 'description' => 'Guia de remisión transportista complementaria',                'short' => '',   'active' => false],
        ]);

        Schema::create('identity_document_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
            $table->string('short');
            $table->boolean('active');
        });

        DB::table('identity_document_types')->insert([
            ['id' => '0', 'description' => 'Doc.trib.no.dom.sin.ruc', 'active' =>true],
            ['id' => '1', 'description' => 'DNI',                                               'active' => true],
            ['id' => '4', 'description' => 'CE',                                                'active' => true],
            ['id' => '6', 'description' => 'RUC',                                               'active' => true],
            ['id' => '7', 'description' => 'Pasaporte',                                         'active' => true],
            ['id' => 'A', 'description' => 'Ced. Diplomática de identidad',                     'active' => false],
            ['id' => 'B', 'description' => 'Documento identidad país residencia-no.d',          'active' => false],
            ['id' => 'C', 'description' => 'Tax Identification Number - TIN – Doc Trib PP.NN',  'active' => false],
            ['id' => 'D', 'description' => 'Identification Number - IN – Doc Trib PP. JJ',      'active' => false],
            ['id' => 'E', 'description' => 'TAM- Tarjeta Andina de Migración',                  'active' => false],
        ]);

        Schema::create('unit_types', function (Blueprint $table) {
            $table->string('id', 3)->index();
            $table->string('description');
            $table->string('symbol')->nullable();
            $table->boolean('active');
        });

        DB::table('unit_types')->insert([
            ['id' => 'ZZ',  'description' => 'Servicio',    'symbol' => null, 'active' => true],
            ['id' => 'BX',  'description' => 'Caja',        'symbol' => null, 'active' => true],
            ['id' => 'GLL', 'description' => 'Galones',     'symbol' => null, 'active' => true],
            ['id' => 'GRM', 'description' => 'Gramos',      'symbol' => null, 'active' => true],
            ['id' => 'KGM', 'description' => 'Kilos',       'symbol' => null, 'active' => true],
            ['id' => 'LTR', 'description' => 'Litros',      'symbol' => null, 'active' => true],
            ['id' => 'MTR', 'description' => 'Metros',      'symbol' => null, 'active' => true],
            ['id' => 'FOT', 'description' => 'Pies',        'symbol' => null, 'active' => true],
            ['id' => 'INH', 'description' => 'Pulgadas',    'symbol' => null, 'active' => true],
            ['id' => 'NIU', 'description' => 'Unidades',    'symbol' => null, 'active' => true],
            ['id' => 'YRD', 'description' => 'Yardas',      'symbol' => null, 'active' => true],
            ['id' => 'HUR', 'description' => 'Hora',        'symbol' => null, 'active' => true],
        ]);


        Schema::create('operation_types', function (Blueprint $table) {
            $table->string('id', 4)->index();
            $table->string('description');
            $table->boolean('active');
        });

        DB::table('operation_types')->insert([
            ['id' => '0101', 'description' => 'Venta interna',                                                  'active' => true],
            ['id' => '0102', 'description' => 'Venta Interna – Anticipos',                                      'active' => false],
            ['id' => '0103', 'description' => 'Venta interna - Itinerante',                                     'active' => false],
            ['id' => '0110', 'description' => 'Venta Interna - Sustenta Traslado de Mercadería - Remitente ',   'active' => false],
            ['id' => '0111', 'description' => 'Venta Interna - Sustenta Traslado de Mercadería-Transportista',  'active' => false],
            ['id' => '0112', 'description' => 'Venta Interna - Sustenta Gastos Deducibles Persona Natural',     'active' => false],
            ['id' => '0120', 'description' => 'Venta Interna - Sujeta al IVAP',                                 'active' => false],
            ['id' => '0121', 'description' => 'Venta Interna - Sujeta al FISE',                                 'active' => false],
            ['id' => '0122', 'description' => 'Venta Interna - Sujeta a otros impuestos',                       'active' => false],
            ['id' => '0130', 'description' => 'Venta Interna - Realizadas al Estado',                           'active' => false],
            ['id' => '0200', 'description' => 'Exportación de Bienes',                                          'active' => false],
            ['id' => '0201', 'description' => 'Exportación de Servicios – Prestación servicios
                                               realizados íntegramente en el país',                             'active' => false],
            ['id' => '0202', 'description' => 'Exportación de Servicios – Prestación de
                                               servicios de hospedaje No Domiciliado',                          'active' => false],
            ['id' => '0203', 'description' => 'Exportación de Servicios – Transporte de navieras',              'active' => false],
            ['id' => '0204', 'description' => 'Exportación de Servicios – Servicios a naves
                                              y aeronaves de bandera extranjera',                               'active' => false],
            ['id' => '0205', 'description' => 'Exportación de Servicios - Servicios que
                                               conformen un Paquete Turístico',                                 'active' => false],
            ['id' => '0206', 'description' => 'Exportación de Servicios – Servicios
                                               complementarios al transporte de carga',                         'active' => false],
            ['id' => '0207', 'description' => 'Exportación de Servicios – Suministro
                                               de energía eléctrica a favor de sujetos domiciliados en ZED',    'active' => false],
            ['id' => '0208', 'description' => 'Exportación de Servicios – Prestación
                                               servicios realizados parcialmente en el extranjero',             'active' => false],
            ['id' => '0301', 'description' => 'Operaciones con Carta de porte aéreo
                                               (emitidas en el ámbito nacional)',                               'active' => false],
            ['id' => '0302', 'description' => 'Operaciones de Transporte ferroviario de pasajeros',             'active' => false],
            ['id' => '0303', 'description' => 'Operaciones de Pago de regalía petrolera',                       'active' => false],
            ['id' => '1001', 'description' => 'Operación Sujeta a Detracción',                                  'active' => false],
            ['id' => '1002', 'description' => 'Operación Sujeta a Detracción- Recursos Hidrobiológicos',        'active' => false],
        ]);

        Schema::create('process_types', function (Blueprint $table) {
            $table->char('id', 1)->index();
            $table->string('description');
        });

        DB::table('process_types')->insert([
            ['id' => '1', 'description' => 'Adicionar'],
            ['id' => '2', 'description' => 'Modificar'],
            ['id' => '3', 'description' => 'Anulado'],
        ]);

        Schema::create('charge_discount_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
            $table->boolean('global');
            $table->enum('type', ['discount', 'charge']);
            $table->enum('level', ['item', 'global']);
            $table->boolean('active');
        });

        DB::table('charge_discount_types')->insert([
            ['id' => '00', 'description' => 'Descuentos que afectan la base imponible del IGV - Item',               'level' => 'item',   'type' => 'discount', 'active' =>true],
            ['id' => '01', 'description' => 'Descuentos que no afectan la base imponible del IGV - Item',            'level' => 'item',   'type' => 'discount', 'active' =>true],
            ['id' => '02', 'description' => 'Descuentos globales que afectan la base imponible del IGV - Global',    'level' => 'global', 'type' => 'discount', 'active' =>true],
            ['id' => '03', 'description' => 'Descuentos globales que no afectan la base imponible del IGV - Global', 'level' => 'global', 'type' => 'discount', 'active' =>true],
            ['id' => '45', 'description' => 'FISE - Global',                                                         'level' => 'global', 'type' => 'charge',   'active' =>false],
            ['id' => '46', 'description' => 'Recargo al consumo y/o propinas - Global',                              'level' => 'global', 'type' => 'charge',   'active' =>true],
            ['id' => '47', 'description' => 'Cargos que afectan la base imponible del IGV - Item',                   'level' => 'item',   'type' => 'charge',   'active' =>true],
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charge_discount_types');
        Schema::dropIfExists('operation_types');
        Schema::dropIfExists('unit_types');
        Schema::dropIfExists('identity_document_types');
        Schema::dropIfExists('document_types');
        Schema::dropIfExists('system_isc_types');
        Schema::dropIfExists('affectation_types');
        Schema::dropIfExists('currency_types');
        Schema::dropIfExists('codes');
        Schema::dropIfExists('catalogs');
    }
}
