<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepretiationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depretiations', function (Blueprint $table) {
            $table->increments('id');
          $table->string('tipo');
          $table->string('descripcion');
          $table->double('montoOriginal');
          $table->integer('vidaUtil');
          $table->double('porcenjate');
          $table->double('total');
          $table->double('porDepreciar');
          $table->double('depreciacionAc');
          $table->integer('id_activofijo');
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
        Schema::dropIfExists('depretiations');
    }
}
