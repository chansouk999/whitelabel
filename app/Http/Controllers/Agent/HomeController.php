<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
      
    public function __construct()
    {
        $this->middleware('auth:agents');
    }
    public function index(){
        return "HELLO INDEX";
    }
}
