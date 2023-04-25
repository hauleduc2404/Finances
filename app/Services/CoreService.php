<?php

namespace App\Services;


use App\Models\Loan;
use App\Structs\PayerHistory;

class CoreService
{
    public static function getInterestRate(): float
    {
        $settingS = new SettingService();
        $setting = $settingS->getSetting();
        return $setting->interest_rate ?? 0.108; // per year
    }

    public function calNextInterestMoney(Loan $loan)
    {
        $historiesPaid = (new PayerService())->getHistoryPaid($loan);
        $interestRate = self::getInterestRate();
        $historiesPaid = collect($historiesPaid);
        if ($historiesPaid->count() <= 0) {
            return ceil(($loan->loan_money * $interestRate) / 12);
        }

        /** @var PayerHistory $lastHistory */
        $lastHistory = $historiesPaid->last();
//        $nextPeriod = (new PayerService())->getNextPeriod($historiesPaid);
//        $nextPeriodLabel = (new PayerService())->getNextPeriodLabel($historiesPaid);

        // Prepare for calculating
        $tienGocConLai = $lastHistory->loanMoneyRemain;


//        $tienGocConLai = $lastHistory->loanMoneyRemain;
//        $interestRate = self::getInterestRate();
        // Tiền lãi suất = Tiền gốc còn lại * lãi suất trên năm / 12 tháng
        return $interestMoneyOfNextMonth = ceil(($tienGocConLai * $interestRate) / 12);
    }

    public function calNextPeriodMoney(Loan $loan)
    {
        $interestMoneyOfNextMonth = self::calNextInterestMoney($loan);
        return ($loan->loan_money / $loan->duration_month) + $interestMoneyOfNextMonth;
    }

    public function calMoneyPaidWithoutInterest(Loan $loan)
    {
        return $loan->loan_money / $loan->duration_month;
    }

}
