<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBreadsHasSolddatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breads_has_solddates', function (Blueprint $table) {
            $table->foreign('breads_IDbread', 'fk_breads_has_soldDates_breads1')->references('IDbread')->on('breads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('soldDates_IDsold', 'fk_breads_has_soldDates_soldDates1')->references('IDsold')->on('solddates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breads_has_solddates', function (Blueprint $table) {
            $table->dropForeign('fk_breads_has_soldDates_breads1');
            $table->dropForeign('fk_breads_has_soldDates_soldDates1');
        });
    }
}
