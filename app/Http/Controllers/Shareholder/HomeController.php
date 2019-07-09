<?php

namespace App\Http\Controllers\Shareholder;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('auth:shareholders');
    }

    public function index(){
        return view('admin.shareholder');
    }

}
