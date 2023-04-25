<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'loan_money', 'interest_rate', 'duration_month', 'is_activate', 'time_verify', 'message_withdraw'];

    protected $appends = ['loan_money_label'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function payers()
    {
        return $this->hasMany(Payer::class, 'loan_id', 'id');
    }

    public function getLoanMoneyLabelAttribute()
    {
        return number_format($this->loan_money, 0, ',', '.').' đ';

    }
}
