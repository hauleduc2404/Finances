<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingServiceBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_service_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('icon', 40);
            $table->string('title', 100);
            $table->string('content', 255);
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
        Schema::dropIfExists('landing_service_blocks');
    }
}
