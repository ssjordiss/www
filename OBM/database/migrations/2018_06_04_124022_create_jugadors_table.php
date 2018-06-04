<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio',28,2)->unsigned();
            $table->integer('id_equiponuevo')->unsigned();
            $table->integer('id_equipoviejo')->unsigned();
            $table->integer('id_jugadores')->unsigned();
            $table->foreign('id_jugadores')->references('id')->on('jugadorprincipals');
            $table->foreign('id_equiponuevo')->references('id')->on('equipos');
            $table->foreign('id_equipoviejo')->references('id')->on('equipos');
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
        Schema::dropIfExists('jugadors');
    }
}
