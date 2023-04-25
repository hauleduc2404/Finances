<?php

namespace App\Services;

use App\Models\Settings;

class SettingService
{
    public function __construct()
    {
        if (!$this->getSetting()) {
            $this->initializeSetting();
        }
    }

    public function initializeSetting()
    {
        try {
            return Settings::create([
                'support_link' => 'https://zalo.me/',
                'withdraw_password' => '123456',
                'default_message_withdraw' => 'Rút tiền thành công! Quý khách vui lòng trong giây lát!'
            ]);
        }
        catch (\Exception $e) {

        }
    }

    public function getSetting()
    {
        try {
            return Settings::where('id', '>=', '1')->first();
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getRangeLoan()
    {
        $setting = $this->getSetting();
        return explode(",", $setting->loan_month);
    }

    public function cleanMoneyValue($dirtyValue)
    {
        return str_replace(['.',','], '', $dirtyValue);
    }

    public function updateSetting($payload)
    {
        $setting = $this->getSetting();
        return $setting->update($payload);
    }
}
