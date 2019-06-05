<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;  
class AdminController extends Controller
{
    public function getuserdata(Request $req){
        $data = $req->search;
        if($data !== ''){
            $user = User::where('name','like','%'.$data.'%')
            ->orwhere('email','like','%'.$data.'%')
            ->orwhere('userStatus','like','%'.$data.'%')
            ->paginate(20);
            return ['userdata'=>$user];
        }else{
            $user = User::paginate(20);
            return ['userdata'=>$user];
        }
       
    }
}
