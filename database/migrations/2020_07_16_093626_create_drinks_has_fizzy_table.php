<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksHasFizzyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks_has_fizzy', function (Blueprint $table) {
            $table->unsignedInteger('drinks_IDdrinks')->index('fk_drinksName_has_drinksCarbonate_drinksName1_idx');
            $table->integer('fizzy_IDfizzy')->index('fk_drinksName_has_drinksCarbonate_drinksCarbonate1_idx');
            $table->primary(['drinks_IDdrinks', 'fizzy_IDfizzy']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks_has_fizzy');
    }
}
