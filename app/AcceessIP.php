<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcceessIP extends Model
{
    protected $fillable = [
        'id',
        'ip',
        'created_at',
        'updated_at',
    ];
}
