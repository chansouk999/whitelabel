<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Auth;
use App\User;
class MasterController extends Controller
{
    public function welcome(){
        return view('desktop.welcome');
    }
    public function updatemoney(Request $req){
        // $balnce = 900000;
        // $id = $req;
        // User::where('id',''.$id.'')->update(['userBalance'=>$balnce]);
    }
    public function userdetaildata(){
        return Auth::user();
    }

}
