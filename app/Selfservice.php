<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selfservice extends Model
{
    protected $fillable = [
        'id',
        'title',
        'level',
        'Amount',
        'percentage'
    ];
}
