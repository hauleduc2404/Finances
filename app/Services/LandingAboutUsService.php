<?php

namespace App\Services;

use App\Models\LandingAboutUs;
use Illuminate\Http\Request;

class LandingAboutUsService
{
    public static function get()
    {
        return LandingAboutUs::where('id', '>', 0)->first();
    }

    public static function initialize()
    {
        return LandingAboutUs::create(
            [
                'title' => 'Tiêu đề',
                'content' => ' '
            ]
        );
    }

    public static function update($id, Request $request)
    {
        return LandingAboutUs::where('id', $id)->update(
            $request->only(["image_1", "image_2", "title", "content", "commit_1", "commit_2", "commit_3", "commit_4"])
        );
    }
}
