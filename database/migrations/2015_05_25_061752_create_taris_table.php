<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('taris', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('ContinentID');
            $table->string('nume');
            $table->string('descriere');
            $table->text('poza');
            $table->string('Latitudine')->default(0);
            $table->string('Longitudine')->default(0);
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
        Schema::drop('taris');
    }
}