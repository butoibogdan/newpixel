<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturiproduseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__facturiproduses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('idfactura');
            $table->string('denumireprodus');
            $table->integer('cantitateprodus');
            $table->double('valoareprodus');
            $table->double('cotatva');
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
        Schema::drop('facturiproduses');
    }
}