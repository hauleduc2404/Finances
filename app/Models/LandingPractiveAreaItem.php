<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPractiveAreaItem extends Model
{
    use HasFactory;
    protected $table = 'landing_practive_area_items';

    protected $fillable = ['activate', 'title', 'content', 'icon', 'landing_practive_area_id'];

    public function practiveArea() {
        return $this->belongsTo('App\Models\LandingPractiveArea');
    }
}
