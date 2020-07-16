<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrinksHasFizzyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinks_has_fizzy', function (Blueprint $table) {
            $table->foreign('fizzy_IDfizzy', 'fk_drinksName_has_drinksCarbonate_drinksCarbonate1')->references('IDfizzy')->on('fizzy')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('drinks_IDdrinks', 'fk_drinksName_has_drinksCarbonate_drinksName1')->references('IDdrinks')->on('drinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinks_has_fizzy', function (Blueprint $table) {
            $table->dropForeign('fk_drinksName_has_drinksCarbonate_drinksCarbonate1');
            $table->dropForeign('fk_drinksName_has_drinksCarbonate_drinksName1');
        });
    }
}
