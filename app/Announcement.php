<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'AnouncementID',
        'method',
        'message',
        'userID',
        'post_by',
    ];
}
