<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrinksHasSolddatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinks_has_solddates', function (Blueprint $table) {
            $table->foreign('drinks_IDdrinks', 'fk_drinks_has_soldDates_drinks1')->references('IDdrinks')->on('drinks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('soldDates_IDsold', 'fk_drinks_has_soldDates_soldDates1')->references('IDsold')->on('solddates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinks_has_solddates', function (Blueprint $table) {
            $table->dropForeign('fk_drinks_has_soldDates_drinks1');
            $table->dropForeign('fk_drinks_has_soldDates_soldDates1');
        });
    }
}
