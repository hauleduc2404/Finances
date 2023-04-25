<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPractiveAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_practive_areas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('content', 200);
            $table->string('description', 255);
            $table->string('image', 255)->nullable();
            $table->boolean('activate');
            $table->bigInteger('landing_service_id');
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
        Schema::dropIfExists('landing_practive_areas');
    }
}
