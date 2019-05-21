<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // protected $fillable = [
    //     'userID',
    //     'userName',
    //     'balance',
    //     'totalOnlineHour',
    //     'userStatus',
    //     'registerTime',
    //     'last_activity'
    // ];
    protected $table = 'user_whitelb';
}
