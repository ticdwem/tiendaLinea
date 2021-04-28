<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto',100);
            $table->text('descipcionProducto');
            $table->double('precioProducto',8,2);
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->string('skuProducto',20);
            $table->integer('sotckProducto');
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->string('imageProdcuto',100);
            $table->char('status',1);
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('set null');
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
        Schema::dropIfExists('productos');
    }
}
