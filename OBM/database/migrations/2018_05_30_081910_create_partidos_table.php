<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_equipo1')->unsigned();
            $table->integer('id_equipo2')->unsigned();
            $table->integer('puntos1')->unsigned();
            $table->integer('puntos2')->unsigned();
            $table->integer('partida')->unsigned();
            $table->foreign('id_equipo1')->references('id')->on('equipos');
            $table->foreign('id_equipo2')->references('id')->on('equipos');
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
        Schema::dropIfExists('partidos');
    }
}
