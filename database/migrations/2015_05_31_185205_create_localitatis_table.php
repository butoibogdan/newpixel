<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalitatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('localitatis', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('TaraID');
            $table->integer('RegiuneID')->nullable();
            $table->string('nume');
            $table->string('tip');
            $table->text('descriere');
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
        Schema::drop('localitatis');
    }
}