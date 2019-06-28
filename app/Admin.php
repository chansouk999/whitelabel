<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'administrator';

    protected $fillable = [
        'name', 'email', 'password','active','TotalOnline','role_id','id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}