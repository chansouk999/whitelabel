<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class MasterController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function updatemoney(Request $req){
        $balnce = 900000;
        User::where('id',13)->update(['userBalance'=>$balnce]);
    }

}
