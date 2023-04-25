<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingServiceBlock extends Model
{
    use HasFactory;
    protected $table = 'landing_service_blocks';

    protected $fillable = ['activate', 'title', 'content', 'icon', 'landing_service_id'];

    public function service() {
        return $this->belongsTo('App\Models\LandingServiceModel');
    }
}
