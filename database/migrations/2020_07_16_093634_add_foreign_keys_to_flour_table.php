<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFlourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flour', function (Blueprint $table) {
            $table->foreign('barCodesFlour_IDbarCodes', 'fk_flourProducts_barCodesFlourProducts1')->references('IDbarCodes')->on('barcodesflour')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('validityEnd_IDvalidityEnd', 'fk_flour_validityEnd1')->references('IDvalidityEnd')->on('validityend')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('validityRelease_IDvalidityRelease', 'fk_flour_validityRelease1')->references('IDvalidityRelease')->on('validityrelease')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flour', function (Blueprint $table) {
            $table->dropForeign('fk_flourProducts_barCodesFlourProducts1');
            $table->dropForeign('fk_flour_validityEnd1');
            $table->dropForeign('fk_flour_validityRelease1');
        });
    }
}
