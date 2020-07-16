<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrinksHasBoughtdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinks_has_boughtdates', function (Blueprint $table) {
            $table->foreign('boughtDates_IDbought', 'fk_drinks_has_boughtDates_boughtDates1')->references('IDbought')->on('boughtdates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('drinks_IDdrinks', 'fk_drinks_has_boughtDates_drinks1')->references('IDdrinks')->on('drinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinks_has_boughtdates', function (Blueprint $table) {
            $table->dropForeign('fk_drinks_has_boughtDates_boughtDates1');
            $table->dropForeign('fk_drinks_has_boughtDates_drinks1');
        });
    }
}
