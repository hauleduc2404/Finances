<?php

namespace App\Services;

use App\Models\LandingProcess;
use Illuminate\Http\Request;

class LandingProcessService
{
    public static function getAllProcess($service_id)
    {
        return LandingProcess::where('landing_service_id', $service_id)->get();
    }

    public static function isLimited()
    {
        return LandingProcess::count() >= config('landing.limit.process');
    }

    public static function detail($id)
    {
        return LandingProcess::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingProcess::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'icon' => $request->input('icon'),
            'activate' => $request->input('activate') ?? true,
            'landing_service_id' => $request->input('landing_service_id'),
        ]);
        return $intro;
    }

    public static function addProcess($title, $content, $icon, $landing_service_id)
    {
        return LandingProcess::insert([
            'title' => $title,
            'content' => $content,
            'icon' => $icon,  
            'activate' => true,
            'landing_service_id' => $landing_service_id          
        ]);
    }

    public static function remove($id)
    {
        return LandingProcess::destroy($id);
    }
}
