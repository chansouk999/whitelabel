<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'provider_name',
        'pro_id',
        'userBalance',
        'id',
        'user_id',
        'totalOnlineHour',
        'userStatus',
        'registerTime',
        'last_activity',
        'accessTime',
        'accessIP',
        'pwdhashed',
        'is_admin',
        'isBlock'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }
}
