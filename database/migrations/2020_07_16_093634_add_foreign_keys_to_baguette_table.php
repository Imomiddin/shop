<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBaguetteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baguette', function (Blueprint $table) {
            $table->foreign('breads_IDbread', 'fk_baguette_breads1')->references('IDbread')->on('breads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baguette', function (Blueprint $table) {
            $table->dropForeign('fk_baguette_breads1');
        });
    }
}
