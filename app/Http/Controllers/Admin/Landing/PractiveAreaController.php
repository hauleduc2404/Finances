<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\PractiveArea\AddPractiveAreaRequest;
use App\Http\Requests\Admin\Landing\PractiveArea\RemovePractiveAreaRequest;
use App\Http\Requests\Admin\Landing\PractiveArea\UpdatePractiveAreaRequest;
use App\Services\LandingPractiveAreaService;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class PractiveAreaController extends Controller
{
    public function index($service_id)
    {
        $mode = 'view';
        $service = LandingServiceModelService::detail($service_id);
        $practiveAreas = LandingPractiveAreaService::getAllPractiveArea($service_id);
        return view('admin.pages.cms.landing-page.practive-area.index', compact('mode', 'practiveAreas', 'service'));
    }

    public function add(AddPractiveAreaRequest $request)
    {
        if (LandingPractiveAreaService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng dịch vụ tối đa là 4');
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $description = $request->input('description');
        $image = $request->input('image');
        $landing_service_id = $request->input('landing_service_id');

        if (LandingPractiveAreaService::addPractiveArea($title, $content, $description, $image, $landing_service_id)) {
            return redirect()->back()->with('success', 'Thêm dịch vụ thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [PractiveArea:01]!');
    }

    public function detail($service_id, $id)
    {
        $mode = 'edit';
        $practiveAreas = LandingPractiveAreaService::getAllPractiveArea($service_id);
        $service = LandingServiceModelService::detail($service_id);
        $detail = LandingPractiveAreaService::detail($id);
        return view('admin.pages.cms.landing-page.practive-area.index', compact('mode', 'practiveAreas', 'detail', 'service'));
    }

    public function update($id, AddPractiveAreaRequest $request)
    {
        if (LandingPractiveAreaService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật dữ liệu thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [PractiveArea:01]!');
    }

    public function remove(RemovePractiveAreaRequest $request)
    {
        LandingPractiveAreaService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!');
    }
}
