<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactclientipfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__clientipfs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nume');
            $table->string('cnp');
            $table->string('adresa');
            $table->string('judet');
            $table->string('oras');
            $table->string('serieci');
            $table->string('numarci');
            $table->string('email');
            $table->string('telefon');
            $table->text('observatii');
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
        Schema::drop('clientipfs');
    }
}