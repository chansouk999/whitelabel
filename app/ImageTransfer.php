<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageTransfer extends Model
{
    protected $fillable = [
        'agent_id',
        'imgid',
        'imgname',
        'imgdesc',
        'refer'
    ];
}
