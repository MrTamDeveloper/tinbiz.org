<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->string('tour_name');
            $table->string('nationality');
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('payment_method');
            $table->timestamp('departure_date');
            $table->timestamp('arrival_date');
            $table->tinyInteger('adults');
            $table->tinyInteger('children');
            $table->tinyInteger('babies');
            $table->boolean('day_tour');
            $table->text('comment');
            $table->string('hotel_class');
            $table->string('hotel_name');
            $table->string('hotel_room_reference');
            $table->double('total_deposit');
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
        Schema::drop('tour_booking');
    }
}
