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
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('marca');
            $table->string('color')->nullable();
            $table->string('genero')->nullable();
            $table->date('fechaVencimiento')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('idCategoria')->unsigned();
            $table->integer('idEmpresa')->unsigned();
            $table->string('slug')->unique(); //URL Amigable

            
            //relaciones
          $table->foreign('idCategoria')->references('id')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

           $table->foreign('idEmpresa')->references('id')->on('empresas')
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
        Schema::dropIfExists('productos');
    }
}
