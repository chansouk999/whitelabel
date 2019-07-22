<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Admincard extends Model
{
    protected $fillable = [
        'addedby',
        'rule_id',
        'bankname',
        'bankAccount',
        'branch',
        'owner',
        'address',
        'level',
    ];
}
