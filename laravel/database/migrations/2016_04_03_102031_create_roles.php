<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_encontrista')->unsigned();
            $table->integer('role')->unsigned();
            $table->integer('group')->unsigned();
            $table->foreign('id_encontrista')->references('id')->on('encontristas');
            $table->foreign('role')->references('id')->on('role_types');
            $table->foreign('group')->references('id')->on('groups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
