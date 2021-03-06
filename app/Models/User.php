<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'linkedin',
        'fund_address',
        'fund_name',
        'email',
        'receive_news',
        'type',
        'position',
        'password',
        'active_order'
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

//    public function setPasswordAttribute($password)
//    {
//        $this->attributes['password'] = Hash::make($password);
//    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function userSettingNotifications()
    {
        return $this->belongsTo(UserSettingNotification::class,'id','user_id');
    }

    public function user_type()
    {
        return $this->belongsToMany(UserType::class);
    }
    //     public function companies()
    // {
    //     return $this->belongsToMany(Company::class, 'id', 'company_id');
    // }
}
