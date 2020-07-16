<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrinksHasDrinksvolumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinks_has_drinksvolume', function (Blueprint $table) {
            $table->foreign('drinks_IDdrinks', 'fk_drinksName_has_drinksVolume_drinksName1')->references('IDdrinks')->on('drinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('drinksVolume_IDvolume', 'fk_drinksName_has_drinksVolume_drinksVolume1')->references('IDvolume')->on('drinksvolume')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinks_has_drinksvolume', function (Blueprint $table) {
            $table->dropForeign('fk_drinksName_has_drinksVolume_drinksName1');
            $table->dropForeign('fk_drinksName_has_drinksVolume_drinksVolume1');
        });
    }
}
