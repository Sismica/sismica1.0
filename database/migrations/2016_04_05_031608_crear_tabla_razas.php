<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRazas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('raza')->unique();
            $table->Integer('idcomunidad')->unsigned();
            $table->timestamps();
            $table->foreign('idcomunidad')->references('id')->on('comunidades');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('razas');
    }
}
