<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAndEditFieldsToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->string('day_tour_start_time')->nullable();
            $table->text('price_detail')->nullable();
            $table->text('photos')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->text('summary')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->integer('day_tour')->default(0)->change();
            $table->integer('throughout')->default(0)->change();
            $table->integer('popular_tour')->default(0)->change();
            $table->integer('active')->default(1)->change();
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
            $table->dropColumn('day_tour_start_time');
            $table->dropColumn('price_detail');
        });
    }
}
