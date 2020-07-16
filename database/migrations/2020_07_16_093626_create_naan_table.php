<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naan', function (Blueprint $table) {
            $table->increments('IDnaan');
            $table->string('name', 45)->nullable();
            $table->unsignedInteger('breads_IDbread')->index('fk_naan_breads1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naan');
    }
}
