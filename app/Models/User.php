<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function kycBank()
    {
        return $this->hasOne(KYCBank::class, 'user_id' , 'id');
    }

    public function kycSignature()
    {
        return $this->hasOne(KYCSignature::class, 'user_id', 'id');
    }

    public function kycInfo()
    {
        return $this->hasOne(KYCInfo::class, 'user_id', 'id');
    }

    public function kycIdentity()
    {
        return $this->hasOne(KYCIdentity::class, 'user_id', 'id');
    }

    public function loan()
    {
        return $this->hasOne(Loan::class, 'user_id', 'id');
    }

}
