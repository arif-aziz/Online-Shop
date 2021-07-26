<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddStorePermalinkToStoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function(Blueprint $table) {
            $table->string('store_permalink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function(Blueprint $table) {
            $table->dropColumn('store_permalink');
        });
    }

}
