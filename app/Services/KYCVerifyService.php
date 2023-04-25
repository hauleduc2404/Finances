<?php

namespace App\Services;

use App\Models\KYCBank;
use App\Models\KYCIdentity;
use App\Models\KYCInfo;
use App\Models\KYCSignature;
use Carbon\Carbon;

class KYCVerifyService
{
    private function verify($model): bool
    {
        if (!isset($model)) {
            return false;
        }
        return $model->update([
            'is_verified' => true,
            'verify_time' => Carbon::now()
        ]);
    }

    public static function verifyAll($userId): bool
    {
        $kycModel1 = KYCSignature::where('user_id', $userId)->first();
        $kycModel2 = KYCBank::where('user_id', $userId)->first();
        $kycModel3 = KYCInfo::where('user_id', $userId)->first();
        $kycModel4 = KYCIdentity::where('user_id', $userId)->first();
        (new KYCVerifyService)->verify($kycModel1);
        (new KYCVerifyService)->verify($kycModel2);
        (new KYCVerifyService)->verify($kycModel3);
        (new KYCVerifyService)->verify($kycModel4);
        return true;
    }

    public static function verifySignature($userId): bool
    {
        $kycModel = KYCSignature::where('user_id', $userId)->first();
        return (new KYCVerifyService)->verify($kycModel);
    }

    public static function verifyBank($userId): bool
    {
        $kycModel = KYCBank::where('user_id', $userId)->first();
        return (new KYCVerifyService)->verify($kycModel);
    }

    public static function verifyInfo($userId): bool
    {
        $kycModel = KYCInfo::where('user_id', $userId)->first();
        if (!$kycModel) {
            return false;
        }

        return (new KYCVerifyService)->verify($kycModel);
    }

    public static function verifyIdentity($userId): bool
    {
        $kycModel = KYCIdentity::where('user_id', $userId)->first();
        if (!$kycModel) {
            return false;
        }

        return (new KYCVerifyService)->verify($kycModel);
    }
}
