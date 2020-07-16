<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFlourHasWeightflourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flour_has_weightflour', function (Blueprint $table) {
            $table->foreign('flour_IDflour', 'fk_flour_has_weightFlour_flour1')->references('IDflour')->on('flour')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('weightFlour_IDweight', 'fk_flour_has_weightFlour_weightFlour1')->references('IDweight')->on('weightflour')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flour_has_weightflour', function (Blueprint $table) {
            $table->dropForeign('fk_flour_has_weightFlour_flour1');
            $table->dropForeign('fk_flour_has_weightFlour_weightFlour1');
        });
    }
}
