<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Services\LandingAboutUsService;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $aboutUs = LandingAboutUsService::get();
        if (!$aboutUs) {
            $aboutUs = LandingAboutUsService::initialize();
        }

        return view('admin.pages.cms.landing-page.about-us.index', compact('aboutUs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $updateSuccess = LandingAboutUsService::update($id, $request);
        if ($updateSuccess) {
            return redirect()->back()->with('success', 'Cập nhật giới thiệu công ty thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [ABOUT_US:01]');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
