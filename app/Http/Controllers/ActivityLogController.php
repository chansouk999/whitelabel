<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activityLog;
// use array
use Exception;
class ActivityLogController extends Controller
{
    //
    public function storeLog($method,array $data){
        try{
            $savedata = array(
                'method'=>$method,
                'detail'=>json_encode($data)
            );
            $save = activityLog::create($savedata);
             return $this->returncode(200, [$data,$method], 'success');
        }catch(\Exception $ex){
            return $this->returncode(500, $data, $ex->getMessage()); //internal server eeror
        }
    }
    public function returncode($code, $data, $msg)
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
