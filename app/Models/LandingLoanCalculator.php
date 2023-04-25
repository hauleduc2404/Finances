<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingLoanCalculator extends Model
{
    use HasFactory;
    protected $table = 'landing_loan_calculators';

    protected $fillable = ['activate', 'interest_rate', 'start_date', 'end_date', 'activate', 'landing_service_id'];
    
    protected $dates = [
        'created_at',
        'updated_at',
        'start_date',
        'end_date'
    ];

    public function service() {
        return $this->belongsTo('App\Models\LandingServiceModel');
    }
}
