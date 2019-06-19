<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shareholder extends Model
{
    protected $fillable = [
        'share_id',
        'name',
        'accessPermission',
    ];
}
