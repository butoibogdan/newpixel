<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactclientisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__clientis', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('tipclient');
            $table->string('nume');
            $table->string('cui');
            $table->string('cif');
            $table->string('banca');
            $table->string('iban');
            $table->string('adresa');
            $table->string('reprezentant');
            $table->string('cnp');
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
        Schema::drop('clientis');
    }
}