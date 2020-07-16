<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaf', function (Blueprint $table) {
            $table->increments('IDloaf');
            $table->string('name', 45)->nullable();
            $table->unsignedInteger('breads_IDbread')->index('fk_loaf_breads1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaf');
    }
}
