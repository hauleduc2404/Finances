<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingServiceModel extends Model
{
    use HasFactory;
    protected $table = 'landing_services';

    protected $fillable = ['activate', 'title', 'description', 'display_order', 'service_type'];

    public function serviceBlock() {
        return $this->hasMany('App\Models\LandingServiceBlock', 'landing_service_id', 'id');
    }
    
    public function loanCalculator() {
        return $this->hasMany('App\Models\LandingLoanCalculator', 'landing_service_id', 'id');
    }

    public function ourTeam() {
        return $this->hasMany('App\Models\LandingOurTeam', 'landing_service_id', 'id');
    }

    public function practiveArea() {
        return $this->hasMany('App\Models\LandingPractiveArea', 'landing_service_id', 'id');
    }

    public function process() {
        return $this->hasMany('App\Models\LandingProcess', 'landing_service_id', 'id');
    }
}
