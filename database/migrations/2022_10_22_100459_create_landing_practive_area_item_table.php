<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPractiveAreaItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_practive_area_items', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('content', 200);
            $table->string('icon', 255)->nullable();
            $table->boolean('activate');
            $table->bigInteger('landing_practive_area_id');
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
        Schema::dropIfExists('landing_practive_area_items');
    }
}
