<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactclientiTable extends Migration
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
            $table->string('cui')->nullable();
            $table->string('cif')->nullable();
            $table->string('banca')->nullable();
            $table->string('iban')->nullable();
            $table->string('adresa');
            $table->string('reprezentant')->nullable();
            $table->string('cnp')->nullable();
            $table->string('judet')->nullable();
            $table->string('oras')->nullable();
            $table->string('serieci')->nullable();
            $table->string('numarci')->nullable();
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
            $table->text('observatii')->nullable();
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
        Schema::drop('fact__clientis');
    }
}