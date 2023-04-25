<?php

namespace App\Services;

use App\Models\KYCIdentity;
use App\Models\Loan;
use App\Models\Payer;
use App\Structs\PayerHistory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PayerService
{
    public static function getPayerGroup()
    {
        $loans = Loan::with(['user'])
        ->whereHas('user.kycIdentity', function(Builder $query) {
            $query->where('is_verified', 1);
        })->whereHas('user.kycBank', function(Builder $query) {
            $query->where('is_verified', 1);
        })
//            ->whereHas('user.kycInfo', function(Builder $query) {
//            $query->where('is_verified', 1);
//        })
            ->whereHas('user.kycSignature', function(Builder $query) {
            $query->where('is_verified', 1);
        })->get();
        return $loans;
    }

    public static function getPhone(?Loan $loan)
    {
        if (!isset($loan->user)) {
            return 'Chưa cung cấp';
        }

        if (!isset($loan->user->phone)) {
            return 'Chưa cung cấp';
        }
        return $loan->user->phone ?? 'Chưa cung cấp';
    }

    public static function getFullName(?Loan $loan)
    {
        if (!isset($loan->user)) {
            return 'Chưa cung cấp';
        }

        if (!isset($loan->user->kycIdentity)) {
            return 'Chưa cung cấp';
        }
        return $loan->user->kycIdentity->full_name ?? 'Chưa cung cấp';
    }

    public static function getPayCount(?Loan $loan)
    {
        if (!$loan || $loan->payers == null) {
            return 0;
        }

        return $loan->payers->count();
    }

    public static function getPayers(?Loan $loan)
    {
        if (!$loan || !isset($loan->payers)) {
            return [];
        }

        return $loan->payers->toArray();
    }

    public static function getTotalPaidMonthCount(?Loan $loan)
    {
        if (!$loan || !isset($loan->payers)) {
            return 0;
        }

        /** @var Collection $payers */
        $payers = $loan->payers;
        $totalPayMonth = 0;
        foreach ($payers as $payer) {
            /** @var Payer $payer */
            $totalPayMonth += $payer->pay_month;
        }
        return $totalPayMonth;
    }

    public static function getTotalPaidLabel(?Loan $loan)
    {
        if (!$loan || !isset($loan->payers)) {
            return 'Chưa thanh toán kỳ hạn nào';
        }

        /** @var Collection $payers */
        $payers = $loan->payers;
        $totalPaid = 0.0;
        foreach ($payers as $payer) {
            /** @var Payer $payer */
            $totalPaid += ($payer->money_paid + $payer->interest);
        }

        return number_format($totalPaid, 0, ',', '.') . ' đ';
    }

    /**
     * @param $loanId
     * @return PayerHistory[]|array
     */
    public function getHistoryPaid(Loan $loan): array
    {
        /** @var Payer[]|null $paidHistory */
        $payers = $loan->payers;
        if (!isset($payers) || count($payers) <= 0) {
            return [];
        }
        /** @var PayerHistory[] $paidHistory */
        $paidHistory = [];

        // Append first time commit
        $firstPaid = new PayerHistory();
        $firstPaid->index = 0;
        $firstPaid->period = 0;
        $firstPaid->periodLabel = $loan->time_verify != null ? Carbon::createFromTimeString($loan->time_verify)->format('d/m/Y') : '';
        $firstPaid->loanMoneyRemain = $loan->loan_money;
        $firstPaid->loanMoneyRemainLabel = vnd_format($loan->loan_money);
        $firstPaid->loanMoneyPaid = 0.0;
        $firstPaid->loanMoneyPaidLabel = '';
        $firstPaid->interestMoneyPaid = 0.0;
        $firstPaid->interestMoneyPaidLabel = '';
        $firstPaid->loanMoneyAndInterestMoneyPaid = 0.0;
        $firstPaid->loanMoneyAndInterestMoneyPaidLabel = '';
        $firstPaid->transactionId = '';
        $firstPaid->commitTime = '';
        $paidHistory[] = $firstPaid;

        // Loop payers
        foreach ($payers as $key => $payer) {
            /** @var Payer $payer */
            $index = ++$key;
            // First time
            $paid = new PayerHistory();
            $paid->index = $index;

            $paid->transactionId = $payer->transaction_id;
            $paid->commitTime = vn_date_format($payer->updated_at, true);
            $paid->loanMoneyPaid = $payer->money_paid;
            $paid->loanMoneyPaidLabel = vnd_format($payer->money_paid);
            $paid->interestMoneyPaid = $payer->interest;
            $paid->interestMoneyPaidLabel = vnd_format($payer->interest);
            $paid->loanMoneyAndInterestMoneyPaid = $payer->money_paid + $payer->interest;

            if ($index === 1) {
                $paid->loanMoneyRemain = $loan->loan_money - $payer->money_paid;
                $paid->loanMoneyRemainLabel = vnd_format($paid->loanMoneyRemain);
                $paid->loanMoneyAndInterestMoneyPaidLabel = vnd_format($paid->loanMoneyAndInterestMoneyPaid);
                // Period handle
                $originalPeriod = Carbon::createFromTimeString($loan->time_verify);
                $currentPeriod = $originalPeriod->addMonths($payer->pay_month);
                $paid->period = $currentPeriod->timestamp;
                $paid->periodLabel = $currentPeriod->format('d/m/Y');
            } else {
                // Next time
                /** @var PayerHistory $previousPaidHistory */
                $previousPaidHistory = collect($paidHistory)->last();
                $previousLoanMoneyRemain = $previousPaidHistory->loanMoneyRemain;
                $paid->loanMoneyRemain = $previousLoanMoneyRemain - $payer->money_paid;
                $paid->loanMoneyRemainLabel = vnd_format($paid->loanMoneyRemain);
                $paid->loanMoneyAndInterestMoneyPaidLabel = vnd_format($paid->loanMoneyAndInterestMoneyPaid);
                // Period handle
                $previousPeriodTimeObject = Carbon::createFromTimestamp($previousPaidHistory->period)->addMonths($payer->pay_month ?? 0);
                $paid->period = $previousPeriodTimeObject->timestamp;
                $paid->periodLabel = $previousPeriodTimeObject->format('d/m/Y');
            }

            $paidHistory[] = $paid;
        }
//        dd($paidHistory);
        return $paidHistory;
    }

    public function getNextPeriod($historiesPaid)
    {
        if(count($historiesPaid) <= 0) {
            return 0;
        }
        /** @var PayerHistory | null $lastHistoriesPaid */
        $lastHistoriesPaid = collect($historiesPaid)->last();
        return $lastHistoriesPaid->period;
    }

    public function getNextPeriodLabel($historiesPaid)
    {
        $nextPeriod = $this->getNextPeriod($historiesPaid);
        if ($nextPeriod > 0) {
            return Carbon::createFromTimestamp($nextPeriod)->addMonths(1)->format('d/m/Y');
        }

        return '';
    }

    public function createBill($loanId)
    {
        // temp
        $loan = Loan::findOrFail($loanId);
        $coreS = new CoreService();
        $tienGocPhaiTra = $coreS->calMoneyPaidWithoutInterest($loan);
        $interestMoney = $coreS->calNextInterestMoney($loan);

        /** @var PayerHistory $lastHistoriesPaid */
        $lastHistoriesPaid = collect($this->getHistoryPaid($loan))->last();
        if (isset($lastHistoriesPaid->loanMoneyRemain) && $lastHistoriesPaid->loanMoneyRemain <= 1000) {
            $loan->is_activate = false;
            $loan->update();
            return 'Bạn đã trả đủ khoản vay rồi';
        }

        Payer::create([
            'loan_id' => $loanId,
            'user_id' => $loan->user_id,
            'money_paid' => $tienGocPhaiTra,
            'interest' => $interestMoney,
            'pay_month' => 1,
            'transaction_id' => null,
            'notes' => null
        ]);
    }
}
