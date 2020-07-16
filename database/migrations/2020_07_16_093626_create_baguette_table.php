<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaguetteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baguette', function (Blueprint $table) {
            $table->increments('IDbaguette');
            $table->string('name', 45)->nullable();
            $table->unsignedInteger('breads_IDbread')->index('fk_baguette_breads1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baguette');
    }
}
