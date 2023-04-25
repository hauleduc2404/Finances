<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateLoanRequest;
use App\Models\Loan;
use App\Services\SettingService;
use Carbon\Carbon;
use DataTables;
use App\Services\LoanService;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    private $settingService;
    private $loanService;

    public function __construct()
    {
        $this->loanService = new LoanService();
        $this->settingService = new SettingService();
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = LoanService::getLoans();
            return Datatables::collection($data)
                ->addIndexColumn()
                ->addColumn('full_name', function ($row) {
                    return $row->user->kycIdentity->full_name ?? '<Chưa cung cấp>';
                })
                ->addColumn('loan_money_format', function ($row) {
                    return vnd_format($row->loan_money);
                })
                ->addColumn('paid_month', function ($row) {
                    $payers = collect($row->payers);
                    if ($payers->count() <= 0) {
                        return 'Chưa trả bất kỳ tháng nào';
                    }
                    return $payers->where('pay_month', '>', 0)->count() . '/' . $row->duration_month . ' tháng';
                })
                ->addColumn('is_kyc_verified', function ($row) {
                    $isKYCVerified =
//                        isset($row->user->kycInfo->is_verified) &&
                        isset($row->user->kycIdentity->is_verified) &&
                        isset($row->user->kycBank->is_verified) &&
                        isset($row->user->kycSignature->is_verified);
                    return $isKYCVerified ? '<span class="badge badge-success">Đã duyệt hồ sơ</span>' : '<span class="badge badge-warning">Đang chờ duyệt hồ sơ</span>';
                })
                ->addColumn('action', function ($row) {
                    $loanId = $row['id'];
                    return '<a href="' . route('dashboard.loan.detail', ['loanId' => $loanId]) . '" class="btn btn-primary">
                        Chi tiết
                    </a>';
                })
                ->rawColumns(['action', 'is_kyc_verified'])
                ->make(true);
        }

        return view('admin.pages.loan.list');
    }

    public function detail(Request $request, $loanId)
    {
        $loan = LoanService::getLoanById($loanId);
        $rangeLoan = $this->settingService->getRangeLoan();
        $isLoanDone = $this->loanService->isLoanDone($loan);
        $isLoanProcessing = $this->loanService->isLoanProcessing($loan);
        return view('admin.pages.loan.detail', compact(
            'loan',
            'rangeLoan',
            'isLoanDone',
            'isLoanProcessing',
        ));
    }

    public function update(UpdateLoanRequest $request)
    {
        $loanId = (int)$request->input('loan_id');
        $loanMoney = (float)$request->input('loan_money');
        $interestRate = $request->input('interest_rate') / 100;
        $durationTime = (int)$request->input('duration_time');

        $loan = Loan::with('payers')->where('id', $loanId)->firstOrFail();

        if($this->loanService->isLoanDone($loan)) {
            $loan->update([
                'message_withdraw' => $request->input('message_withdraw')
            ]);

            return redirect()->back()->with(['success' => 'Thay đổi trạng thái thành công!']);
        }

        if ($request->has('only_submit') && $request->has('is_activate')) {
            $data = [
                'is_activate' => $request->input('is_activate'),
                'message_withdraw' => $request->input('message_withdraw'),
            ];

            if ($request->input('is_activate') == 1) {
                $data['time_verify'] = Carbon::now();
            } else {
                $data['time_verify'] = null;
            }

            $loan->update($data);

            return redirect()->back()->with(['success' => 'Thay đổi trạng thái thành công!']);
        }
        if (isset($loan->payers) && count($loan->payers) > 0) {
            return redirect()->back()->with(['fail' => 'Khoản vay này đã phát sinh giao dịch!']);
        }

        $loan->update([
            'loan_money' => $loanMoney,
            'interest_rate' => $interestRate,
            'duration_time' => $durationTime,
            'is_activate' => $request->input('is_activate'),
            'message_withdraw' => $request->input('message_withdraw'),
        ]);

        return redirect()->back()->with(['success' => 'Cập nhật thành công!']);
    }
}
