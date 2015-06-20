<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertestaticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ofertestatices', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('HotelID');
            $table->text('DetaliiScurte');
            $table->string('DetaliiComplete');
            $table->string('ServiciiIncluse');
            $table->string('ExtraServicii');
            $table->string('DocOferta');
            $table->date('DataExpirare');
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
        Schema::drop('ofertestatices');
    }
}