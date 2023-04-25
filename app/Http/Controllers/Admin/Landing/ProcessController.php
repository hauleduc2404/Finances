<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\Process\AddProcessRequest;
use App\Http\Requests\Admin\Landing\Process\RemoveProcessRequest;
use App\Http\Requests\Admin\Landing\Process\UpdateProcessRequest;
use App\Services\LandingProcessService;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index($service_id)
    {
        $mode = 'view';
        $service = LandingServiceModelService::detail($service_id);
        $processes = LandingProcessService::getAllProcess($service_id);
        return view('admin.pages.cms.landing-page.process.index', compact('mode', 'processes', 'service'));
    }

    public function add(AddProcessRequest $request)
    {
        if (LandingProcessService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng dữ liệu tối đa là 4');
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $icon = $request->input('icon');
        $landing_service_id = $request->input('landing_service_id');

        if (LandingProcessService::addProcess($title, $content, $icon, $landing_service_id)) {
            return redirect()->back()->with('success', 'Thêm dữ liệu thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [Process:01]!');
    }

    public function detail($service_id, $id)
    {
        $mode = 'edit';
        $processes = LandingProcessService::getAllProcess($service_id);
        $service = LandingServiceModelService::detail($service_id);
        $detail = LandingProcessService::detail($id);
        return view('admin.pages.cms.landing-page.process.index', compact('mode', 'processes', 'detail', 'service'));
    }

    public function update($id, AddProcessRequest $request)
    {
        if (LandingProcessService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật dữ liệu thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [Process:01]!');
    }

    public function remove(RemoveProcessRequest $request)
    {
        LandingProcessService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!');
    }
}
