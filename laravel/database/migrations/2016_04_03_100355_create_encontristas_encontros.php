<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncontristasEncontros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontristas_encontros', function (Blueprint $table) {
            $table->integer('id_encontrista')->unsigned();
            $table->integer('id_encontro')->unsigned();
            $table->primary(['id_encontrista', 'id_encontro']);
            $table->string('role');
            $table->string('subscriber');
            $table->string('participated');
            $table->boolean('payed');

            $table->foreign('id_encontrista')->references('id_encontrista')->on('encontrista');
            $table->foreign('id_encontro')->references('id_encontro')->on('encontros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encontristas_encontros');
    }
}
