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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->comment('ID cliente');
            $table->string('razon_social', 150)->comment('Razon social');
            $table->string('rfc', 13)->comment('RFC');
            $table->string('contacto', 150)->comment('Nombre del contacto');
            $table->string('numero_celular', 10)->comment('Numero de celular');
            $table->string('url', 500)->comment('URL página web del cliente');
            $table->enum('regimen_fiscal', ['Persona fisica con actividad empresarial'
            ,'Sociedad anonima de capital variable'])
            -> comment('regimen del cliente');
            $table->timestamps();   
        });
    }

    /**  
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
