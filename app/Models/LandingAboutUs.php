<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingAboutUs extends Model
{
    use HasFactory;

    protected $table = 'landing_about_us';

    protected $fillable = ["image_1", "image_2", "title", "content", "commit_1", "commit_2", "commit_3", "commit_4"];
}
