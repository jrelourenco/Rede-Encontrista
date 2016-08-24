<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_encontrista')->unsigned();
            $table->integer('contact_type')->unsigned();
            $table->string('contact');
            $table->string('description');
            $table->foreign('id_encontrista')->references('id')->on('encontristas');
            $table->foreign('contact_type')->references('id')->on('contact_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
