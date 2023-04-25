<?php

namespace App\Services;

use App\Models\LandingIntro;
use Illuminate\Http\Request;

class LandingIntroService
{
    public static function getAllIntro()
    {
        return LandingIntro::all();
    }

    public static function isLimited()
    {
        return LandingIntro::count() >= config('landing.limit.intro');
    }

    public static function detail($id)
    {
        return LandingIntro::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingIntro::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'link' => $request->input('link'),
        ]);
        return $intro;
    }

    public static function addIntro($title, $content, $link)
    {
        return LandingIntro::insert([
            'title' => $title,
            'content' => $content,
            'link' => $link
        ]);
    }

    public static function remove($id)
    {
        return LandingIntro::destroy($id);
    }
}
