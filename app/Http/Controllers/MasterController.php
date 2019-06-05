<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Jenssegers\Agent\Agent;
use App\clientid;
use Illuminate\Support\Facades\DB;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;

class MasterController extends Controller
{
    public function welcome(){
<<<<<<< HEAD
        $agent = new Agent();
        if($agent->isMobile()){
        // Alert::success('Mobile', 'Mobile Mode');
            return view('mobile.welcome');
        }else{
            //  Alert::success('Desktop', 'Desktop Mode');
=======
        Alert::success('Success Title', 'Success Message');
        // return view('desktop.welcome');
    
        $agent = new Agent();
        // if (Auth::check()) {
        //     $id = Auth::user()->id;
        //     $check = userdetail::where('id', '=', $id)->get()->count();
        //     if ($check < 1) {
        //         userdetail::create([
        //             'id' => Auth::user()->id,
        //             'user_id' => Auth::user()->user_id,
        //             'currency' => 'USD',
        //             'lang' => 'CH',
        //             'TotalRolling' => 0,
        //             'AvailableRolling' => 0,
        //         ]);
        //     }
        // }
        if ($agent->isMobile()) {
            return view('mobile.welcome');
        } else {
>>>>>>> 7c393e2c54c5850837cfdf4cf45445fea68d2cf8
            return view('desktop.welcome');
        }
    }
    public function updatemoney(Request $req)
    {
        // $balnce = 900000;
        // $id = $req;
        // User::where('id',''.$id.'')->update(['userBalance'=>$balnce]);
    }
    public function userdetaildata()
    {
        $id = Auth::user()->id;
        $date = date('Y-m-d');
        return DB::table('users')
            ->join('oauth_clients', 'users.id', '=', 'oauth_clients.user_id')
            ->where('users.id', $id)
            ->orderby('oauth_clients.created_at', 'desc')->limit(1)->get();
    }
    public function checklogin(Request $req)
    {
        $email = $req->email;
        $check = User::where('email', '=', '' . $email . '')->get()->count();
        if ($check < 1) {
            return ['success' => 'notfound'];
        }
    }
}
