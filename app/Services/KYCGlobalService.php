<?php

namespace App\Services;

use App\Models\KYCSignature;
use App\Models\User;
use App\Structs\UserVerifyKYCInformation;

class KYCGlobalService
{

    /**
     * @param $userId
     * @return UserVerifyKYCInformation
     */
    public static function getUserVerifyKYCInformationById($userId): UserVerifyKYCInformation
    {
        $user = User::with(['kycBank', 'kycSignature', 'kycInfo', 'kycIdentity'])->find($userId);
        $kyc = new UserVerifyKYCInformation;
        $kyc->isVerifiedSignature = isset($user->kycSignature) ? $user->kycSignature->isVerified() : false;
        $kyc->isVerifiedInfo = isset($user->kycInfo) ? $user->kycInfo->isVerified() : false;
        $kyc->isVerifiedIdentity = isset($user->kycIdentity) ? $user->kycIdentity->isVerified() : false;
        $kyc->isVerifiedBank = isset($user->kycBank) ? $user->kycBank->isVerified() : false;
        $kyc->isSigned = $user->kycSignature !== null;
        $kyc->isBankRegistered = $user->kycBank !== null;
        $kyc->isIdentityRegistered = $user->kycIdentity !== null;
        $kyc->isInfoRegistered = $user->kycInfo !== null;
        return $kyc;
    }

    public static function KYCData($userId)
    {
        $user = User::with(['kycBank', 'kycSignature', 'kycInfo', 'kycIdentity'])->find($userId);

        if ($user) {
            $userKyc = $user->getRelations();
            $userKyc['id'] = $user->id;
            return $userKyc;
        }

        return null;
    }
}
