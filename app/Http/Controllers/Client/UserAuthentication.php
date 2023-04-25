<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginRequest;
use App\Http\Requests\Client\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserAuthentication extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = [
            'phone' => $request->input('phone'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credentials, true)) {
            return response()->json(['status' => 1, 'msg' => 'Đăng nhập thành công!']);
        }

        return response()->json(['status' => 2, 'msg' => 'Số điện thoại hoặc mật khẩu không chính xác!']);
    }

    public function register(RegisterRequest $request)
    {
        $credentials = [
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password'))
        ];

        $user = User::create($credentials);

        Auth::loginUsingId($user->id);

        return response()->json(['status' => 1, 'msg' => 'Đăng ký thành công!']);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect(route('finances.profile'));
    }
}
