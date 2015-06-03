<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelurisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('hoteluris', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('TaraID');
            $table->integer('RegiuneID');
            $table->integer('LocalitateID');
            $table->string('nume');
            $table->string('tip');
            $table->integer('stele');
            $table->string('facilitati');
            $table->text('detalii_complete');
            $table->string('Latitudine');
            $table->string('Longitutide');
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
        Schema::drop('hoteluris');
    }
}