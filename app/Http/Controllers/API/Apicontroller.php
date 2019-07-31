<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\access_token;
use App\Request as Reqst;
use DateTime;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Controllers\ActivityLogController as ActivityLog;
use App\Http\Controllers\AdminController as Admincontroller;
use App\userdetail;
use function GuzzleHttp\json_decode;
// use Symfony\Component\HttpKernel\Client;
use GuzzleHttp\Client;

class Apicontroller extends Controller
{
    public function testcode()
    {
        return Admincontroller::helloword();

        return \Request::query('name');

        $data = [
            array(
                "id" => 1,
                "userName" => "fuck u vong",
                "bankAccount" => "445522663355",
                "registerProvince" => "1231",
                "registerCity" => "123",
                "branch" => "123123",
                "status" => "not use",
                "created_at" => "2019-06-26 09:51:47",
                "updated_at" => "2019-06-27 11:33:40",
                "user_id" => "173753DyvNaQk",
                "methodId" => "AL",
                "desc" => null
            ),
            array(
                "id" => 1,
                "userName" => "fuck u vong",
                "bankAccount" => "445522663355",
                "registerProvince" => "1231",
                "registerCity" => "123",
                "branch" => "123123",
                "status" => "not use",
                "created_at" => "2019-06-26 09:51:47",
                "updated_at" => "2019-06-27 11:33:40",
                "user_id" => "173753DyvNaQk",
                "methodId" => "AL",
                "desc" => null
            ),
        ];

        $newdata = [];
        foreach($data as $dt){
            if($dt['bankAccount']){
                $newdata[] = $dt['bankAccount'];
            }
        }
        return $newdata;

        $http = new Client;
        $res = $http->get('https://hq.sinajs.cn/?rn=1552280540946&list=sh000001');
        $res;
        // return explode($res);
        // https://api.huobi.pro/market/trade?symbol=btcusdt
        $url = 'https://api.huobi.pro/market/trade?symbol=btcusdt';
        $data = file_get_contents($url);
        $data = json_decode($data);
        return $gettoken = access_token::orderby('created_at', 'desc')->limit(1)->get()->pluck('access_token')[0];
        $Log = new ActivityLog();
        $method = 'Playerrecord or Adminrecord';
        $data = array(
            'user_id' => Auth::user()->user_id,
            'event' => 'Change Password',
            'serveby' => 'Your Admin id',
            'amount' => 5000,
            'eventid' => 'gameic etc..',
            'Time' => date('Y-m-d'),
        );
        return $Log->storeLog($method, $data);
        $id = Auth::user()->user_id;
        // date_default_timezone_set("Asia/Shanghai");
        $date2 = new DateTime;
        $date2->modify('-650 second');
        $formatted_date = $date2->format('Y-m-d H:i:s');
        $latesttopuop =  Reqst::where([['userId', '=', $id], ['created_at', '>=', '' . $formatted_date . '']])->orderby('created_at', 'desc')->limit(1)->get();
        $tn = strtotime('now');
        $now = strtotime($latesttopuop->pluck('created_at')[0]);
        return $now - $tn;
    }
    public function userdetail()
    {
        return Auth::user();
    }
    public function Logdata(Request $req)
    {
        try {

            $return = new Admincontroller();
            $databet = $req->data[0];
            foreach ($databet as $bet) {
                $method = 'Playerrecord';
                $data = array(
                    'user_id' => $req->data[2],
                    'event' => $req->data[4] . ' ' . $bet['id'] . ' stock ' . $req->data[1],
                    'serveby' => '',
                    'amount' => $bet['price'],
                    'eventid' => $req->data[3],
                    'Time' => date('Y-m-d'),
                );
                $Log = new ActivityLog();
                $Log->storeLog($method, $data);
            }
        } catch (\Exception $ex) {
            return $return->returncode(500, '', $ex->getMessage());
        }
    }
    public function updatemn(Request $req)
    {
        // return $req;
        date_default_timezone_set("Asia/Shanghai");

        $bl = $req->balance;
        $id = $req->id;
        $userstatus = $req->userstatus;
        $userid = explode('_', $id);
        $gotid = $userid[1];
        $status = $req->status;
        $date = date('y-m-d H:i:s');
        $hoursnumber = $req->hoursnumber;

        User::where('user_id', '=', '' . $gotid . '')->update(['last_activity' => $date]);
        if ($status == 'cutmoney') {
            DB::UPDATE('UPDATE users SET userBalance = userBalance - ' . $bl . ' WHERE user_id = "' . $gotid . '" ');
            DB::update('UPDATE userdetails SET TotalBet = TotalBet + ' . $bl . ' WHERE user_id = "' . $gotid . '" ');
        } elseif ($status == 'userstatus') {
            User::where('user_id', '=', '' . $gotid . '')->update(['userStatus' => '' . $userstatus . '']);
        } elseif ($status == 'onlinehours') {
            DB::UPDATE('UPDATE users SET totalOnlineHour = totalOnlineHour +' . $hoursnumber . ' WHERE user_id = "' . $gotid . '" ');
        } else {
            $rolling = $req->rolling;
            DB::UPDATE('UPDATE users SET userBalance = userBalance +' . $bl . ' WHERE user_id = "' . $gotid . '" ');
            if ($rolling != '') {
                DB::UPDATE('UPDATE userdetails SET AvailableRolling = AvailableRolling +' . $rolling . ',TotalRolling = TotalRolling + ' . $rolling . '  WHERE user_id = "' . $gotid . '" ');
            }
        }
    }
}
