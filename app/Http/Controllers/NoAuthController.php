<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Carousel;
use App\User;
use App\access_record;
use Illuminate\Support\Facades\Hash;
class NoAuthController extends Controller
{
    public function welcome()
    {

        // GET TOKEN ADMIN
        // GET TOKEN ADMIN
        $agent = new Agent();
        if ($agent->isMobile()) {
            // Alert::success('Mobile', 'Mobile Mode');
            $checkpcormb = "mb";
            return view('mobile.welcome', compact('checkpcormb'));
            // return view('mobile.message', compact('checkpcormb'));
        } else {
            //  Alert::success('Desktop', 'Desktop Mode');
            $checkpcormb = "pc";
            return view('desktop.welcome', compact('checkpcormb'));
            // return view('desktop.message', compact('checkpcormb'));
        }
    }
    public function getCarousel()
    {
        return Carousel::orderby('created_at', 'desc')->get();
    }
    public function checkreigster(Request $req)
    {

        $email = $req->email;
        $name = $req->name;
        $countm = User::where('email', '=', $email)->get()->count();
        $countn = User::where('name', '=', $name)->get()->count();
        if ($countn > 0) {
            return ['success' => 'nameexist'];
        } elseif ($countm) {
            return ['success' => 'emailexist'];
        } else {
            return ['success' => 'success'];
        }
    }

    public function trackuserLogin($pwd, $status, $user_id, $id, $hashpasswordLogin)
    {
        $trackuser = array(
            'id' => $id,
            'time' => date('y-m-d H:i:s'),
            'login_IP' => \Request::getClientIp(),
            'password' => $pwd,
            'login_status' => $status,
            'online_period' => 0,
            'user_id' => $user_id,
        );
        $save = access_record::create($trackuser);
    }
    public function checklogin(Request $req)
    {
        $email = $req->email;
        $password = $req->pwd;
        $check = User::where('email', '=', '' . $email . '')->get();


        // return $check;
        if ($check->count() < 1) {
            return ['success' => 'notfound'];
        } else {
            $count = $check->count();
            $user_id = $check->pluck('user_id')[0];
            $id = $check->pluck('id')[0];
            $hashpasswordLogin = $check->pluck('pwdhashed')[0];
            $checkpwd = $check->pluck('password')[0];
            if (!Hash::check($password, $checkpwd)) {
                $this->trackuserLogin($password, 'Failure', $user_id, $id, $hashpasswordLogin);
                return ['success' => 'passwordnotmatch'];
            } else {
                $this->trackuserLogin($password, 'Success', $user_id, $id, $hashpasswordLogin);
                $getIpController = new CardController;
                return $getIpController->GetuserAccessip();
                return ['success' => 'success'];
            }
        }
    }

}
