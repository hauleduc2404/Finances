<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('loan_month')->default('3, 6, 9, 12');
            $table->float('interest_rate',4,3)->default(0.108);
            $table->float('min_loan', 16,2)->default(0.0);
            $table->float('max_loan', 16,2)->default(0.0);
            $table->float('limit_per_switch_loan', 16,2)->default(1000.0);
            $table->string('support_link')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
