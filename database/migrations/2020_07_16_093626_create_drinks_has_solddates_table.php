<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksHasSolddatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks_has_solddates', function (Blueprint $table) {
            $table->unsignedInteger('drinks_IDdrinks')->index('fk_drinks_has_soldDates_drinks1_idx');
            $table->unsignedInteger('soldDates_IDsold')->index('fk_drinks_has_soldDates_soldDates1_idx');
            $table->primary(['drinks_IDdrinks', 'soldDates_IDsold']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks_has_solddates');
    }
}
