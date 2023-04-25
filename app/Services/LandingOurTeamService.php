<?php

namespace App\Services;

use App\Models\LandingOurTeam;
use Illuminate\Http\Request;

class LandingOurTeamService
{
    public static function getAllOurTeam($service_id)
    {
        return LandingOurTeam::where('landing_service_id', $service_id)-> get();
    }

    public static function isLimited()
    {
        return LandingOurTeam::count() >= config('landing.limit.ourteam');
    }

    public static function detail($id)
    {
        return LandingOurTeam::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingOurTeam::where('id', $id)->update([
            'avatar' => $request->input('avatar'),
            'fullname' => $request->input('fullname'),
            'position' => $request->input('position'),
            'youtube_url' => $request->input('youtube_url'),
            'linkedin_url' => $request->input('linkedin_url'),
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'activate' => $request->input('activate') ?? true,
            'landing_service_id' => $request->input('landing_service_id'),
        ]);
        return $intro;
    }

    public static function addOurTeam($avatar, $fullname, $position, $youtube_url, $linkedin_url, $facebook_url, $twitter_url, $landing_service_id)
    {
        return LandingOurTeam::insert([
            'avatar' => $avatar,
            'fullname' => $fullname,
            'position' => $position,
            'youtube_url' => $youtube_url,
            'linkedin_url' => $linkedin_url,
            'facebook_url' => $facebook_url,
            'twitter_url' => $twitter_url,
            'activate' => true,
            'landing_service_id' => $landing_service_id
        ]);
    }

    public static function remove($id)
    {
        return LandingOurTeam::destroy($id);
    }
}
