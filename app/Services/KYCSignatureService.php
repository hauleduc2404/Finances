<?php

namespace App\Services;

use App\Models\KYCSignature;

class KYCSignatureService
{
    public static function signature($userId, $signature)
    {
        $kycSignature = KYCSignature::where('user_id', $userId)->first();
        if (!$kycSignature) {
            KYCSignature::create([
                'user_id' => $userId,
                'signature' => $signature,
                'is_verified' => false,
            ]);
        }
    }

    public static function isSigned($userId)
    {
        return KYCSignature::where('user_id', $userId)->first() !== null;
    }
}
