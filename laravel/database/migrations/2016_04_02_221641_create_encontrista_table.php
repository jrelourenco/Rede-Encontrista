<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncontristaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontrista', function (Blueprint $table) {
            $table->increments('id_encontrista');
            $table->timestamps();
            $table->string('nome');
            $table->string('alcunha');
            $table->time('data_nascimento');
            $table->string('morada');
            $table->string('cod_postal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encontrista');
    }
}
