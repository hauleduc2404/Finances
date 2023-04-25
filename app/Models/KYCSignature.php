<?php

namespace App\Models;

use App\Traits\KYCVerifyStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYCSignature extends Model
{
    use HasFactory, KYCVerifyStatus;

    protected $table = 'kyc_signatures';

    protected $fillable = ['user_id', 'signature', 'is_verified', 'verify_time'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
