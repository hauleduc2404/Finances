<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\ServiceBlock\AddServiceBlockRequest;
use App\Http\Requests\Admin\Landing\ServiceBlock\RemoveServiceBlockRequest;
use App\Http\Requests\Admin\Landing\ServiceBlock\UpdateServiceBlockRequest;
use App\Services\LandingServiceBlockService;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class ServiceBlockController extends Controller
{
    public function index($service_id)
    {
        $mode = 'view';
        $service = LandingServiceModelService::detail($service_id);
        $serviceBlocks = LandingServiceBlockService::getAllServiceBlock($service_id);
        return view('admin.pages.cms.landing-page.service-block.index', compact('mode', 'service', 'serviceBlocks'));
    }

    public function add(AddServiceBlockRequest $request)
    {
        if (LandingServiceBlockService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng dịch vụ tối đa là 8');
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $icon = $request->input('icon');
        $landing_service_id = $request->input('landing_service_id');

        if (LandingServiceBlockService::addServiceBlock($title, $content, $icon, $landing_service_id)) {
            return redirect()->back()->with('success', 'Thêm dịch vụ thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [ServiceBlock:01]!');
    }

    public function detail($service_id, $id)
    {
        $mode = 'edit';
        $serviceBlocks = LandingServiceBlockService::getAllServiceBlock($service_id);
        $service = LandingServiceModelService::detail($service_id);
        $detail = LandingServiceBlockService::detail($id);
        return view('admin.pages.cms.landing-page.service-block.index', compact('mode', 'serviceBlocks', 'detail', 'service'));
    }

    public function update($id, AddServiceBlockRequest $request)
    {
        if (LandingServiceBlockService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật dịch vụ thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [ServiceBlock:01]!');
    }

    public function remove(RemoveServiceBlockRequest $request)
    {
        LandingServiceBlockService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá dịch vụ thành công!');
    }
}
