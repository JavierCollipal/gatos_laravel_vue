<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gatos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre',200);
            $table->string('activo',1);
            $table->integer('id_raza')->unsigned();
            $table->integer('id_color')->unsigned();
            $table->integer('id_pelaje')->unsigned();
            $table->integer('id_complexion')->unsigned();
            $table->integer('id_caracter')->unsigned();
            $table->integer('id_tipo')->unsigned();
            $table->foreign('id_raza')->references('id')->on('razas')->onUpdate('cascade');
            $table->foreign('id_color')->references('id')->on('colores')->onUpdate('cascade');
            $table->foreign('id_pelaje')->references('id')->on('pelajes')->onUpdate('cascade');
            $table->foreign('id_complexion')->references('id')->on('complexion')->onUpdate('cascade');
            $table->foreign('id_caracter')->references('id')->on('caracter')->onUpdate('cascade');
            $table->foreign('id_tipo')->references('id')->on('tipo')->onUpdate('cascade');
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
        Schema::dropIfExists('gatos');
    }
}
