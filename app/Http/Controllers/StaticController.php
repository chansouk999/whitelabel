<?php

namespace App\Http\Controllers;
use \Torann\GeoIP\Facades\GeoIP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\admincard_rule;
use App\Admincard;

class StaticController extends Controller
{

    public static function returncode($code, $data, $msg)
    {
        //100 already exist
        //200 success
        //500 internal erorr
        //300 query error
        //99 not enough
        //0 empty
        //202  request
        //203 wait for $second
        //419 no access
        // 303 cacle
        return ['code' => $code, 'data' => $data, 'msg' => $msg];
    }
    public static function fakeArrayData()
    { }
    public static function cardControl()
    {
        $data =[
            'rule'=>admincard_rule::all(),
            'card'=>Admincard::all(),
            'join'=>DB::table('admincards')->join('admincard_rules','admincard_rules.id','=','admincards.rule_id')->get()
        ];

        return $data;
        $ip =  \Request::getClientIp();
        $check = geoip()->getLocation($ip);
    }
}
