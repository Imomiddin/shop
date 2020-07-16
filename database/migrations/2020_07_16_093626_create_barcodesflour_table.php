<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarcodesflourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodesflour', function (Blueprint $table) {
            $table->increments('IDbarCodes');
            $table->string('barCode', 45);
            $table->unsignedInteger('quantityFlour_IDquantity')->index('fk_barCodesFlourProducts_quantityFlourProducts1_idx');
            $table->unsignedInteger('priceFlour_IDpriceFlour')->index('fk_barCodesFlourProducts_priceFlourProducts1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barcodesflour');
    }
}
