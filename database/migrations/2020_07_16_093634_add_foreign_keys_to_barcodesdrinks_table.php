<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBarcodesdrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barcodesdrinks', function (Blueprint $table) {
            $table->foreign('priceDrink_IDprice', 'fk_barCodesDrinks_priceDrinks1')->references('IDprice')->on('pricedrinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('quantityDrink_IDquantity', 'fk_barCodesDrinks_quantityDrinks1')->references('IDquantity')->on('quantitydrinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barcodesdrinks', function (Blueprint $table) {
            $table->dropForeign('fk_barCodesDrinks_priceDrinks1');
            $table->dropForeign('fk_barCodesDrinks_quantityDrinks1');
        });
    }
}
