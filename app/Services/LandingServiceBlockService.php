<?php

namespace App\Services;

use App\Models\LandingServiceBlock;
use Illuminate\Http\Request;

class LandingServiceBlockService
{
    public static function getAllServiceBlock($service_id)
    {
        return LandingServiceBlock::where('landing_service_id', $service_id)->get();
    }

    public static function isLimited()
    {
        return LandingServiceBlock::count() >= config('landing.limit.service-block');
    }

    public static function detail($id)
    {
        return LandingServiceBlock::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $service_block = LandingServiceBlock::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'icon' => $request->input('icon'),
            'activate' => $request->input('activate') ?? true,
            'landing_service_id' => $request->input('landing_service_id'),
        ]);
        return $service_block;
    }

    public static function addServiceBlock($title, $content, $icon, $landing_service_id)
    {
        return LandingServiceBlock::insert([
            'title' => $title,
            'content' => $content,
            'icon' => $icon,
            'activate' => true,
            'landing_service_id' => $landing_service_id
        ]);
    }

    public static function remove($id)
    {
        return LandingServiceBlock::destroy($id);
    }
}
