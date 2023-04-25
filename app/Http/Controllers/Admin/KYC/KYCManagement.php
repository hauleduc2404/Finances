<?php

namespace App\Http\Controllers\Admin\KYC;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\KYCGlobalService;
use Illuminate\Http\Request;
use DataTables;

class KYCManagement extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = User::with(['kycBank', 'kycSignature', 'kycInfo', 'kycIdentity']);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $userId = $row['id'];
                    return '<button type="button" class="btn btn-default extra-modal-btn" data-toggle="modal" data-userid="'.$userId.'" data-target="#modal-xl">
                        Chi tiết
                    </button>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.kyc.list');
    }

    public function details(Request $request)
    {
        return KYCGlobalService::KYCData($request->input('userId'));
    }

}
