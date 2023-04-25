<?php

namespace App\Models;

use App\Traits\KYCVerifyStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYCIdentity extends Model
{
    use HasFactory, KYCVerifyStatus;

    protected $table = 'kyc_identities';

    protected $fillable = ['user_id', 'full_name', 'identify_number', 'identify_back_side_path', 'identify_front_side_path', 'identify_portrait_path', 'is_verified', 'verify_time'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
