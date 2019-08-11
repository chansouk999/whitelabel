<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
class getHeaderController extends Controller
{
    public function header(){
        return $header = $this->getcleanheader(Cookie::get('accessToken'));
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
