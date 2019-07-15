<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class getHeaderController extends Controller
{
    public function header(){
        return $header = $this->getcleanheader(Cache::get('webToken'));
    }

    public function getcleanheader($token)
    {
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token
        ];
        return $header;
    }
}
