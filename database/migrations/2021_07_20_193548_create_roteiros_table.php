<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoteirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado');
            $table->string('cidade');
            $table->string('local');
            $table->string('descricao');
            $table->date('data_partida');
            $table->time('hora_partida');
            $table->date('data_retorno');
            $table->time('hora_retorno');
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
        Schema::dropIfExists('roteiros');
    }
}
