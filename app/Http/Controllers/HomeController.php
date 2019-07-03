<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\access_token;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // GET TOKEN ADMIN
        $user_id = Auth::user()->user_id;
        return $gettoken = trim(access_token::where('user_id', 'like', '%' . $user_id . '%')->orderby('created_at', 'desc')->limit(1)->get()->pluck('token'), '["]');
        // GET TOKEN ADMIN
        $agent = new Agent();
        if ($agent->isMobile()) {
            return "FUCK YOU BANK";
        } else {
            return view('welcome');
        }
    }
    public function message()
    {

        return view('desktop.message');
    }
    public function indexpage()
    {
        return view('index');
    }
    public function promote()
    {
        return view('promote.promote');
    }
    public function lobby()
    {
        return view('lobby');
    }


    //    admin
    public function admin()
    {
        return view('admin.welcome');
    }
    public function shareholder(){
        return 'shareholder';
    }
    //    Mobile
    public function whitelabel_mobile()
    {
        $checkpcormb= "mb";
        return view('mobile.welcome', compact('checkpcormb'));
    }
    public function myaccount()
    {
        return view('mobile.myaccount');
    }

    public function tapsprofile()
    {
        return view('mobile.tapsprofile');
    }
}
