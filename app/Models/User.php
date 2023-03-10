<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name',
        'email',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function info(){
        return $this->hasOne(UserInfo::class);
    }
    public function pengumumans(){
        return $this->hasMany(Pengumuman::class);
    }
    public function beasiswas(){
        return $this->hasMany(Beasiswa::class);
    }
    public function dispensasis(){
        return $this->hasMany(Dispensasi::class);
    }
    public function KKMs(){
        return $this->hasMany(KKM::class);
    }
    public function PKMs(){
        return $this->hasMany(PKM::class);
    }
}
