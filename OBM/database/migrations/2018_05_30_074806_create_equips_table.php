<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20);
            $table->decimal('cuenta',28,2);
            $table->string('img')->default('/images/default.png');
            $table->integer('id_usuario')->nullable()->unsigned();
            $table->integer('id_liga')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_liga')->references('id')->on('ligas');
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
        Schema::dropIfExists('equipos');
    }
}
