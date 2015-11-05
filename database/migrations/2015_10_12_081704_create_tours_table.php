<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('meta_title');
            $table->string('meta_key');
            $table->string('meta_desc');
            $table->string('thumbnail');
            $table->string('map');
            $table->tinyInteger('depart_from');
            $table->tinyInteger('going_to');
            $table->tinyInteger('duration');
            $table->string('destinations');
            $table->decimal('original_price', 5, 2);
            $table->decimal('price', 5, 2);
            $table->timestamp('start');
            $table->timestamp('finish');
            $table->text('summary');
            $table->text('content');
            $table->boolean('day_tour');
            $table->boolean('throughout');
            $table->boolean('popular_tour');
            $table->boolean('active');
            $table->string('photos');
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
        Schema::drop('tours');
    }
}
