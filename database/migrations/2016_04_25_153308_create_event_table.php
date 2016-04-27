<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()


    {
        Schema::create('events', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('sport_id');
            $table->dateTime('datetime');
            $table->string('duration');
            $table->integer('participant');
            $table->integer('participantmax');
            $table->string('place');

            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
