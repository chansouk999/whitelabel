<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activityLog extends Model
{
    protected $fillable = [
        'method','detail'
    ];
}
