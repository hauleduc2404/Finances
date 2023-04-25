<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\KYCBankRequest;
use App\Http\Requests\Client\KYCSignatureRequest;
use App\Models\KYCIdentity;
use App\Models\KYCInfo;
use App\Services\KYCBankService;
use App\Services\KYCGlobalService;
use App\Services\KYCSignatureService;
use Illuminate\Http\Request;

class KYCController extends Controller
{
    public function kycSignature(Request $request)
    {
        return view('finances.pages.kyc.kyc-signature');
    }

    public function signature(KYCSignatureRequest $request)
    {
        $userId = $request->user()->id;
        if (KYCSignatureService::isSigned($userId)) {
            return response()->json(['msg' => 'Bạn đã ký trước đó!', 'status' => 2]);
        }

        KYCSignatureService::signature($userId, $request->input('signature'));

        return response()->json(['msg' => 'Ký thành công!', 'status' => 1]);
    }

    public function kycInfo(Request $request)
    {
        $info = KYCInfo::where('user_id', $request->user()->id)->first();
//        $annualy;
        return view('finances.pages.kyc.kyc-info', compact('info'));
    }

    public function kycBank()
    {
        return view('finances.pages.kyc.kyc-bank');
    }

    public function registerKycBank(KYCBankRequest $request)
    {
        $userId = $request->user()->id;
        if (KYCBankService::isRegisterBank($userId)) {
            return response()->json(['msg' => 'Bạn đã đăng ký ngân hàng rồi!', 'status' => 2]);
        }

        $data = [
            'user_id' => $request->user()->id,
            'card_placeholder_name' => $request->input('card_placeholder_name'),
            'card_identity_owner' => $request->input('card_identity_owner'),
            'bank_vendor' => $request->input('bank_vendor'),
            'card_number' => $request->input('card_number'),
        ];

        KYCBankService::registerBank($data);
        return response()->json(['msg' => 'Đăng ký ngân hàng thành công!', 'status' => 1]);
    }

    public function kycIdentity(Request $request)
    {
        $identity = KYCIdentity::where('user_id', $request->user()->id)->first();
        return view('finances.pages.kyc.kyc-identity', compact('identity'));
    }

    public function submitKYCIdentity(Request $request)
    {
        KYCIdentity::firstOrCreate([
            'user_id' => $request->user()->id,
        ], [
            'full_name' => $request->input('full_name'),
            'identify_number' => $request->input('identify_number'),
            'identify_back_side_path' => $request->input('identify_back_side_path'),
            'identify_front_side_path' => $request->input('identify_front_side_path'),
            'identify_portrait_path' => $request->input('identify_portrait_path'),
        ]);

        return response()->json(['msg' => 'Thành công!', 'status' => 1]);
    }

    public function submitKYCInfo(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        if (isset($data['is_verify'])) {
            unset($data['is_verify']);
        }

        KYCInfo::updateOrCreate([
            'user_id' => $request->user()->id,
        ], $data);

        return response()->json(['msg' => 'Thành công!', 'status' => 1]);
    }
}
