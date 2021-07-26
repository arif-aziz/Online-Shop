<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id_user');
            $table->string('username', 100)->unique();
            $table->string('password', 255);
            $table->string('full_name', 255);
            $table->string('identity_id', 40);
            $table->enum('identity_type', array('KTP', 'SIM', 'Passport'));
            $table->string('identity_image', 50)->nullable();
            $table->string('profile_image', 50)->nullable();
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('idprov');
            $table->string('idkot');
            $table->string('zip_code', 6);
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->decimal('balance', 5, 2);
            $table->enum('user_type', array('Admin', 'Mediator', 'Ahli', 'User'))->default('User');
            $table->enum('status', array('Verified', 'Unverified'))->default('Unverified');
            $table->boolean('has_store');
            $table->float('rating');
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
        Schema::drop('users');
    }

}
