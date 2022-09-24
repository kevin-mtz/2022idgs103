<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('producto', 50)->comment('Nombre del Producto');
            $table->tinyText('descripcion', 13)->comment('Descripcion del Producto');
            $table->decimal('precio', 10, 2)->comment('Precio del producto');
            $table->unsignedMediumInteger('existencias')->comment('Productos existentes');
            $table->string('fotografia', 50)->comment('Fotografia del producto');
            $table->decimal('taza_iva', 10, 2)->comment('tasa_iva');
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
};
