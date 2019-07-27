<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdraw_methods extends Model
{
    protected $fillable = [
        'ids',
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
