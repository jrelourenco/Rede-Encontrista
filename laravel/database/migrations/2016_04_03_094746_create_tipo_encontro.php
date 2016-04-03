<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoEncontro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_encontro', function (Blueprint $table) {
            $table->increments('id_tipo');
            $table->string('nome_encontro');
            $table->string('tipo_encontro');
            $table->string('morada');
            $table->string('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_encontro');
    }
}
