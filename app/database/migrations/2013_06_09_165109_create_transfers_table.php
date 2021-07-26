<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransfersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function(Blueprint $table) {
            $table->increments('id_transfer');
            $table->integer('id_user');
            $table->enum('transfer_type', array("Deposit", "Withdrawal")); 
            $table->integer('transfer_cost')->nullable();
            $table->string("voucher_number")->nullable();
            $table->integer('transfer_total')->default(0);
            $table->string('transfer_from');
            $table->string('bank_account');
            $table->string('account_owner');
            $table->enum('bank_name', array("BCA", "Mandiri", "BRI"));
            $table->date('transfer_date');
            $table->enum('transfer_status', array('Belum dimoderasi', 'Transfer gagal', 'Transfer sukses'))->default('Belum dimoderasi');
            $table->text('transfer_message')->nullable();
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
        Schema::drop('transfers');
    }

}
