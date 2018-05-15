<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entradas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
      {
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tarifas_id');
            $table->foreign('tarifas_id')
                ->references('id')
                ->on('tarifas');
                $table->integer('id_veiculos');
                $table->foreign('id_veiculos')
                    ->references('id')
                    ->on('veiculos');
            $table->time('entra');
            $table->time('sai');
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
        Schema::dropIfExists('entradas');
    }
}
