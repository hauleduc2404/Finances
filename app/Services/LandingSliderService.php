<?php

namespace App\Services;

use App\Models\LandingSlider;
use Illuminate\Http\Request;

class LandingSliderService
{
    public static function getAllSlider()
    {
        return LandingSlider::all();
    }

    public static function isLimited()
    {
        return LandingSlider::count() >= config('landing.limit.intro');
    }

    public static function detail($id)
    {
        return LandingSlider::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingSlider::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'link' => $request->input('link'),
            'activate' => $request->input('activate') ?? true,
        ]);
        return $intro;
    }

    public static function addSlider($title, $content, $link)
    {
        return LandingSlider::insert([
            'title' => $title,
            'content' => $content,
            'link' => $link,
            'activate' => true
        ]);
    }

    public static function remove($id)
    {
        return LandingSlider::destroy($id);
    }
}
