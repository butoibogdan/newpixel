<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariImagini extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('mp_tari_img', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('TaraID');
            $table->integer('status');
            $table->text('url');
            $table->timestamps();
        });
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
