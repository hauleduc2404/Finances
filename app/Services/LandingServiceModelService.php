<?php

namespace App\Services;

use App\Models\LandingServiceModel;
use Illuminate\Http\Request;

class LandingServiceModelService
{
    public static function getAllService()
    {
        return LandingServiceModel::orderBy('display_order', 'asc')->get();
    }

    public static function getAllServiceWithRelated()
    {
        return LandingServiceModel::with('serviceBlock')
            ->with('process')
            ->with('loanCalculator')
            ->with('ourTeam')
            ->with('practiveArea')
            ->orderBy('display_order', 'asc')->get();
    }

    public static function isLimited()
    {
        return LandingServiceModel::count() >= config('landing.limit.intro');
    }

    public static function detail($id)
    {
        return LandingServiceModel::findOrFail($id);
    }

    public static function update($id, Request $request)
    {
        $service = LandingServiceModel::where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'display_order' => $request->input('display_order'),
            'service_type' => $request->input('service_type'),
            'activate' => $request->input('activate') ?? true,
        ]);
        return $service;
    }

    public static function addService($title, $description, $display_order, $service_type)
    {
        return LandingServiceModel::insert([
            'title' => $title,
            'description' => $description,
            'display_order' => $display_order,
            'service_type' => $service_type,
            'activate' => true
        ]);
    }

    public static function remove($id)
    {
        return LandingServiceModel::destroy($id);
    }
}
