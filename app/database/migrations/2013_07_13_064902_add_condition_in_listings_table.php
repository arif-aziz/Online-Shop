<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddConditionInListingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function(Blueprint $table) {
            $table->enum('condition', array("Baru", "Bekas"));
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
            $table->dropColumn('condition');
        });
    }

}
