<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasswordWithdrawFieldToSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            if (!Schema::hasColumns('settings', ['withdraw_password', 'default_message_withdraw'])) {
                $table->string('withdraw_password')->default('123456');
                $table->string('default_message_withdraw')->default('Tiến độ cho vay');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('withdraw_password');
            $table->dropColumn('default_message_withdraw');
        });
    }
}
