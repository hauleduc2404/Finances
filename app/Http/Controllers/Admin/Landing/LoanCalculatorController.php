<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Landing\LoanCalculator\AddLoanCalculatorRequest;
use App\Http\Requests\Admin\Landing\LoanCalculator\RemoveLoanCalculatorRequest;
use App\Http\Requests\Admin\Landing\LoanCalculator\UpdateLoanCalculatorRequest;
use App\Services\LandingLoanCalculatorService;
use App\Services\LandingServiceModelService;
use Illuminate\Http\Request;

class LoanCalculatorController extends Controller
{
    public function index($service_id)
    {
        $mode = 'view';
        $service = LandingServiceModelService::detail($service_id);
        $loanCalculators = LandingLoanCalculatorService::getAllLoanCalculator($service_id);
        return view('admin.pages.cms.landing-page.loan-calculator.index', compact('mode', 'loanCalculators', 'service'));
    }

    public function add(AddLoanCalculatorRequest $request)
    {
        if (LandingLoanCalculatorService::isLimited()) {
            return redirect()->back()->with('fail', 'Số lượng slide tối đa là 4');
        }

        $interest_rate = $request->input('interest_rate');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $landing_service_id = $request->input('landing_service_id');

        if (LandingLoanCalculatorService::addLoanCalculator($interest_rate, $start_date, $end_date, $landing_service_id)) {
            return redirect()->back()->with('success', 'Thêm slide thành công!');
        }

        return redirect()->back()->with('fail', 'Lỗi hệ thống [LoanCalculator:01]!');
    }

    public function detail($service_id, $id)
    {
        $mode = 'edit';
        $loanCalculators = LandingLoanCalculatorService::getAllLoanCalculator($service_id);
        $service = LandingServiceModelService::detail($service_id);
        $detail = LandingLoanCalculatorService::detail($id);
        return view('admin.pages.cms.landing-page.loan-calculator.index', compact('mode', 'loanCalculators', 'detail', 'service'));
    }

    public function update($id, AddLoanCalculatorRequest $request)
    {
        if (LandingLoanCalculatorService::update($id, $request)) {
            return redirect()->back()->with('success', 'Cập nhật slide thành công!');
        }
        return redirect()->back()->with('fail', 'Lỗi hệ thống [LoanCalculator:01]!');
    }

    public function remove(RemoveloanCalculatorRequest $request)
    {
        LandingLoanCalculatorService::remove($request->input('id'));
        return redirect()->back()->with('success', 'Xoá slide thành công!');
    }
}
