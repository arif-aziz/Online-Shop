<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAreaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function(Blueprint $table) {
            $table->increments('id_area');
            $table->integer('id_prov');
            $table->integer('id_kota')->nullable();
            $table->integer('id_kec')->nullable();
            $table->string('nama');
            $table->integer('level')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('area');
    }

}
