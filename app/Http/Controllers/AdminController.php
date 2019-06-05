<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function getuserdata(Request $req){
        $data = $req->search;
        if($data !== ''){
            $user = DB::table('users')
            ->join('userdetails','users.id','=','userdetails.id')
            ->where('name','like','%'.$data.'%')
            ->orwhere('email','like','%'.$data.'%')
            ->orwhere('userStatus','like','%'.$data.'%')
            ->paginate(20);
            return ['userdata'=>$user];
        }else{
            $user = DB::table('users')
            ->join('userdetails','users.id','=','userdetails.id')
            ->paginate(20);
            return ['userdata'=>$user];
        }
       
    }
}
