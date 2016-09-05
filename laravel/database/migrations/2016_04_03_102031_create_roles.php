<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->timestamps();

            $table->integer('encontrista_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('group_id')->unsigned();

            $table->string('school_year');
            $table->unique(['encontrista_id', 'role_id', 'group_id', 'school_year']);


            $table->foreign('encontrista_id')->references('id')->on('encontristas');
            $table->foreign('role_id')->references('id')->on('role_types');
            $table->foreign('group_id')->references('id')->on('groups');

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
