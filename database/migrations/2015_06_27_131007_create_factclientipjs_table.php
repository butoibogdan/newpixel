<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactclientipjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__clientipjs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nume');$table->string('cif');
            $table->string('cui');$table->string('adresa');
            $table->string('iban');$table->string('banca');
            $table->string('email');
            $table->string('telefon');
            $table->string('reprezentant');
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
        Schema::drop('clientipjs');
    }
}