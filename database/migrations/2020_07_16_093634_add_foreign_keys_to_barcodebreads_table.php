<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBarcodebreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barcodebreads', function (Blueprint $table) {
            $table->foreign('priceBreads_IDprice', 'fk_barCodeBreads_priceBreads1')->references('IDprice')->on('pricebreads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('quantityBreads_IDquantity', 'fk_barCodeBreads_quantityBreads1')->references('IDquantity')->on('quantitybreads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barcodebreads', function (Blueprint $table) {
            $table->dropForeign('fk_barCodeBreads_priceBreads1');
            $table->dropForeign('fk_barCodeBreads_quantityBreads1');
        });
    }
}
