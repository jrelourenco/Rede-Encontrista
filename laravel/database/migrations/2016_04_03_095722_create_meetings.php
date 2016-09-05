<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('place');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('description')->nullable();
            $table->integer('type_id')->unsigned();


            $table->foreign('type_id')->references('id')->on('meeting_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meetings');
    }
}
