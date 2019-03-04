<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->String('contenido');
            $table->String('Autor');
            $table->String('titulo');
            $table->binary('img');
            $table->integer('fk_usuario')->unsigned();
            $table->integer('fk_comentarios')->unsigned();

            $table->foreign('fk_usuario')->references('id')->on('usuarios')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_comentarios')->references('id')->on('com_publicaciones') 
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('publicaciones');
    }
}
