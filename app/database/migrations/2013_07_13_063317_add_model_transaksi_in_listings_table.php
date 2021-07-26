<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddModelTransaksiInListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->boolean('is_cod')->default(0);
            $table->boolean('is_appraisal')->default(0);
            $table->boolean('is_rekber')->default(0);
            $table->boolean('is_dalam_kota')->default(0);
            $table->boolean('is_luar_kota')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->dropColumn('is_cod');
            $table->dropColumn('is_appraisal');
            $table->dropColumn('is_rekber');
            $table->dropColumn('is_dalam_kota');
            $table->dropColumn('is_luar_kota');
        });
    }

}
