<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingApplyLoan extends Model
{
    use HasFactory;
    protected $table = 'landing_apply_loans';

    protected $fillable = ['activate', 'fullname', 'email', 'phone'];

}
