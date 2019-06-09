<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fiiable = [
        'userId',
        'requestDetail',
        'amount',
        'method',
        'detail',
        'requestTime',
        'ip',
    ];
}
