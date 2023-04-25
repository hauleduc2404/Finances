<?php

namespace App\Traits;


trait KYCVerifyStatus
{

    public function isVerified(): bool
    {
        if (!isset($this->is_verified)) {
            return false;
        }

        return !($this->is_verified === 0);
    }
}
