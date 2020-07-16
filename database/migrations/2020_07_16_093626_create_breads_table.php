<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breads', function (Blueprint $table) {
            $table->unsignedInteger('IDbread')->primary();
            $table->unsignedInteger('barCodeBreads_IDbarCodeBreads')->index('fk_breads_barCodeBreads1_idx');
            $table->unsignedInteger('validityRelease_IDvalidityRelease')->index('fk_breads_validityRelease1_idx');
            $table->unsignedInteger('validityEnd_IDvalidityEnd')->index('fk_breads_validityEnd1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breads');
    }
}
