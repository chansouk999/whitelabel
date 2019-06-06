<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class access_token extends Model
{
    protected $fillable = [
        'user_id',
        'access_token',    
    ];
}
