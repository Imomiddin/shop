<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFlourHasBoughtdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flour_has_boughtdates', function (Blueprint $table) {
            $table->foreign('boughtDates_IDbought', 'fk_flour_has_boughtDates_boughtDates1')->references('IDbought')->on('boughtdates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('flour_IDflour', 'fk_flour_has_boughtDates_flour1')->references('IDflour')->on('flour')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flour_has_boughtdates', function (Blueprint $table) {
            $table->dropForeign('fk_flour_has_boughtDates_boughtDates1');
            $table->dropForeign('fk_flour_has_boughtDates_flour1');
        });
    }
}
