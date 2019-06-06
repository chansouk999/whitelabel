<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use DateTime;
use App\Http\Controllers\Controller;
use Auth;
class Apicontroller extends Controller
{
    public function userdetail(){
        return Auth::user();
    }
    public function updatemn(Request $req){

        date_default_timezone_set("Asia/Shanghai");
      
        $bl = $req->balance;
        $id = $req->id;
        $userstatus = $req->userstatus;
        $userid = explode('_',$id);
        $gotid = $userid[1];
        $status = $req->status;
        $date = date('y-m-d H:i:s');
        $hoursnumber = $req->hoursnumber;

        User::where('user_id', '=', ''.$gotid.'')->update(['last_activity' => $date]);
        if($status == 'cutmoney'){
            DB::UPDATE('UPDATE users SET userBalance = userBalance - '.$bl.' WHERE user_id = "'.$gotid.'" ');
        }elseif($status == 'userstatus'){
            User::where('user_id','=',''.$gotid.'')->update(['userStatus'=>''.$userstatus.'']);
        }elseif($status == 'onlinehours'){
            DB::UPDATE('UPDATE users SET totalOnlineHour = totalOnlineHour +'.$hoursnumber.' WHERE user_id = "'.$gotid.'" ');
        }
        else{
            $rolling = $req->rolling;
            DB::UPDATE('UPDATE users SET userBalance = userBalance +'.$bl.' WHERE user_id = "'.$gotid.'" ');
            if($rolling != ''){
                DB::UPDATE('UPDATE userdetails SET AvailableRolling = AvailableRolling +'.$rolling.',TotalRolling = TotalRolling + '.$rolling.'  WHERE user_id = "'.$gotid.'" ');
            }
        }
        
    }
}
