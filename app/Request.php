<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'userId',
        'requestDetail',
        'amount',
        'method',
        'detail',
        'requestTime',
        'ip',
        'status'
    ];
}
