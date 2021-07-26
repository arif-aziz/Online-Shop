<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function(Blueprint $table) {
            $table->increments('id_message');
            $table->integer('id_sender');
            $table->integer('id_recipient');
            $table->string('title',150);
            $table->text('message_content');
            $table->date('message_date');
            $table->boolean('is_read');            
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
        Schema::drop('messages');
    }

}
