<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Jenssegers\Agent\Agent;
use App\clientid;
use App\access_token;
use Illuminate\Support\Facades\DB;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;

class MasterController extends Controller
{
    public function welcome(){
        
        // GET TOKEN ADMIN
        // GET TOKEN ADMIN
        $agent = new Agent();
        if($agent->isMobile()){
        // Alert::success('Mobile', 'Mobile Mode');
            return view('mobile.welcome');
        }else{
            //  Alert::success('Desktop', 'Desktop Mode');
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
