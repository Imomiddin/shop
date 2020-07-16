<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarcodebreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodebreads', function (Blueprint $table) {
            $table->increments('IDbarCodeBreads');
            $table->string('barCode', 45);
            $table->unsignedInteger('quantityBreads_IDquantity')->index('fk_barCodeBreads_quantityBreads1_idx');
            $table->unsignedInteger('priceBreads_IDprice')->index('fk_barCodeBreads_priceBreads1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barcodebreads');
    }
}
