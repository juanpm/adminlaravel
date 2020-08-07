<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlimpiadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olimpiadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre", 250)->unique();
            $table->string("descripcion", 250)->nullable();
            $table->date("fecha_inicio");
            $table->date("fecha_fin_inscripcion");
            $table->date("fecha_fin");
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
        Schema::dropIfExists('olimpiadas');
    }
}
