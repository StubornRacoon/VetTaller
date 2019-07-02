<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // $table->unsignedBigInteger('cliente_id');
            // $table->foreign('cliente_id')->references('id')->on('clientes');
            // $table->unsignedBigInteger('farmaco_id');
            // $table->foreign('farmaco_id')->references('id')->on('farmacos');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
