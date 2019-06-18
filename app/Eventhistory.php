<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventhistory extends Model
{
    protected $fillable = [
        'Time',
        'user_id',
        'event',
        'reference',
        'balance_before_event',
        'amount',
        'balance_after_event',
        'deatil',
        'served_by',
    ];
}
