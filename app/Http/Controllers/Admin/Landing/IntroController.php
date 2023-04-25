<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\AddIntroRequest;
use App\Http\Requests\Admin\Landing\RemoveIntroRequest;
use App\Http\Requests\Admin\Landing\UpdateIntroRequest;
use App\Services\LandingIntroService;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index()
    {
        $mode = 'view';
        $intros = LandingIntroService::getAllIntro();
        return view('admin.pages.cms.landing-page.intro.index', compact('mode', 'intros'));
    }

    public function add(AddIntroRequest $request)
    {
        if (LandingIntroService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng intro tối đa là 4');
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $link = $request->input('link');

        if (LandingIntroService::addIntro($title, $content, $link)) {
            return redirect()->back()->with('success', 'Thêm intro thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [Intro:01]!');
    }

    public function detail($id)
    {
        $mode = 'edit';
        $intros = LandingIntroService::getAllIntro();
        $detail = LandingIntroService::detail($id);
        return view('admin.pages.cms.landing-page.intro.index', compact('mode', 'intros', 'detail'));
    }

    public function update($id, AddIntroRequest $request)
    {
        if (LandingIntroService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật intro thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [Intro:01]!');
    }

    public function remove(RemoveIntroRequest $request)
    {
        LandingIntroService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá intro thành công!');
    }

}
