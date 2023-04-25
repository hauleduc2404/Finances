<?php

namespace App\Services;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LoanService
{
    public static function getLoans()
    {
        $loans = Loan::with(['user'])
            ->whereHas('user.kycIdentity', function(Builder $query) {
                $query->where('is_verified', 1);
            })->whereHas('user.kycBank', function(Builder $query) {
                $query->where('is_verified', 1);
            })
//            ->whereHas('user.kycSignature', function(Builder $query) {
//                $query->where('is_verified', 1);
//            })
            ->get();
        $loans->sortByDesc('is_activate');
        return $loans;
    }

    public static function getLoanById($loanId)
    {
        return Loan::with(['user', 'payers'])
            ->whereHas('user.kycIdentity', function(Builder $query) {
                $query->where('is_verified', 1);
            })->whereHas('user.kycBank', function(Builder $query) {
                $query->where('is_verified', 1);
            })
//            ->whereHas('user.kycSignature', function(Builder $query) {
//                $query->where('is_verified', 1);
//            })->where('id', $loanId)
            ->where('id', $loanId)->firstOrFail();
    }

    public function isLoanProcessing(Loan $loan)
    {
        if (!isset($loan->payers)) {
            return false;
        }

        $payers = collect($loan->payers);
        $isLoanProcessing = $payers->where('pay_month','>=', 1)->count();

        return $isLoanProcessing >= 1;
    }

    public function isLoanDone(Loan $loan)
    {
        if (!isset($loan->payers)) {
            return false;
        }
        $totalPaid = 0;
        foreach ($loan->payers as $key => $payer) {
            $totalPaid += $payer->money_paid;
        }

        return ((int)($totalPaid - $loan->loan_money) >= 0);
    }

    public static function getInterestMoney(Loan $loan)
    {
        $loanMoney = (float) $loan->loan_money;
        $interestRate = (float) $loan->interest_rate;
        return (($loanMoney * $interestRate) / 12);
    }

    public static function getMoneyNeedPayOfFirstMonth(Loan $loan)
    {
        $interestMoney = self::getInterestMoney($loan);
        $tienGoc = ceil(($loan->loan_money / $loan->duration_month));
        return $tienGoc + $interestMoney;
    }

}
