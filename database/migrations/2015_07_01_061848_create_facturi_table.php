<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__facturis', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('idclient');
            $table->string('tipfactura');
            $table->string('seriefactura');
            $table->integer('numarfactura');
            $table->date('datafactura');
            $table->double('valoarefactura_ftva');
            $table->double('valoare_tva');
            $table->string('incasare');
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
        Schema::drop('fact__facturis');
    }
}