<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->String('ciudad');
            $table->String('direccion');
            $table->integer('telefono1');
            $table->integer('telefono2');
            $table->integer('telefono3');
            $table->String('cordenadas');
            $table->String('imagenes');
            $table->String('redesSociales1');
            $table->String('redesSociales2');
            $table->String('redesSociales3');
            $table->String('sitioWeb');
            $table->date('fechaRegistro');
            $table->integer('contador');
            $table->integer('representante');


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
        Schema::drop('negocios');
    }
}
