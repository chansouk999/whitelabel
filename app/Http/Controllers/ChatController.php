<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as Reqst;
use Auth;
use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;
use App\chat_history;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Controllers\ActivityLogController as ActivityLogder;
use App\Http\Controllers\StaticController as getFunction;
use App\withdraw_methods;
use App\access_record;
use App\userdetail;
use DateTime;
use App\AcceessIP;
use App\activityLog;
use Exception;
use App\Selfservice;
use App\Announcement;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;
use App\Rolling_history;
use App\Admincard;
use App\admincard_rule;
use App\reply_anouces;
use App\Admin;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administrator');
    }
    public function getAnnounceData($id)
    {
        try {
            $res = Announcement::where('AnouncementID', $id)->get()[0];
            return $res;
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function checkAnnounnce($id)
    {
        $data = reply_anouces::where('chatId', $id)->get()->count();
        return $data;
    }
    public function queryDataChat($re)
    {
        try {
            // chat
            $checkAn = $this->checkAnnounnce($re->chat);

            $res = $this->getAnnounceData($re->GetdataID);
            $chatid = substr(strtotime('now'), -7, 7) . $res->post_by . $res->AnouncementID;
            // return $chatid;

            $getAuth = Auth::guard('administrator')->user()->id;
            $Getdata = null;
            if ($checkAn < 1) {

                $insertdata = array(
                    'anou_id' => $res->AnouncementID,
                    'user_id' => $getAuth,
                    'chater_id' => $getAuth,
                    'adminId' => $res->post_by,
                    'chatId' => $chatid

                );
                $Getdata = reply_anouces::create($insertdata);
            } else {
                $chatid = $re->chat;
                // return $checkAn;
            }

            // return $re;

            $insert_chat = array(
                'chatId' => $chatid,
                'from' => $getAuth,
                'to' => $res->post_by,
                'conversationMsg' => $re->typemessage,
                'owner' => 1,
            );

            $saveChat = chat_history::create($insert_chat);
            //     'anou_id',
            // 'user_id',
            // 'chater_id',
            // 'adminId','chatId',
            // 'owner',
            $result = [
                $Getdata,
                $saveChat
            ];
            return $result;
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function SenddataAdmin(Request $request)
    {

        // chat_history
        // return $request;
        try {
            return $Getdata = $this->queryDataChat($request);
            DB::enableQueryLog();


            if ($Getdata) {
                $user = Auth::guard('administrator')->user()->id;

                $message = "fuck...!";

                broadcast(new MessageSent($user, $message))->toOthers();
                return $this->returncode(200, "Delete", 'success');
            } else {
                return $this->returncode(300, "Can not Delete", DB::getQueryLog());
            }
        } catch (\Exception $ex) {
            return $this->returncode(500, '', $ex->getMessage());
        }
    }
    public function chat()
    {
        return view('chatAdmin');
    }
    public function getDataChat($id)
    {
        // chat_history
        $getAuth = Auth::guard('administrator')->user()->id;
        $data = DB::table('announcements')
            ->join('reply_anouces', 'reply_anouces.anou_id', '=', 'announcements.AnouncementID')
            ->join('chat_histories', 'chat_histories.chatId', '=', 'reply_anouces.chatId')
            ->where('announcements.AnouncementID', '=', $id)
            ->get();
        $getpostby = null;
        if ($data->count() < 1) {
            $data = [];
        } else {
            $getpostby = $data->pluck('post_by')[0];
        }
        $getadmin = Admin::where('id', '=', $getpostby)->get();
        return  [$data, $getadmin];
    }
}
