<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlourHasWeightflourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flour_has_weightflour', function (Blueprint $table) {
            $table->unsignedInteger('flour_IDflour')->index('fk_flour_has_weightFlour_flour1_idx');
            $table->unsignedInteger('weightFlour_IDweight')->index('fk_flour_has_weightFlour_weightFlour1_idx');
            $table->primary(['flour_IDflour', 'weightFlour_IDweight']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flour_has_weightflour');
    }
}
