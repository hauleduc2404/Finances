<?php

namespace App\Http\Controllers\Admin\KYC;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KYC\KYCVerifyRequest;
use App\Services\KYCVerifyService;
use Illuminate\Http\Request;

class KYCVerifyController extends Controller
{
    public function all(KYCVerifyRequest $request)
    {
        $userId = $request->input('userId');
        KYCVerifyService::verifyAll($userId);
        return response()->json([
            'status' => 1,
            'msg' => 'Duyệt hồ sơ thành công'
        ]);
    }

    public function signature(KYCVerifyRequest $request)
    {
        $userId = $request->input('userId');
        return KYCVerifyService::verifySignature($userId);
    }

    public function bank(KYCVerifyRequest $request)
    {
        $userId = $request->input('userId');
        return KYCVerifyService::verifyBank($userId);
    }

    public function info(KYCVerifyRequest $request)
    {
        $userId = $request->input('userId');
        return KYCVerifyService::verifyInfo($userId);
    }

    public function identity(KYCVerifyRequest $request)
    {
        $userId = $request->input('userId');
        $verify = KYCVerifyService::verifyIdentity($userId);
        return $verify;
    }
}
