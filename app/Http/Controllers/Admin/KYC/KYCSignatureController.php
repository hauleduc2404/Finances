<?php

namespace App\Http\Controllers\Admin\KYC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KYCSignatureController extends Controller
{
    public function detail(Request $request)
    {
        dd($request->input('userId'));
    }
}
