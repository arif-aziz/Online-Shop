<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropModelTransaksiInCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->dropColumn('is_cod');
            $table->dropColumn('is_appraisal');
            $table->dropColumn('is_rekber');
            $table->dropColumn('is_dalam_kota');
            $table->dropColumn('is_luar_kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->boolean('is_cod');
            $table->boolean('is_appraisal');
            $table->boolean('is_rekber');
            $table->boolean('is_dalam_kota');
            $table->boolean('is_luar_kota');
        });
    }

}
