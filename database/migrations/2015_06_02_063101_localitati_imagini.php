<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LocalitatiImagini extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('mp_localitati_img', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('LocalitateID');
            $table->integer('status');
            $table->text('url');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
