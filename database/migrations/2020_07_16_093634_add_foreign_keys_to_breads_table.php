<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('breads', function (Blueprint $table) {
            $table->foreign('barCodeBreads_IDbarCodeBreads', 'fk_breads_barCodeBreads1')->references('IDbarCodeBreads')->on('barcodebreads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('validityEnd_IDvalidityEnd', 'fk_breads_validityEnd1')->references('IDvalidityEnd')->on('validityend')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('validityRelease_IDvalidityRelease', 'fk_breads_validityRelease1')->references('IDvalidityRelease')->on('validityrelease')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breads', function (Blueprint $table) {
            $table->dropForeign('fk_breads_barCodeBreads1');
            $table->dropForeign('fk_breads_validityEnd1');
            $table->dropForeign('fk_breads_validityRelease1');
        });
    }
}
