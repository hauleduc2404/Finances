<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\ServiceModel\AddServiceModelRequest;
use App\Http\Requests\Admin\Landing\ServiceModel\RemoveServiceModelRequest;
use App\Http\Requests\Admin\Landing\ServiceModel\UpdateServiceModelRequest;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $mode = 'view';
        $services = LandingServiceModelService::getAllService();
        $serviceTypes = config('constants.service_type');
        return view('admin.pages.cms.landing-page.service.index', compact('mode', 'services', 'serviceTypes'));
    }

    public function add(AddServiceModelRequest $request)
    {
        // if (LandingServiceModelService::isLimited()) {
        //     return redirect()->back()->with('fail', 'Số lượng service tối đa là 4');
        // }

        $title = $request->input('title');
        $description = $request->input('description');
        $display_order = $request->input('display_order');
        $service_type = $request->input('service_type');

        if (LandingServiceModelService::addService($title, $description, $display_order, $service_type)) {
            return redirect()->back()->with('success', 'Thêm service thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [Service:01]!');
    }

    public function detail($id)
    {
        $mode = 'edit';
        $services = LandingServiceModelService::getAllService();
        $detail = LandingServiceModelService::detail($id);
        $serviceTypes = config('constants.service_type');
        return view('admin.pages.cms.landing-page.service.index', compact('mode', 'services', 'detail', 'serviceTypes'));
    }

    public function update($id, AddServiceModelRequest $request)
    {
        if (LandingServiceModelService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật service thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [Service:01]!');
    }

    public function remove(RemoveServiceModelRequest $request)
    {
        LandingServiceModelService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá service thành công!');
    }

    public function redirect($id) {
        return view('');
    }
}
