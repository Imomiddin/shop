<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLavashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavash', function (Blueprint $table) {
            $table->increments('IDlavash');
            $table->string('name', 45)->nullable();
            $table->unsignedInteger('breads_IDbread')->index('fk_lavash_breads1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lavash');
    }
}
