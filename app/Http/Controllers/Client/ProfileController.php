<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\User;
use App\Services\CoreService;
use App\Services\KYCGlobalService;
use App\Services\LoanService;
use App\Services\SettingService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $settingService;

    public function __construct()
    {
        $this->settingService = new SettingService();
    }

    public function profile()
    {
        $setting = $this->settingService->getSetting();
        $loan_range = explode(',', $setting->loan_month);
        return view('finances.pages.index', compact(
            'loan_range',
            'setting'
        ));
    }

    public function login()
    {
        return view('finances.pages.login');
    }

    public function information(Request $request)
    {
        return view('finances.pages.info');
    }

    public function myInformation(Request $request)
    {
        $kycStatusInfo = KYCGlobalService::getUserVerifyKYCInformationById($request->user()->id);
        return view('finances.pages.my-info', compact('kycStatusInfo'));
    }

    public function register()
    {
        return view('finances.pages.register');
    }

    public function myLoan(Request $request)
    {
        $loanService = new LoanService();
        $loans = Loan::with(['payers'])->where('user_id', $request->user()->id)->get();
        $totalMoneyLoan = 0.0;
        foreach ($loans as $loan) {
            $loan->isLoanDone = $loanService->isLoanDone($loan);
            $totalMoneyLoan += $loan->loan_money;
        }
        return view('finances.pages.my-loan', compact('loans', 'totalMoneyLoan'));
    }

    public function myPay()
    {
        return view('finances.pages.my-pay');
    }

    public function confirm(Request $request)
    {
        $user = User::with(['kycIdentity', 'kycBank'])->where('id', $request->user()->id)->first();
        if($user->kycIdentity == null || $user->kycBank == null) {
            return redirect(route('finances.my-info'));
        }

        $data = [
            'money' => (float) $request->input('money'),
            'month' => (int) $request->input('month')
        ];

        $rate = CoreService::getInterestRate();
        $interestRateMoney = ($data['money'] * $rate)/ 12;
        $payAnnual = $data['money'] + $interestRateMoney;

        return view('finances.pages.confirm-loan', compact(
            'data',
            'user',
            'rate',
            'payAnnual',
            'interestRateMoney'
        ));
    }

    public function applyLoan(Request $request)
    {
        $loanService = new LoanService();
        $loans = Loan::with(['payers'])->where('user_id', $request->user()->id)->get();

        $setting = $this->settingService->getSetting();

        $user = User::with(['kycIdentity', 'kycBank'])->where('id', $request->user()->id)->first();

        if($user->kycIdentity == null || $user->kycBank == null) {
            return response()->json([
                'status' => 10,
                'msg' => 'Chưa đủ điều kiện vay! Vui lòng bổ sung thông tin định danh'
            ]);
        }

        foreach ($loans as $loan) {
            if ($loan->is_activate == 1 || $loan->activate) {
                return response()->json([
                    'status' => 2,
                    'msg' => 'Bạn đã đăng ký khoản vay trước đó rồi!'
                ]);
            }

            $isLoanDone = $loanService->isLoanDone($loan);
            if ($loan->is_activate == 0 && !$isLoanDone) {
                return response()->json([
                    'status' => 9,
                    'msg' => 'Bạn có khoản vay chưa hoàn thành'
                ]);
            }

        }

        $rate = CoreService::getInterestRate();
        Loan::create([
            'user_id' => $request->user()->id,
            'loan_money' => $request->input('money'),
            'duration_month' => $request->input('month'),
            'interest_rate' => $rate,
            'message_withdraw' => $setting->default_message_withdraw,
            'is_activate' => false,
        ]);

        return response()->json([
            'status' => 1,
            'msg' => 'Hồ sơ đã được duyệt'
        ]);

    }

    public function myDetailLoan(Request $request, $loanId)
    {
        $loanService = new LoanService();
        $loan = Loan::with('payers')->where('user_id', $request->user()->id)->where('id', $loanId)->firstOrFail();
        $isLoanDone = $loanService->isLoanDone($loan);
        $user = User::with(['kycBank'])->where('id', $request->user()->id)->first();
        $moneyFirstMonthMustPay = LoanService::getMoneyNeedPayOfFirstMonth($loan);
        return view('finances.pages.loan-detail', compact(
            'loan',
            'user',
            'moneyFirstMonthMustPay',
            'isLoanDone',
        ));
    }

}
