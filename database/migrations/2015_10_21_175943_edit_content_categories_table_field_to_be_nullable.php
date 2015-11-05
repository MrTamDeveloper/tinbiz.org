<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditContentCategoriesTableFieldToBeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content_categories', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->change();
            $table->string('meta_key')->nullable()->change();
            $table->string('meta_desc')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->integer('parent')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_categories', function (Blueprint $table) {
            //
        });
    }
}
