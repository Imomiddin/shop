<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('IDdrinks');
            $table->string('Name', 45)->nullable();
            $table->unsignedInteger('barCodeDrinks_IDbarCode')->index('fk_drinksName_barCodes_idx');
            $table->unsignedInteger('validityRelease_IDvalidityRelease')->index('fk_drinks_validityRelease1_idx');
            $table->unsignedInteger('validityEnd_IDvalidityEnd')->index('fk_drinks_validityEnd1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}
