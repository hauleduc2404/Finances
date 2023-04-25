<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\LoanAdviser\AddLoanAdviserRequest;
use App\Http\Requests\Admin\Landing\LoanAdviser\RemoveLoanAdviserRequest;
use App\Http\Requests\Admin\Landing\LoanAdviser\UpdateLoanAdviserRequest;
use App\Services\LandingLoanAdviserService;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class LoanAdviserController extends Controller
{
    public function index()
    {
        $mode = 'view';
        $loanAdvisers = LandingLoanAdviserService::getAllLoanAdviser();
        return view('admin.pages.cms.landing-page.loan-adviser.index', compact('mode', 'loanAdvisers'));
    }

    public function add(AddLoanAdviserRequest $request)
    {
        if (LandingLoanAdviserService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng adviser tối đa là 1');
        }

        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');

        if (LandingLoanAdviserService::addLoanAdviser($title, $content, $description, $address, $email, $phone)) {
            return redirect()->back()->with('success', 'Thêm adviser thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [LoanAdviser:01]!');
    }

    public function detail($id)
    {
        $mode = 'edit';
        $loanAdvisers = LandingLoanAdviserService::getAllLoanAdviser();
        $detail = LandingLoanAdviserService::detail($id);
        return view('admin.pages.cms.landing-page.loan-adviser.index', compact('mode', 'loanAdvisers', 'detail'));
    }

    public function update($id, AddLoanAdviserRequest $request)
    {
        if (LandingLoanAdviserService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật adviser thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [LoanAdviser:01]!');
    }

    public function remove(RemoveLoanAdviserRequest $request)
    {
        LandingLoanAdviserService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá adviser thành công!');
    }
}
