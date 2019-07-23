<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply_anouces extends Model
{
    protected $fillable = [
        'anou_id',
        'chater_id',
        'msg',
        'owner',
    ];
}
