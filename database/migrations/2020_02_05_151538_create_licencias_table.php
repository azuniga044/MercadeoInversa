<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->float('costo');
            $table->string('ventaja');
            $table->string('descripcion');
            $table->string('tiempoDeUso');
            $table->string('tipo');
            $table->string('caracteristicas');
            $table->string('cantidadProducto');
            $table->date('fechaCompra');
            $table->date('fechaExpiracion');
            $table->unsignedBigInteger('idAdministrador');
            $table->timestamps();

            //relaciones
            $table->foreign('idAdministrador')->references('id')->on('administradors')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
