<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksHasDrinksvolumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks_has_drinksvolume', function (Blueprint $table) {
            $table->unsignedInteger('drinks_IDdrinks')->index('fk_drinksName_has_drinksVolume_drinksName1_idx');
            $table->unsignedInteger('drinksVolume_IDvolume')->index('fk_drinksName_has_drinksVolume_drinksVolume1_idx');
            $table->primary(['drinks_IDdrinks', 'drinksVolume_IDvolume']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks_has_drinksvolume');
    }
}
