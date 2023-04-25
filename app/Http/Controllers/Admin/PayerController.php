<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\User;
use App\Services\CoreService;
use App\Services\PayerService;
use Illuminate\Http\Request;
use DataTables;

class PayerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PayerService::getPayerGroup();
            return DataTables::collection($data)
                ->addIndexColumn()
                ->addColumn('phone', function ($row) {
                    return PayerService::getPhone($row);
                })
                ->addColumn('full_name', function ($row) {
                    return PayerService::getFullName($row);
                })
                ->addColumn('pay_count', function ($row) {
                    return PayerService::getPayCount($row). ' giao dịch';
                })
                ->addColumn('total_paid_month_count', function ($row) {
                    return PayerService::getTotalPaidMonthCount($row).' tháng';
                })
                ->addColumn('pay_month_remain', function ($row) {
                    $totalPayMonth = PayerService::getTotalPaidMonthCount($row);
                    return $row->duration_month - $totalPayMonth. ' tháng';
                })
                ->addColumn('total_paid_label', function ($row) {
                    return PayerService::getTotalPaidLabel($row);
                })
                ->addColumn('action', function ($row) {
                    $loanId = $row['id'];
                    $url = route('dashboard.payer.detail', ['loanId' => $loanId]);
                    return '<a type="button" href="'.$url.'" class="btn btn-primary">
                        Chi tiết
                    </a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.payer.list');
    }

    public function detail(Request $request, $id)
    {
        $payerService = new PayerService();
        $loan = Loan::findOrFail($id);
        $user = User::with('kycIdentity')->where('id', $loan->user_id)->first();
        $historiesPaid = $payerService->getHistoryPaid($loan);
        $nextPeriodLabel = $payerService->getNextPeriodLabel($historiesPaid);
        $coreService = new CoreService();
        $coreService->calNextPeriodMoney($loan);
        return view('admin.pages.payer.detail', compact(
            'loan',
            'user',
            'nextPeriodLabel',
            'historiesPaid',
        ));
    }

    public function createPayerBill(Request $request)
    {
        Loan::findOrFail($request->input('loanId'));
        $payerService = new PayerService();
        $payerService->createBill($request->loanId);
        return redirect()->back();
    }

    public function getNextValueMoney(Request $request)
    {

    }
}
