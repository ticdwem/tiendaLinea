<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->string('tecnologia')->nullable();
            $table->string('interfaz')->nullable();
            $table->string('frecuencia')->nullable();
            $table->string('botones')->nullable();
            $table->string('resolucion',25)->nullable();
            $table->string('memoria',25)->nullable();
            $table->string('velocidad',25)->nullable();
            $table->string('material',50)->nullable();
            $table->string('medidas',15)->nullable();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->timestamps(); 
           /*   */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas');
    }
}
