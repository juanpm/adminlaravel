<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas'); 
            $table->unsignedInteger('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras'); 
            $table->unsignedInteger('seccionperiodo_id')->unsigned();
            $table->foreign('seccionperiodo_id')->references('id')->on('seccionperiodos');
            $table->boolean("visible");
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
        Schema::dropIfExists('matriculas');
    }
}
