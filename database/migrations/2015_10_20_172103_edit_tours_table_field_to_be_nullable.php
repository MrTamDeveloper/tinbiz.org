<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditToursTableFieldToBeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->change();
            $table->string('meta_key')->nullable()->change();
            $table->string('meta_desc')->nullable()->change();
            $table->string('map')->nullable()->change();
            $table->integer('depart_from')->nullable()->change();
            $table->integer('going_to')->nullable()->change();
            $table->integer('duration')->nullable()->change();
            $table->decimal('original_price')->nullable()->change();
            $table->datetime('start')->nullable()->change();
            $table->datetime('finish')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            //
        });
    }
}
