<?php

namespace App\Services;

use App\Models\KYCBank;
use App\Models\KYCSignature;

class KYCBankService
{
    public static function isRegisterBank($userId): bool
    {
        return KYCBank::where('user_id', $userId)->first() !== null;
    }

    public static function registerBank($data): void
    {
        KYCBank::create($data);
    }
}
