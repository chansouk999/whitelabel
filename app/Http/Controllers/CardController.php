<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as Reqst;
use Auth;
use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\withdraw_methods;
use App\userdetail;
use DateTime;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;
use League\Flysystem\Exception;

class CardController extends Controller
{
    // Vong Create add Card
    public function addcard(Request $request)
    {
        try {
            $update = array(
                'desc' => $request->desc,
                'userName' => $request->name,
                'bankAccount' => $request->cardnumber,
                'methodId' => $request->bankAccount,
                'registerProvince' => $request->province,
                'registerCity' => $request->city,
                'branch' => $request->branch,
                'user_id' => Auth::user()->user_id
                // forbank
            );
            // return $update;
            DB::enableQueryLog();
            $code = $request->code;
            $check =  withdraw_methods::where('bankAccount', '=', '' . $update['bankAccount'] . '')->get()->count();
            if ($check > 0 ) {
                return $this->returncode(100, 'No data', 'aleady exist');
            } else {
                $save = withdraw_methods::create($update);
                if ($save) {
                    return $this->returncode(200, 'No data', 'success');
                } else {
                    return $this->returncode(300, '', DB::getQueryLog()); //query error
                }
            }
        } catch (\Exception $e) {
            return $this->returncode(500, '', $e->getMessage()); //internal server eeror
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
