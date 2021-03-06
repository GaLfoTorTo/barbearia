<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('categoria_modelos', function (Blueprint $table) {
            $table->bigInteger('categoria_id');
            $table->bigInteger('modelo_id');
            $table->foreign('categoria_id')->refernces('id')->on('categorias');
            $table->foreign('modelo_id')->refernces('id')->on('modelos');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_modelos');
    }
}
