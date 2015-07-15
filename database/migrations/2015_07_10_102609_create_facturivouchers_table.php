<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturivouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('fact__vouchers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('idfactura');
            $table->integer('numar');
            $table->date('data');
            $table->string('adulti');
            $table->string('copii');
            $table->string('datanasteriicopii');
            $table->string('alteservicii');
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
        Schema::drop('fact__vouchers');
    }
}