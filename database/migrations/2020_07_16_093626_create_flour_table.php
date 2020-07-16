<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flour', function (Blueprint $table) {
            $table->unsignedInteger('IDflour')->primary();
            $table->string('name', 45)->nullable();
            $table->unsignedInteger('barCodesFlour_IDbarCodes')->index('fk_flourProducts_barCodesFlourProducts1_idx');
            $table->unsignedInteger('validityRelease_IDvalidityRelease')->index('fk_flour_validityRelease1_idx');
            $table->unsignedInteger('validityEnd_IDvalidityEnd')->index('fk_flour_validityEnd1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flour');
    }
}
