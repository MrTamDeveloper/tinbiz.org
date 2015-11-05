<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTourDestinationFieldsToBeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour_destinations', function (Blueprint $table) {
            $table->string('thumbnail')->nullable()->change();
            $table->float('glat')->nullable()->change();
            $table->float('glong')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_destinations', function (Blueprint $table) {
            //
        });
    }
}
