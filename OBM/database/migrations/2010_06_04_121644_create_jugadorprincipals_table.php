<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorprincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadorprincipals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pos1')->unsigned();
            $table->integer('pos2')->unsigned();
            $table->integer('nombre')->unsigned();
            $table->decimal('precio',28,2)->unsigned();
            $table->integer('id_equipo')->unsigned();
            $table->foreign('id_equipo')->references('id')->on('equipoprincipals');
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
        Schema::dropIfExists('jugadorprincipals');
    }
}
