<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table) {
            $table->increments('id_transaction');
            $table->integer('id_store');
            $table->integer('id_buyer');
            $table->decimal('purchase_cost',12,2)->default(0);
            $table->decimal('apprasial_cost',12,2)->default(0);
            $table->integer('weight_total')->default(0);
            $table->decimal('expedition_cost',12,2)->default(0);
            $table->decimal('total',12,2)->default(0);
            $table->enum('transaction_model', array('COD', 'Appraisal', 'Rekening Bersama', 'Appraisal dan Kirim Dalam Kota', 'Appraisal dan Kirim Luar Kota'))->default('COD');
            $table->enum('transaction_status', array('Belum dikirim', 'Dalam perjalanan', 'Perlu konfirmasi', 'Retur diminta', 'Sudah dikirim', 'Belum dinilai', 'Sudah dinilai'))->default('Belum dikirim');
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
        Schema::drop('transactions');
    }

}
