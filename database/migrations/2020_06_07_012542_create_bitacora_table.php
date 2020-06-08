<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->id();
            $table->string('numInventario_bi')->unique();
            $table->string('tipo_bi');
            $table->string('descripcion_bi');
            $table->string('numSerie_bi')->nullable();
            $table->string('resguardo_bi');
            $table->decimal('valorAdqui_bi');
            $table->boolean('verificado_bi')->nullable();
            $table->integer('numTrabajador_bi')->nullable();
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
        Schema::dropIfExists('bitacora');
    }
}
