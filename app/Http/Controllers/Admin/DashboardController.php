<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Payer;
use App\Models\User;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $payers = Payer::all()->count();
        $users = User::all()->count();
        $loans = Loan::all()->count();
        $settingService = new SettingService();
        $setting = $settingService->getSetting();
        return view('admin.pages.dashboard.index', compact('payers', 'users', 'loans', 'setting'));
    }

    public function loginPage()
    {
        return view('admin.layouts.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::guard('admin')->attempt($credentials, true)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with(['login_failed' => 'Tài khoản hoặc mật khẩu không đúng!']);
    }
}
