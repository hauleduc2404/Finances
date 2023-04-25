<?php

namespace App\Services;

use App\Models\LandingPractiveArea;
use Illuminate\Http\Request;

class LandingPractiveAreaService
{
    public static function getAllPractiveArea($service_id)
    {
        return LandingPractiveArea::where('landing_service_id', $service_id)->get();
    }

    public static function isLimited()
    {
        return LandingPractiveArea::count() >= config('landing.limit.practive-area');
    }

    public static function detail($id)
    {
        return LandingPractiveArea::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingPractiveArea::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'activate' => $request->input('activate') ?? true,
            'landing_service_id' => $request->input('landing_service_id'),
        ]);
        return $intro;
    }

    public static function addPractiveArea($title, $content, $description, $image, $landing_service_id)
    {
        return LandingPractiveArea::insert([
            'title' => $title,
            'content' => $content,
            'description' => $description,
            'image' => $image,
            'activate' => true,
            'landing_service_id' => $landing_service_id
        ]);
    }

    public static function remove($id)
    {
        return LandingPractiveArea::destroy($id);
    }
}
