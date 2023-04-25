<?php

namespace App\Services;

use App\Models\LandingLoanCalculator;
use Illuminate\Http\Request;

class LandingLoanCalculatorService
{
    public static function getAllLoanCalculator($service_id)
    {
        return LandingLoanCalculator::where('landing_service_id', $service_id)->get();
    }

    public static function isLimited()
    {
        return LandingLoanCalculator::count() >= config('landing.limit.loan-calculator');
    }

    public static function detail($id)
    {
        return LandingLoanCalculator::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $intro = LandingLoanCalculator::where('id', $id)->update([
            'interest_rate' => $request->input('interest_rate'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'landing_service_id' => $request->input('landing_service_id'),
            'activate' => $request->input('activate') ?? true,
        ]);
        return $intro;
    }

    public static function addLoanCalculator($interest_rate, $start_date, $end_date, $landing_service_id)
    {
        return LandingLoanCalculator::insert([
            'interest_rate' => $interest_rate,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'landing_service_id' => $landing_service_id,
            'activate' => true
        ]);
    }

    public static function remove($id)
    {
        return LandingLoanCalculator::destroy($id);
    }
}
