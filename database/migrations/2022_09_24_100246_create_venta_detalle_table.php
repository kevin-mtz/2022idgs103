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
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->unsignedBigInteger('venta_id')->comment('ID venta');
            $table->unsignedBigInteger('producto_id')->comment('ID producto');
            $table->decimal('cantidad', 10,2)->comment('Cantidad vendida del producto');
            $table->decimal('precio_unitario', 10,2)->comment('Cantiad Precio');
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
        Schema::dropIfExists('venta_detalle');
    }
};
