<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBreadsHasBoughtdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breads_has_boughtdates', function (Blueprint $table) {
            $table->foreign('boughtDates_IDbought', 'fk_breads_has_boughtDates_boughtDates1')->references('IDbought')->on('boughtdates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('breads_IDbread', 'fk_breads_has_boughtDates_breads1')->references('IDbread')->on('breads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breads_has_boughtdates', function (Blueprint $table) {
            $table->dropForeign('fk_breads_has_boughtDates_boughtDates1');
            $table->dropForeign('fk_breads_has_boughtDates_breads1');
        });
    }
}
