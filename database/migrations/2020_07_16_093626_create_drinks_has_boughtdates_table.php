<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksHasBoughtdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks_has_boughtdates', function (Blueprint $table) {
            $table->unsignedInteger('drinks_IDdrinks')->index('fk_drinks_has_boughtDates_drinks1_idx');
            $table->unsignedInteger('boughtDates_IDbought')->index('fk_drinks_has_boughtDates_boughtDates1_idx');
            $table->primary(['drinks_IDdrinks', 'boughtDates_IDbought']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks_has_boughtdates');
    }
}
