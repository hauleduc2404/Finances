<?php

namespace App\Services;

use App\Models\LandingPractiveAreaItem;
use App\Models\LandingPractiveArea;
use Illuminate\Http\Request;

class LandingPractiveAreaItemService
{
    public static function getAllPractiveAreaItem($id)
    {
        return LandingPractiveAreaItem::where('landing_practive_area_id', $id)->get();
    }

    public static function isLimited()
    {
        return LandingPractiveAreaItem::count() >= config('landing.limit.practive-area-item');
    }

    public static function detail($id)
    {
        return LandingPractiveAreaItem::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingPractiveAreaItem::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'icon' => $request->input('icon'),
            'activate' => $request->input('activate') ?? true,
            'landing_practive_area_id' => $request->input('landing_practive_area_id'),
        ]);
        return $intro;
    }

    public static function addPractiveAreaItem($title, $content, $icon, $landing_practive_area_id)
    {
        return LandingPractiveAreaItem::insert([
            'title' => $title,
            'content' => $content,
            'icon' => $icon,
            'activate' => true,
            'landing_practive_area_id' => $landing_practive_area_id
        ]);
    }

    public static function remove($id)
    {
        return LandingPractiveAreaItem::destroy($id);
    }
}
