<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesafiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ///////////////////En aqui se declaran los campos que tendran nuestras tablas//////////
        Schema::create('desafios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->integer('invitado_id')->unsigned()->nullable();
            $table->foreign('invitado_id')->references('id')->on('equipos');
            $table->integer('retador_id')->unsigned()->nullable();
            $table->foreign('retador_id')->references('id')->on('equipos');
            $table->integer('invitado_puntaje')->nullable();
            $table->integer('retador_puntaje')->nullable();
            $table->datetime('fecha',0);
            $table->integer('fase', 0)->nullable();
            $table->string('ganador')->nullable();
            $table->boolean("visible");
            $table->timestamps();
        });
        /////////////////////////////////////////////////////////////////////////////////////////
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desafios');
    }
}
