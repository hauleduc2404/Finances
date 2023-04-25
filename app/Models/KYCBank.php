<?php

namespace App\Models;

use App\Traits\KYCVerifyStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYCBank extends Model
{
    use HasFactory, KYCVerifyStatus;

    protected $table = 'kyc_banks';

    protected $fillable = ['user_id', 'card_identity_owner', 'card_placeholder_name', 'card_number', 'bank_vendor', 'is_verified', 'verify_time'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



}
