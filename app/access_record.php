<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class access_record extends Model
{
    protected $fillable = [
        'time',
        'password',
        'login_status',
        'login_IP',
        'online_period',
        'user_id',
    ];
}
