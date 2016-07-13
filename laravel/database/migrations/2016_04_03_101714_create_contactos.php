<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_encontrista')->unsigned();
            $table->integer('tipo_contacto')->unsigned();
            $table->string('contacto');
            $table->string('descricao');
            $table->foreign('id_encontrista')->references('id')->on('encontrista');
            $table->foreign('tipo_contacto')->references('id')->on('tipo_contacto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contactos');
    }
}
