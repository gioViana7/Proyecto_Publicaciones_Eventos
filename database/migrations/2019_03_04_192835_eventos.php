<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->String('contenido');
            $table->String('Contacto');
            $table->String('titulo');
            $table->binary('img');
        
           
            $table->integer('fk_usuario')->unsigned();
            $table->integer('fk_comentarios')->unsigned();
             $table->foreign('fk_usuario')->references('id')->on('usuarios')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_comentarios')->references('id')->on('com_eventos') 
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
        Schema::dropIfExists('eventos');
    }
}
