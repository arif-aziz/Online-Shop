<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function(Blueprint $table) {
            $table->increments('id_store');            
            $table->integer('id_user');
            $table->string('store_name',100)->unique();
            $table->string('store_tagline',255)->nullable();
            $table->text('store_description')->nullable();
            $table->string('banner')->nullable();
            $table->text('address');
            $table->string('idprov');
            $table->string('idkot');
            $table->string('zip_code', 6);
            $table->boolean('allow_cod');
            $table->boolean('allow_appraisal');
            $table->boolean('allow_rekber');
            $table->boolean('allow_dalam_kota');
            $table->boolean('allow_luar_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stores');
    }

}
