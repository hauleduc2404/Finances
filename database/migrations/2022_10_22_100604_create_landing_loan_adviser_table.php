<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingLoanAdviserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_loan_advisers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('description', 255);
            $table->string('content', 200);
            $table->string('address', 255);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->boolean('activate');
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
        Schema::dropIfExists('landing_loan_advisers');
    }
}
