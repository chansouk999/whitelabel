<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userdetail extends Model
{
    protected $fillable =[
        'id',	
        'user_id',	
        'currency',	
        'lang',	
        'TotalRolling',	
        'AvailableRolling',
    ];
}
