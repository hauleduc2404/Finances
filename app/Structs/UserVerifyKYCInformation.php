<?php
namespace App\Structs;

class UserVerifyKYCInformation {
    public bool $isVerifiedSignature;
    public bool $isVerifiedInfo;
    public bool $isVerifiedIdentity;
    public bool $isVerifiedBank;
    public bool $isSigned;
    public bool $isBankRegistered;
    public bool $isIdentityRegistered;
    public bool $isInfoRegistered;

}
