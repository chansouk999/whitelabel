<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admincard_rule extends Model
{
    protected $fillable = [
        'rulename',
        'rule_level',
        'level',
        'localted',
        'inAnd',
        'Notin',
        'amoute',
        'from',
        'to',
    ];
}
