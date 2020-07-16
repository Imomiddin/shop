<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFlourHasSolddatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flour_has_solddates', function (Blueprint $table) {
            $table->foreign('flour_IDflour', 'fk_flour_has_soldDates_flour1')->references('IDflour')->on('flour')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('soldDates_IDsold', 'fk_flour_has_soldDates_soldDates1')->references('IDsold')->on('solddates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flour_has_solddates', function (Blueprint $table) {
            $table->dropForeign('fk_flour_has_soldDates_flour1');
            $table->dropForeign('fk_flour_has_soldDates_soldDates1');
        });
    }
}
