<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\PractiveAreaItem\AddPractiveAreaItemRequest;
use App\Http\Requests\Admin\Landing\PractiveAreaItem\RemovePractiveAreaItemRequest;
use App\Http\Requests\Admin\Landing\PractiveAreaItem\UpdatePractiveAreaItemRequest;
use App\Services\LandingPractiveAreaService;
use App\Services\LandingPractiveAreaItemService;
use Illuminate\Http\Request;

class PractiveAreaItemController extends Controller
{
    public function index($practive_area_id)
    {
        $mode = 'view';
        $service = LandingPractiveAreaService::detail($practive_area_id);
        $practiveAreaItems = LandingPractiveAreaItemService::getAllPractiveAreaItem($practive_area_id);
        return view('admin.pages.cms.landing-page.practive-area-item.index', compact('mode', 'practiveAreaItems', 'service'));
    }

    public function add(AddPractiveAreaItemRequest $request)
    {
        if (LandingPractiveAreaItemService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng dịch vụ tối đa là 4');
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $icon = $request->input('icon');
        $landing_practive_area_id = $request->input('landing_practive_area_id');

        if (LandingPractiveAreaItemService::addPractiveAreaItem($title, $content, $icon, $landing_practive_area_id)) {
            return redirect()->back()->with('success', 'Thêm dịch vụ thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [PractiveAreaItem:01]!');
    }

    public function detail($practive_area_id, $id)
    {
        $mode = 'edit';
        $practiveAreaItems = LandingPractiveAreaItemService::getAllPractiveAreaItem($practive_area_id);
        $service = LandingPractiveAreaService::detail($practive_area_id);
        $detail = LandingPractiveAreaItemService::detail($id);
        return view('admin.pages.cms.landing-page.practive-area-item.index', compact('mode', 'practiveAreaItems', 'detail', 'service'));
    }

    public function update($id, AddPractiveAreaItemRequest $request)
    {
        if (LandingPractiveAreaItemService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật dịch vụ thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [PractiveAreaItem:01]!');
    }

    public function remove(RemovePractiveAreaItemRequest $request)
    {
        LandingPractiveAreaItemService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá dịch vụ thành công!');
    }
}
