<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreadsHasSolddatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breads_has_solddates', function (Blueprint $table) {
            $table->unsignedInteger('breads_IDbread')->index('fk_breads_has_soldDates_breads1_idx');
            $table->unsignedInteger('soldDates_IDsold')->index('fk_breads_has_soldDates_soldDates1_idx');
            $table->primary(['breads_IDbread', 'soldDates_IDsold']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breads_has_solddates');
    }
}
