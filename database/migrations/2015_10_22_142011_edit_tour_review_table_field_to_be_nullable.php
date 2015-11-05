<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTourReviewTableFieldToBeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour_reviews', function (Blueprint $table) {
            $table->string('avatar')->nullable()->change();
            $table->string('review_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_reviews', function (Blueprint $table) {
            //
        });
    }
}
