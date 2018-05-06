<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clientes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('veiculos_id');
          $table->foreign('veiculos_id')
              ->references('id')
              ->on('veiculos')
              ->onDelete('cascade');
          $table->string('nome');
          $table->string('email',200)->unique();
          $table->bigInteger('cpf')->unique();
          $table->bigInteger('telefone');
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
        Schema::dropIfExists('clientes');
    }
}
