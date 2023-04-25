<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPractiveArea extends Model
{
    use HasFactory;
    protected $table = 'landing_practive_areas';

    protected $fillable = ['activate', 'title', 'content', 'description', 'image', 'landing_service_id'];

    public function practiveAreaItem() {
        return $this->hasMany('App\Models\LandingPractiveAreaItem');
    }

    public function service() {
        return $this->belongsTo('App\Models\LandingServiceModel');
    }
}
