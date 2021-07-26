<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateIdProductOnImagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_images', function(Blueprint $table) {
            $table->renameColumn("id_product", "id_listing");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_images', function(Blueprint $table) {
            $table->renameColumn("id_listing", "id_product");
        });

    }

}
