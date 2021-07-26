<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function(Blueprint $table) {
            $table->increments('id_detail');
            $table->integer('id_transaction');
            $table->integer('id_product');
            $table->integer('quantity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaction_details');
    }

}
