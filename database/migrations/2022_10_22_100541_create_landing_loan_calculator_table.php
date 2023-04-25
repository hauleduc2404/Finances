<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingLoanCalculatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_loan_calculators', function (Blueprint $table) {
            $table->id();
            $table->float('interest_rate');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
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
        Schema::dropIfExists('landing_loan_calculators');
    }
}
