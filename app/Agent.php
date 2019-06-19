<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'agentId',
        'typeId',
        'joinTime',
        'numberPlayer',
        'subAgent',
        'balance',
        'percentage',
        'totalIncome',
        'bankAccount',
        'name',
        'province',
        'city',
        'branch'
    ];
}
