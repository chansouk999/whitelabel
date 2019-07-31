<?php

namespace App\Http\Controllers;

use \Torann\GeoIP\Facades\GeoIP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\admincard_rule;
use App\Admincard;
use Auth;
use Illuminate\Support\Facades\Cache;
use App\User;
use App\access_record;
use App\Http\Controllers\MasterController as getfucntion;

class StaticController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function header()
    {
        $header = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . Cache::get('webToken')
        ];
        return $header;
    }

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
    public function res($index)
    { }
    public static function cardControl($amount = 0)
    {
        // return $amount;
        function res($index)
        {
            $id = Auth::user()->id;
            $user_id = Auth::user()->user_id;
            $res = [
                '_id' => Auth::user()->id,
                'user_id' => Auth::user()->user_id,
                'rule' => admincard_rule::all(),
                'card' => Admincard::all(),
                'joinCard' => DB::table('admincards')->join('admincard_rules', 'admincard_rules.id', '=', 'admincards.rule_id')->get(),
                'user' => User::where('id', $id)->get()[0],
                'joinUser' => DB::table('users')->join('userdetails', 'userdetails.id', '=', 'users.id')->get()[0],
                'lastAccess' => access_record::where('user_id', $user_id)->latest()->limit(1)->get(),
                'userdetail' => getfucntion::getRolling()
                // ->join('withdraw_methods','withdraw_methods.id','=','users.id')
            ];
            return $res[$index];
        }
        function getCard($ruleLevel, $levelUser, $located, $inAnd, $Notin = '', $amoute, $from, $to = '', $oparetor)
        {
            return DB::table('admincards')->join('admincard_rules', 'admincard_rules.id', '=', 'admincards.rule_id')
                ->where([
                    ['rule_level', '=', $ruleLevel],
                    ['level', '=', $levelUser],
                    ['localted', '=', $located],
                    ['inAnd', '=', $inAnd],
                    ['Notin', '=', $Notin],
                    ['amoute', '=', $amoute],
                    ['from', '' . $oparetor . '', $from],
                    ['to', '=', $to]
                ])->get();
        }
        return getCard(
            'under',
            '6',
            'in',
            'Laos',
            '',
            'reach',
            '50000',
            '',
            '<='
        );
        $coutry =

            $ip =  \Request::getClientIp();
        $located = geoip()->getLocation($ip);
        if ($located['country'] == res('joinCard')[0]->inAnd) { }

        dd($located);
    }
}
