<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $settingService;

    public function __construct()
    {
        $this->settingService = new SettingService();
    }

    public function index(Request $request)
    {
        $setting = $this->settingService->getSetting();
        return view('admin.pages.setting.index', compact(
            'setting'
        ));
    }

    public function update(Request $request)
    {
        $payload = array_filter($request->only(
            'loan_month',
            'support_link',
            'interest_rate',
            'min_loan',
            'max_loan',
            'limit_per_switch_loan',
            'withdraw_password',
            'default_message_withdraw',
        ), function($value) { return !is_null($value) && $value !== ''; });
        $payload['interest_rate'] = ((float) $payload['interest_rate'])/100;
        $payload['min_loan'] = ((float) $this->settingService->cleanMoneyValue($payload['min_loan']));
        $payload['max_loan'] = ((float) $this->settingService->cleanMoneyValue($payload['max_loan']));
        $payload['limit_per_switch_loan'] = ((float) $this->settingService->cleanMoneyValue($payload['limit_per_switch_loan']));

        if (!is_numeric($payload['interest_rate']) ||
            !is_numeric($payload['min_loan']) ||
            !is_numeric($payload['max_loan']) ||
            !is_numeric($payload['limit_per_switch_loan'])
        ) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        $update = $this->settingService->updateSetting($payload);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }
}
