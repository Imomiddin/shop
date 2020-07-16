<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarcodesdrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodesdrinks', function (Blueprint $table) {
            $table->increments('IDbarCode');
            $table->string('barCode', 45);
            $table->unsignedInteger('quantityDrink_IDquantity')->index('fk_barCodesDrinks_quantityDrinks1_idx');
            $table->unsignedInteger('priceDrink_IDprice')->index('fk_barCodesDrinks_priceDrinks1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barcodesdrinks');
    }
}
