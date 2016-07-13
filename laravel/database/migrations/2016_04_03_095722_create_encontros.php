<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncontros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lugar');
            $table->dateTime('data_inicio');
            $table->dateTime('data_final');
            $table->string('descricao');
            $table->integer('id_tipo')->unsigned();



            $table->foreign('id_tipo')->references('id')->on('tipo_encontros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encontros');
    }
}
