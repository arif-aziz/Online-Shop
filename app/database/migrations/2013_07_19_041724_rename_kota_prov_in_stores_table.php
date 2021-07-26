<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RenameKotaProvInStoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_stores', function(Blueprint $table) {
            $table->renameColumn('id_kota', 'id_kec');
            $table->renameColumn('id_prov', 'id_kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_stores', function(Blueprint $table) {
            $table->renameColumn('id_kota', 'id_prov');
            $table->renameColumn('id_kec', 'id_kota');
        });
    }
}
