<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlourHasBoughtdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flour_has_boughtdates', function (Blueprint $table) {
            $table->unsignedInteger('flour_IDflour')->index('fk_flour_has_boughtDates_flour1_idx');
            $table->unsignedInteger('boughtDates_IDbought')->index('fk_flour_has_boughtDates_boughtDates1_idx');
            $table->primary(['flour_IDflour', 'boughtDates_IDbought']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flour_has_boughtdates');
    }
}
