<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingOurTeam extends Model
{
    use HasFactory;
    protected $table = 'landing_our_teams';

    protected $fillable = ['activate', 'avatar', 'fullname', 'position', 'youtube_url', 'linkedin_url', 'facebook_url', 'twitter_url', 'landing_service_id'];
    
    public function service() {
        return $this->belongsTo('App\Models\LandingServiceModel');
    }
}
