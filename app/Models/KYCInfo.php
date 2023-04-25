<?php

namespace App\Models;

use App\Traits\KYCVerifyStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYCInfo extends Model
{
    use HasFactory, KYCVerifyStatus;

    protected $table = 'kyc_infos';

    protected $fillable = ['user_id', 'trinh_do_hoc_van', 'thu_nhap_ca_nhan', 'muc_dich_vay', 'co_nha_cua_khong', 'co_xe_co_khong', 'tien_luong_hang_thang', 'dia_chi_chi_tiet', 'gia_dinh_ho_ten', 'gia_dinh_sdt', 'gia_dinh_moi_quan_he', 'gia_dinh_2_ho_ten', 'gia_dinh_2_sdt', 'gia_dinh_2_moi_quan_he', 'is_verified', 'verify_time',];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
