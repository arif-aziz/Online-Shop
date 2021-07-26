<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function(Blueprint $table) {
            $table->increments('id_listing');
            $table->integer('id_category');
            $table->integer('id_store');
            $table->string('product_name', 100);
            $table->text('product_description')->nullable();
            $table->float('weight')->default(0)->nullable();
            $table->decimal('price', 12, 2)->default(0);
            $table->decimal('next_price', 12, 2)->nullable();
            $table->integer('quantity')->default(0);
            $table->boolean('is_nego')->default(0);
            $table->boolean('is_sold_out')->default(0);
            $table->enum('product_desire', array('Sell', 'Wish', 'Offer'))->default('Sell');
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
        Schema::drop('listings');
    }

}
