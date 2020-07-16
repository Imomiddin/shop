<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBarcodesflourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barcodesflour', function (Blueprint $table) {
            $table->foreign('priceFlour_IDpriceFlour', 'fk_barCodesFlourProducts_priceFlourProducts1')->references('IDpriceFlourProducts')->on('priceflourproducts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('quantityFlour_IDquantity', 'fk_barCodesFlourProducts_quantityFlourProducts1')->references('IDquantity')->on('quantityflourproducts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barcodesflour', function (Blueprint $table) {
            $table->dropForeign('fk_barCodesFlourProducts_priceFlourProducts1');
            $table->dropForeign('fk_barCodesFlourProducts_quantityFlourProducts1');
        });
    }
}
