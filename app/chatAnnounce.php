<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chatAnnounce extends Model
{
    protected $fillable = [
        'chatId',
        'from',
        'to',
        'conversationMsg',
        'owner'
    ];
}
