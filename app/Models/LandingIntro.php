<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingIntro extends Model
{
    use HasFactory;
    protected $table = 'landing_intros';

    protected $fillable = ['activate, title, content, link'];
}
