<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
class Apicontroller extends Controller
{
    public function userdetail(){
        return Auth::user();
    }
    public function updatemn(Request $req){
        $bl = $req->balance;
        $id = $req->id;
        $userid = explode('_',$id);
        $gotid = $userid[1];
        $status = $req->status;
        if($status == 'cutmoney'){
            DB::UPDATE('UPDATE users SET userBalance = userBalance - '.$bl.' WHERE user_id = "'.$gotid.'" ');
        }else{
            DB::UPDATE('UPDATE users SET userBalance = userBalance +'.$bl.' WHERE user_id = "'.$gotid.'" ');
        }
        
    }
}
