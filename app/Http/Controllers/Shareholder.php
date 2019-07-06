<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shareholder extends Controller
{
   public function index(){
    return view('admin.shareholder');
   }
}
