<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('correo');
            $table->integer('idcomunidad')->unsigned();
            $table->String('nombre');
            $table->String('raza');
            $table->String('sexo');
            $table->integer('edad');
            $table->String('colorPelaje');
            $table->String('chip');
            $table->String('joby');
            $table->String('comidaFavorita');
            $table->String('crias');
            $table->String('pedigri');
            $table->timestamps();
            $table->foreign('correo')->references('correo')->on('humans');
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
        Schema::drop('mascotas');
    }
}
