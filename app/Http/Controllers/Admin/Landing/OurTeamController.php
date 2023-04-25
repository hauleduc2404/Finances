<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\OurTeam\AddOurTeamRequest;
use App\Http\Requests\Admin\Landing\OurTeam\RemoveOurTeamRequest;
use App\Http\Requests\Admin\Landing\OurTeam\UpdateOurTeamRequest;
use App\Services\LandingOurTeamService;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index($service_id)
    {
        $mode = 'view';
        $service = LandingServiceModelService::detail($service_id);
        $ourTeams = LandingOurTeamService::getAllOurTeam($service_id);
        return view('admin.pages.cms.landing-page.ourteam.index', compact('mode', 'ourTeams', 'service'));
    }

    public function add(AddOurTeamRequest $request)
    {
        if (LandingOurTeamService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng records tối đa là 4');
        }

        $avatar = $request->input('avatar');
        $fullname = $request->input('fullname');
        $position = $request->input('position');
        $youtube_url = $request->input('youtube_url');
        $linkedin_url = $request->input('linkedin_url');
        $facebook_url = $request->input('facebook_url');
        $twitter_url = $request->input('twitter_url');
        $landing_service_id = $request->input('landing_service_id');

        if (LandingOurTeamService::addOurTeam($avatar, $fullname, $position, $youtube_url, $linkedin_url, $facebook_url, $twitter_url, $landing_service_id)) {
            return redirect()->back()->with('success', 'Thêm dữ liệu thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [Component:01]!');
    }

    public function detail($service_id, $id)
    {
        $mode = 'edit';
        $ourTeams = LandingOurTeamService::getAllOurTeam($service_id);
        $service = LandingServiceModelService::detail($service_id);
        $detail = LandingOurTeamService::detail($id);
        return view('admin.pages.cms.landing-page.ourteam.index', compact('mode', 'ourTeams', 'detail', 'service'));
    }

    public function update($id, AddOurTeamRequest $request)
    {
        if (LandingOurTeamService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật slide thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [Component:01]!');
    }

    public function remove(RemoveOurTeamRequest $request)
    {
        LandingOurTeamService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá dữ liệu thành công!');
    }
}
