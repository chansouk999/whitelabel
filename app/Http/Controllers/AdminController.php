<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Exception;
use App\Request as Reqst;
use App\access_token;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function actionprocess(Request $req){ 
        try{
            $return = new App\Http\Controllers\MasterController;
            // return $return->returncode(200, 'No data', 'success');
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }
    public function gettoken(){
        $user_id=Auth::user()->user_id;
        $gettoken = trim(access_token::where('user_id','like','%'.$user_id.'%')->orderby('created_at','desc')->limit(1)->get()->pluck('access_token'),'["]');
        session(['access_token'=>$gettoken]);
        return ['token'=>$gettoken];
    }
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
    public function getreuest(Request $req){
        $data = Reqst::orderby('created_at','desc')->paginate(20);
        return ['data'=>$data];

    }
}
