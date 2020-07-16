<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinks', function (Blueprint $table) {
            $table->foreign('barCodeDrinks_IDbarCode', 'fk_drinksName_barCodes')->references('IDbarCode')->on('barcodesdrinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('validityEnd_IDvalidityEnd', 'fk_drinks_validityEnd1')->references('IDvalidityEnd')->on('validityend')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('validityRelease_IDvalidityRelease', 'fk_drinks_validityRelease1')->references('IDvalidityRelease')->on('validityrelease')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinks', function (Blueprint $table) {
            $table->dropForeign('fk_drinksName_barCodes');
            $table->dropForeign('fk_drinks_validityEnd1');
            $table->dropForeign('fk_drinks_validityRelease1');
        });
    }
}
