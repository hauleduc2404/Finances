<?php

namespace App\Services;

use App\Models\LandingApplyLoan;
use Illuminate\Http\Request;

class LandingApplyLoanService
{
    public static function getAllApplyLoan()
    {
        return LandingApplyLoan::all();
    }

    public static function isLimited()
    {
        return LandingApplyLoan::count() >= config('landing.limit.apply-loan');
    }

    public static function detail($id)
    {
        return LandingApplyLoan::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingApplyLoan::where('id', $id)->update([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'activate' => $request->input('activate') ?? true
        ]);
        return $intro;
    }

    public static function addApplyLoan($fullname, $email, $phone)
    {
        return LandingApplyLoan::insert([
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'activate' => true
        ]);
    }

    public static function remove($id)
    {
        return LandingApplyLoan::destroy($id);
    }
}
