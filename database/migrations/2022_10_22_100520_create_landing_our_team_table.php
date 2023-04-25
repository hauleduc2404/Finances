<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingOurTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_our_teams', function (Blueprint $table) {
            $table->id();
            $table->string('avatar', 255);
            $table->string('fullname', 100);
            $table->string('position', 100);
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
        Schema::dropIfExists('landing_our_teams');
    }
}
