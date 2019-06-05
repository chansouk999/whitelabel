<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
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
        $agent = new Agent();
        if($agent->isMobile()){
            return "FUCK YOU VONG";
        }else{
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

      //    Mobile
      public function whitelabel_mobile()
      {
          return view('mobile.welcome');
      }
}
