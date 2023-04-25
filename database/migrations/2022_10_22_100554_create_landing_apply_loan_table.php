<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingApplyLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_apply_loans', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
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
        Schema::dropIfExists('landing_apply_loans');
    }
}
