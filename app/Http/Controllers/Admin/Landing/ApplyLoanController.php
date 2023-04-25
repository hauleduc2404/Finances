<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\ApplyLoan\AddApplyLoanRequest;
use App\Http\Requests\Admin\Landing\ApplyLoan\RemoveApplyLoanRequest;
use App\Http\Requests\Admin\Landing\ApplyLoan\UpdateApplyLoanRequest;
use App\Services\LandingApplyLoanService;
use Illuminate\Http\Request;

class ApplyLoanController extends Controller
{
    public function index()
    {
        $mode = 'view';
        $applyLoans = LandingApplyLoanService::getAllApplyLoan();
        return view('admin.pages.cms.landing-page.apply-loan.index', compact('mode', 'applyLoans'));
    }

    public function add(AddApplyLoanRequest $request)
    {
        if (LandingApplyLoanService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng apply loan tối đa là 5');
        }

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $phone = $request->input('phone');

        if (LandingApplyLoanService::addApplyLoan($fullname, $email, $phone)) {
            return redirect()->back()->with('success', 'Thêm apply loan thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [ApplyLoan:01]!');
    }

    public function detail($id)
    {
        $mode = 'edit';
        $applyLoans = LandingApplyLoanService::getAllApplyLoan();
        $detail = LandingApplyLoanService::detail($id);
        return view('admin.pages.cms.landing-page.apply-loan.index', compact('mode', 'applyLoans', 'detail'));
    }

    public function update($id, AddApplyLoanRequest $request)
    {
        if (LandingApplyLoanService::update($id, $request)) {
            $mode = 'view';
            return redirect()->back()->with('success', 'Cập nhật apply loan thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [ApplyLoan:01]!');
    }

    public function remove(RemoveApplyLoanRequest $request)
    {
        LandingApplyLoanService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá apply-loan thành công!');
    }
}
