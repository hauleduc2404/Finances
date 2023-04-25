<?php

namespace App\Services;

use App\Models\FeaturedPost;
use Illuminate\Http\Request;

class FeaturedPostService
{
    public static function getAllFeaturedPost()
    {
        return FeaturedPost::all();
    }

    public static function isLimited()
    {
        return FeaturedPost::count() >= config('landing.limit.intro');
    }

    public static function detail($id)
    {
        return FeaturedPost::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = FeaturedPost::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $request->input('image'),
            'activate' => $request->input('activate') ?? true
        ]);
        return $intro;
    }

    public static function addFeaturedPost($title, $content, $image)
    {
        return FeaturedPost::insert([
            'title' => $title,
            'content' => $content,
            'image' => $image,
            'activate' => true
        ]);
    }

    public static function remove($id)
    {
        return FeaturedPost::destroy($id);
    }
}
