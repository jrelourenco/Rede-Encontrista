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
        Schema::create('encontrista_encontro', function (Blueprint $table) {
            $table->integer('encontrista_id')->unsigned();
            $table->integer('encontro_id')->unsigned();
            $table->timestamps();
            $table->primary(['encontro_id', 'encontrista_id']);
            $table->enum('role',['participante','animador','exterior'])->default('participante');
            $table->integer('subscriber')->unsigned();
            $table->boolean('participated')->default(false);
            $table->boolean('payed')->default(false);

            $table->foreign('encontrista_id')->references('id')->on('encontrista');
            $table->foreign('subscriber')->references('id')->on('encontrista');
            $table->foreign('encontro_id')->references('id')->on('encontros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encontrista_encontro');
    }
}
