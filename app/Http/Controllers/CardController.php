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
use App\access_record;
use App\userdetail;
use DateTime;
use App\activityLog;
use Exception;
use App\Selfservice;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;
// use League\Flysystem\Exception;
class CardController extends Controller
{
    public function getcardinfo()
    {
        try {
            $data = withdraw_methods::orderby('created_at', 'asc')->get();
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
        }
    }
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
            if ($check > 0) {
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
    public function ShowCardUse()
    {
        try {
            $data = withdraw_methods::where('status', '=', 'use')->get();
            if ($data) {
                return $this->returncode(200, $data, 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //internal server eeror
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
    public function CardDelete($id)
    {
        $deleteCard = withdraw_methods::find($id)->delete();
        //   dd($deleteCard);
    }

    public function useCard(Request $request)
    {
        DB::enableQueryLog();
        $updateData = withdraw_methods::where('status', '=', 'use')->update(['status' => 'not use']);
        $request = withdraw_methods::where('id', '=', $request->id)->update(['status' => 'use']);
        if ($request) {
            return $this->returncode(200, 'No data', 'success');
        } else {
            return $this->returncode(300, '', DB::getQueryLog()); //query error
        }
    }
    public function trackuserLogin($id)
    {
        $getTrackUser = access_record::where('user_id', '=', '' . $id . '')->get();
        return $getTrackUser;
    }
    public function getuserdetail()
    {
        $user_id = Auth::user()->user_id;
        $getuserdetail = userdetail::where('user_id', '=', '' . $user_id . '')->get();
        return $getuserdetail;
    }
    public function getPlayerRecord()
    {
        $playerRecoard  = Auth::user()->user_id;
        $getuserdetail = activityLog::where('detail', 'like', '%user_id":"' . $playerRecoard . '%')->get();
        return $getuserdetail;
    }
    public function ActionRecord($id)
    {
        $actionRecord  = Auth::user()->user_id;
        $actionRecordDetail = activityLog::where('detail', 'like', '%user_id":"' . $id . '%')->get();
        return $actionRecordDetail;
    }
    public function Selfservice()
    {
        $getSelfservice = Selfservice::all();
        return $getSelfservice;
    }

    public function editlevel($id)
    {
        $editlevel  = Selfservice::where('id', '=', '' . $id . '')->get();
        return $editlevel;
    }

    public function saveLavel(Request $request)
    {
        // return $request;
        try {
            DB::enableQueryLog();
            $insertData = array(
                'title' => $request->title,
                'level' => $request->level,
                'Amount' => $request->amount,
                'percentage' => $request->percentage,
            );
            if ($request->medthod == 'insert') {
                $Savedata = Selfservice::create($insertData);
            } else {
                $Savedata = Selfservice::where('id', '=', $request->id)->update($insertData);
            }
            if ($Savedata) {
                return $this->returncode(200, 'No data', 'success');
            } else {
                return $this->returncode(300, '', DB::getQueryLog()); //query error
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage()); //Internal erro
        }
    }
    public function deleteLevel($id)
    {
        $deleteLevel = Selfservice::find($id)->delete();
        //   dd($deleteCard);
    }
}
