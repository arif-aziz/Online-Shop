<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddListingPermalinkToListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->string('listing_permalink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->dropColumn('listing_permalink');
        });
    }

}
