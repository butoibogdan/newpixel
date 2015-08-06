<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocplataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__docplata', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('iddoc');
            $table->integer('tipdoc');
            $table->string('idfacturi');
            $table->string('idclient');
            $table->string('serie');
            $table->integer('numar');
            $table->date('data');
            $table->string('valoare');
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
        Schema::drop('fact__docplata');
    }
}