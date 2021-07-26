<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id_category');
            $table->string('category_name',150);
            $table->integer('category_level');
            $table->integer('category_parent');
            $table->boolean('is_cod');
            $table->boolean('is_appraisal');
            $table->boolean('is_rekber');
            $table->boolean('is_dalam_kota');
            $table->boolean('is_luar_kota');
            $table->boolean('is_special');
            $table->boolean('is_leaf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }

}
