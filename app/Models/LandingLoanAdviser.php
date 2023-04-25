<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingLoanAdviser extends Model
{
    use HasFactory;
    protected $table = 'landing_loan_advisers';

    protected $fillable = ['activate', 'title', 'description', 'content', 'address', 'email', 'phone'];
}
