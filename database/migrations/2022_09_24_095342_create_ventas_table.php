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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id()->comment('ID venta');
            $table->unsignedBigInteger('vendedor_id')->comment('ID vendedor');
            $table->unsignedBigInteger('cliente_id')->comment('ID cliente');
            $table->decimal('subtotal', 10,2)->comment('Subtotal de la venta');
            $table->decimal('iva')->decimal('Iva de la venta');
            $table->decimal('total', 10,2)->comment('Total de la venta');

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
        Schema::dropIfExists('ventas');
    }
};
