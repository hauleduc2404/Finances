<?php

namespace App\Structs;

class PayerHistory
{
    public int $index;
    public int $period;
    public ?string $periodLabel;
    public float $loanMoneyRemain;
    public ?string $loanMoneyRemainLabel;
    public float $loanMoneyPaid;
    public ?string $loanMoneyPaidLabel;
    public float $interestMoneyPaid;
    public ?string $interestMoneyPaidLabel;
    public float $loanMoneyAndInterestMoneyPaid;
    public ?string $loanMoneyAndInterestMoneyPaidLabel;
    public ?string $transactionId;
    public ?string $commitTime;
}
