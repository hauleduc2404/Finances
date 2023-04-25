<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payer extends Model
{
    use HasFactory;
    protected $fillable = ['loan_id', 'user_id', 'money_paid', 'interest', 'pay_month', 'transaction_id', 'notes'];

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id', 'id');
    }
}
