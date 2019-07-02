<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets',function(Blueprint $table){
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->integer('edad');
          $table->string('raza');
          $table->string('familia');
          // $table->unsignedBigInteger('cliente_id');
          // $table->foreing('cliente_id')->refences('id')->on('clientes');
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
        Schema::dropIfExists('pets');
    }
}
