<?php

namespace App\Http\Controllers\Admins;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth:administrator');
    }
    public function index(){
            return view('admin.welcome');
    }
}
