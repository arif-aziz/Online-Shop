<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestimonialsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function(Blueprint $table) {
            $table->increments('id_testimoni');
            $table->integer('id_sender');
            $table->integer('id_store');
            $table->text('testimoni_content');
            $table->date('testimoni_date');
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
        Schema::drop('testimonials');
    }

}
