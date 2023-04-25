<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = ['loan_month', 'interest_rate', 'min_loan', 'max_loan', 'limit_per_switch_loan', 'support_link', 'withdraw_password', 'default_message_withdraw'];
}
