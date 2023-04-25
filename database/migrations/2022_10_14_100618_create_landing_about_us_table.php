<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_about_us', function (Blueprint $table) {
            $table->id();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('title');
            $table->string('content', 255);
            $table->string('commit_1')->nullable();
            $table->string('commit_2')->nullable();
            $table->string('commit_3')->nullable();
            $table->string('commit_4')->nullable();
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
        Schema::dropIfExists('landing_about_us');
    }
}
