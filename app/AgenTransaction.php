<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgenTransaction extends Model
{
    protected $fillable = [
        'Time',
        'agentId',
        'amount',
        'currency',
        'methodId',
        'assitid',
        'reference'
    ];
}
