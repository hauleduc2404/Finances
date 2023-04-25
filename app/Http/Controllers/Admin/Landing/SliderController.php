<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\Slider\AddSliderRequest;
use App\Http\Requests\Admin\Landing\Slider\RemoveSliderRequest;
use App\Http\Requests\Admin\Landing\Slider\UpdateSliderRequest;
use App\Services\LandingSliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $mode = 'view';
        $sliders = LandingSliderService::getAllSlider();
        return view('admin.pages.cms.landing-page.slider.index', compact('mode', 'sliders'));
    }

    public function add(AddSliderRequest $request)
    {
        if (LandingSliderService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng slide tối đa là 4');
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $link = $request->input('link');

        if (LandingSliderService::addSlider($title, $content, $link)) {
            return redirect()->back()->with('success', 'Thêm slide thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [Slider:01]!');
    }

    public function detail($id)
    {
        $mode = 'edit';
        $sliders = LandingSliderService::getAllSlider();
        $detail = LandingSliderService::detail($id);
        return view('admin.pages.cms.landing-page.slider.index', compact('mode', 'sliders', 'detail'));
    }

    public function update($id, AddSliderRequest $request)
    {
        if (LandingSliderService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật slide thành công!')->compact('mode');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [Slider:01]!');
    }

    public function remove(RemoveSliderRequest $request)
    {
        LandingSliderService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá slide thành công!');
    }
}
