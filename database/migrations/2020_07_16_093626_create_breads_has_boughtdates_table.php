<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreadsHasBoughtdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breads_has_boughtdates', function (Blueprint $table) {
            $table->unsignedInteger('breads_IDbread')->index('fk_breads_has_boughtDates_breads1_idx');
            $table->unsignedInteger('boughtDates_IDbought')->index('fk_breads_has_boughtDates_boughtDates1_idx');
            $table->primary(['breads_IDbread', 'boughtDates_IDbought']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breads_has_boughtdates');
    }
}
