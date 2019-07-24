<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat_history extends Model
{
    protected $fillable = [
        'chatId',
        'from',
        'to',
        'conversationMsg',
    ];
}
