<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rif');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->integer('idLicencia')->unsigned();
            $table->integer('idUsuario')->unsigned();

             //relaciones
             $table->foreign('idLicencia')->references('id')->on('licencias')
             ->onDelete('cascade')
             ->onUpdate('cascade');

            $table->foreign('idUsuario')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('empresas');
    }
}
