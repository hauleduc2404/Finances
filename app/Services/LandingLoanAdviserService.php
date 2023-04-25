<?php

namespace App\Services;

use App\Models\LandingLoanAdviser;
use Illuminate\Http\Request;

class LandingLoanAdviserService
{
    public static function getAllLoanAdviser()
    {
        return LandingLoanAdviser::all();
    }

    public static function isLimited()
    {
        return LandingLoanAdviser::count() >= config('landing.limit.adviser');
    }

    public static function detail($id)
    {
        return LandingLoanAdviser::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingLoanAdviser::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'activate' => $request->input('activate') ?? true
        ]);
        return $intro;
    }

    public static function addLoanAdviser($title, $content, $description, $address, $email, $phone)
    {
        return LandingLoanAdviser::insert([
            'title' => $title,
            'content' => $content,
            'description' => $description,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'activate' => true
        ]);
    }

    public static function remove($id)
    {
        return LandingLoanAdviser::destroy($id);
    }
}
