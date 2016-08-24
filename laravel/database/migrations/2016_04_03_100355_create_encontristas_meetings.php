<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncontristasMeetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontrista_meeting', function (Blueprint $table) {
            $table->integer('encontrista_id')->unsigned();
            $table->integer('meeting_id')->unsigned();
            $table->timestamps();
            $table->primary(['meeting_id', 'encontrista_id']);
            $table->enum('role',['participante','animador','exterior'])->default('participante');
            $table->integer('subscriber')->unsigned();
            $table->boolean('participated')->default(false);
            $table->boolean('payed')->default(false);

            $table->foreign('encontrista_id')->references('id')->on('encontristas');
            $table->foreign('subscriber')->references('id')->on('encontristas');
            $table->foreign('meeting_id')->references('id')->on('meetings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encontrista_meeting');
    }
}
