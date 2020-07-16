<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlourHasSolddatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flour_has_solddates', function (Blueprint $table) {
            $table->unsignedInteger('flour_IDflour')->index('fk_flour_has_soldDates_flour1_idx');
            $table->unsignedInteger('soldDates_IDsold')->index('fk_flour_has_soldDates_soldDates1_idx');
            $table->primary(['flour_IDflour', 'soldDates_IDsold']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flour_has_solddates');
    }
}
