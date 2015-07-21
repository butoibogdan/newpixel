<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumereseriifacturisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__numerefacturis', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('seriedocument');
            $table->string('tipdocument');
            $table->integer('numar_min');
            $table->integer('numar_max');
            $table->integer('status')->default(0);
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
        Schema::drop('fact__numerefacturis');
    }
}