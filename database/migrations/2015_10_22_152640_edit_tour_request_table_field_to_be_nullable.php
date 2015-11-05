<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTourRequestTableFieldToBeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour_requests', function (Blueprint $table) {
            $table->string('destinations')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('hotel_name')->nullable()->change();
            $table->string('hotel_room_reference')->nullable()->change();
            $table->string('children')->nullable()->change();
            $table->string('babies')->nullable()->change();
            $table->text('comment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_requests', function (Blueprint $table) {
            //
        });
    }
}
