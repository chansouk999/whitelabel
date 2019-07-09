<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
class CatchExceptionController extends Controller
{
    public function CheckExption($data){
        try{
            DB::enableQueryLog();
            if($data){
                return $this->return(200,$data,'success');
            }else{
                return $this->return(300,$data,DB::getQueryLog());
            }
        }catch(\Exception $ex){
            $this->return(500,$data,$ex->getMessage());
        }
    }
    public function return($code, $data, $msg)
    {
        //100 already exist
        //200 success
        //500 internal erorr
        //300 query error
        //99 not enough
        //0 empty
        //202  request
        //203 wait for $second
        //419 no access
        // 303 cacle
        return ['code' => $code, 'data' => $data, 'msg' => $msg];
    }
}
