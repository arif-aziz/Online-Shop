<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropKotaProvInStoresUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('idprov');
            $table->dropColumn('idkot');
            $table->integer('id_prov');
            $table->integer('id_kota')->nullable();
        });
        Schema::table('stores', function(Blueprint $table) {
            $table->dropColumn('idprov');
            $table->dropColumn('idkot');
            $table->integer('id_prov');
            $table->integer('id_kota')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('id_prov');
            $table->dropColumn('id_kota');
            $table->string('idprov');
            $table->string('idkot');
        });
        Schema::table('stores', function(Blueprint $table) {
            $table->dropColumn('id_prov');
            $table->dropColumn('id_kota');
            $table->string('idprov');
            $table->string('idkot');
        });
    }

}
