<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nationality');
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('payment_method');
            $table->timestamp('departure_date');
            $table->timestamp('arrival_date');
            $table->tinyInteger('duration');
            $table->string('arrival_port');
            $table->string('destinations');
            $table->tinyInteger('adults');
            $table->tinyInteger('children');
            $table->tinyInteger('babies');
            $table->text('comment');
            $table->string('hotel_class');
            $table->string('hotel_name');
            $table->string('hotel_room_reference');
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
        Schema::drop('tour_requests');
    }
}
