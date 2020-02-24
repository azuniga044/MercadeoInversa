<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_ofertas', function (Blueprint $table) {
            $table->bigIncrements('idOferta')->unsigned();
            $table->unsignedBigInteger('rifEmpresa');

             //relaciones
           $table->foreign('idOferta')->references('id')->on('ofertas')
           ->onDelete('cascade')
           ->onUpdate('cascade');

            $table->foreign('rifEmpresa')->references('id')->on('empresas')
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
        Schema::dropIfExists('empresas_ofertas');
    }
}
