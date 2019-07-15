<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdraw_methods extends Model
{
    protected $fillable = [
        'id',
        'desc',
        'userName',
        'bankAccount',
        'cardNumber',
        'methodId',
        'registerProvince',
        'registerCity',
        'branch',
        'user_id',
    ];
}
