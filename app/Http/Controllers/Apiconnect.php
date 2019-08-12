<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ActivityLogController as ActivityLog;

use Illuminate\Http\Request;
use App\Request as Reqst;
use App\Selfservice;
use Auth;
use GuzzleHttp\Client;
use Jenssegers\Agent\Agent;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Validator;
use App\clientid;
use Illuminate\Support\Facades\Cache;
use App\access_token;
use App\Admin;
use App\admin_access;
use App\Http\Controllers\StaticController as getfunction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Admintype;
use App\role;
use App\withdraw_methods;
use App\userdetail;
use App\Http\Controllers\CatchExceptionController as CatchEr;
use DateTime;
use App\Http\Controllers\CardController as CardController;
use App\access_record;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;
use League\Flysystem\Exception;
use App\OauthClient;
use App\Carousel;
use App\Http\Controllers\getHeaderController as header;
use App\Rolling_history;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Cookie;

class Apiconnect extends Controller
{
    private $url = "http://localhost:8003/api";
    public function Getconnect()
    {
        $http = new Client;
        $send = $http->get($this->url . '/GetUserData', [
            'headers' => header::header()
        ]);
        $accessdata = json_decode((string) $send->getBody(), true);
        return $accessdata;
    }
}
