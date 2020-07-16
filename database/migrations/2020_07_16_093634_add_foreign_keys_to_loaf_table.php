<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLoafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loaf', function (Blueprint $table) {
            $table->foreign('breads_IDbread', 'fk_loaf_breads1')->references('IDbread')->on('breads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loaf', function (Blueprint $table) {
            $table->dropForeign('fk_loaf_breads1');
        });
    }
}
