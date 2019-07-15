<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rolling_history extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'amount',
        'last_totalbet',
        'status',
    ];
}
