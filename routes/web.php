<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Route;
use App\access_token;
// use Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

// Route::get('/',);
Route::get('/message', 'HomeController@message');
Route::get('/index', 'HomeController@indexpage');
Route::get('/promote', 'HomeController@promote');
Route::get('/lobby', 'HomeController@lobby');
Route::post('/updatemoney', 'MasterController@updatemoney');
Auth::routes();



// Route::get('/admins', 'HomeController@admin');
// Route::get('administrator', 'AdminController@index')->middleware('admin');



Route::get('api/getAgent', 'Shareholder\HomeController@getAgent');
Route::get('api/getbetHisoty/{date}', 'Shareholder\HomeController@getApi');
Route::get('/getannounce/{m1}/{m2}', 'AdminController@getannounce');
Route::get('/getadmininfotimeline', 'AdminController@getadmininfotimeline');
Route::post('/addnewadmin', 'AdminController@addnewadmin');


Route::put('/Carousel/{id}', 'AdminController@updatedCarousel');
Route::get('/Carousel', 'MasterController@getCarousel');
Route::post('/Carousel', 'AdminController@postCarousel');
Route::get('/getadmininfo', 'AdminController@getadmininfo');


Route::get('/delete_img/{id}', 'AdminController@delete_img');
Route::get('/getimgtrans/{id}', 'AdminController@getimgtrans');
Route::get('/getallresultadmin', 'AdminController@getallresultadmin');
Route::post('/uploadsave', 'AdminController@uploadsave');
Route::post('/getgamehistory', 'AdminController@getgamehistory');
Route::get('/getlog', 'AdminController@getlog');
Route::get('/agenttransaction', 'AdminController@agenttransaction');
Route::post('/savetransfer', 'AdminController@savetransfer');
Route::get('/getshareholder', 'AdminController@getshareholder');
Route::get('/getagentinfo', 'AdminController@getagentinfo');
Route::post('saveshareholder', 'AdminController@saveshareholder');
Route::get('/getevnthistory', 'AdminController@getevnthistory');
Route::post('/actionprocess', 'AdminController@actionprocess');
Route::post('/saveagent', 'AdminController@saveagent');
Route::get('/getreuest', 'AdminController@getreuest');
Route::get('/getdata', 'AdminController@getuserdata');
Route::get('/gettoken', 'AdminController@gettoken');


Route::get('/home', function () {
    return view('home');
});
Route::get('/stocklist', function () {
    return view('desktop.stocklist');
});
// Route::get('/',)

Route::get('adminList', 'MasterController@adminList');
Route::post('requestdata', 'MasterController@requestdata');
Route::get('fullscreengame', 'MasterController@fullscreengame');
Route::get('getUserBet', 'MasterController@getUserBet');
Route::get('getRolling', 'MasterController@getRolling');
Route::get('/', 'MasterController@welcome')->name('home');
Route::post('/topupbalance', 'MasterController@topupbalance');
Route::post('/reqchangepwd', 'MasterController@reqchangepwd');
Route::get('/checkconnection', 'MasterController@checkconnection');
Route::post('/savecarddetail', 'MasterController@savecarddetail');
Route::post('/transfertoapi', 'MasterController@transfertoapi');

Route::post('/checkreigster', 'MasterController@checkreigster');
Route::get('/userdetaildata', 'MasterController@userdetaildata');
Route::get('/getuserdata', 'MasterController@getuserdata');
Route::post('/sendsms', 'MasterController@sendsms');
Route::post('/payment', 'MasterController@payment');
// Route::get('/login', 'MasterController@welcome')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logoutuser');
Route::get('updatemoney/{id}', 'API\Apicontroller@updatemoney');
Route::get('testcode', 'API\Apicontroller@testcode');
Route::get('/getlogin', function () {

    $http = new GuzzleHttp\Client();
    $email = \Auth::user()->email;
    $name = \Auth::user()->name;
    $resposnse = $http->post('http://localhost:8001/login', [
        'form_params' => [
            'email' => $email,
            'password' => $name
        ]
    ]);
    return 'Hello World';
    return $datacheckresult = json_decode((string) $resposnse->getBody(), true);
    // return redirect('http://localhost:8001/getlogin');
});


// admin
Route::get('/admins', 'HomeController@admin');

//  Mobile
Route::get('/wlmobile', 'HomeController@whitelabel_mobile');
Route::get('/myaccount', 'HomeController@myaccount');
Route::get('/profile', 'HomeController@tapsprofile');

//  Route::domain('{m}.localhost:8004')->group(function () {
//     Route::get('/', function () {
//             return "OK MOBVILE";
//     });
// });
Route::get('/getpassword', function () {

    function dehash()
    {
        $data = \Auth::user()->pwdhashed;
        $pwd = explode('-', $data);
        $gotpwd = [];
        foreach ($pwd as $p) {
            $gotpwd[] = substr($p, -1, 1);
        }
        $realpwd = implode('', $gotpwd);
        return $realpwd; //GOTED PASSWORD
    }
    $pwddehashed =  dehash();
    // return $pwddehashed;
});
Route::get('admin/check', function () {
    return "This route can only be accessed by super admin";
})->middleware('role:super');



Route::post('/checklogin', 'MasterController@checklogin');
Route::get('/redirectback', function () {
    $query = http_build_query([
        'client_id' => 'client-id',
        'redirect_uri' => 'http://localhost:8004/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);
    return redirect('http://localhost:8003/oauth/authorize?' . $query);
    // // asdasd
    // $id = \Auth::user()->pro_id . '_' . \Auth::user()->user_id;
    // $http = new GuzzleHttp\Client();
    // // function dehash(){
    // $data = \Auth::user()->pwdhashed;
    // $pwd = explode('-', $data);
    // $gotpwd = [];
    // foreach ($pwd as $p) {
    //     $gotpwd[] = substr($p, -1, 1);
    // }
    // $realpwd = implode('', $gotpwd);
    // $dehashed =  $realpwd; //GOTED PASSWORD

    // // }
    // // return $dehashed;

    // $response = $http->post('http://localhost:8003/oauth/token', [
    //     'form_params' => [
    //         'grant_type' => 'password',
    //         'client_id' => '2',
    //         'client_secret' => 'n7ZrJ7VGv4b6QuQjZ1AKWZ4w4AuvX88JuxzlPjGu',
    //         'username' => \Auth::user()->email,
    //         'password' => $dehashed,
    //         'scope' => '',
    //     ],
    // ]);
    // $accessdata = json_decode((string)$response->getBody(), true);
    // $header = [
    //     'Content-Type' => 'application/json',
    //     'Accept' => 'application/json',
    //     'Authorization' => 'Bearer ' . $accessdata['access_token']
    // ];
    // $resuser = $http->get('http://localhost:8003/api/users', ['headers' => $header]);
    // $data =  json_decode((string)$resuser->getBody(), true);
    // $date = date('Y-m-d');
    // $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $data['user_id'] . '']])->get()->count();
    // if ($check < 1) {
    //     access_token::create([
    //         'user_id' => $data['user_id'],
    //         'access_token' => $accessdata['access_token']
    //     ]);
    // }
    // return redirect('http://localhost:8003/igotologin');
});
Route::get('/redirect', 'RedirectBackController@redirect');
Route::get('/callback', 'RedirectBackController@callback');


/////timer
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get('/coding', function (Request $req) {
    return $req->getHttpHost();
});
Route::get('/notify', 'PaymentController@notify');
Route::post('actionpayment', 'PaymentController@actionpayment');

Route::post('/addcard', 'CardController@addcard');

Route::get('/getcardinfo', 'CardController@getcardinfo');

Route::get('/ShowCardUse', 'CardController@ShowCardUse');

Route::get('/trackuserLogin/{id}', 'CardController@trackuserLogin');

Route::post('/CardDelete/{id}', 'CardController@CardDelete');

Route::get('/getPlayerRecord', 'CardController@getPlayerRecord');

Route::get('/getuserdetail', 'CardController@getuserdetail');

Route::post('/useCard', 'CardController@useCard');

Route::get('/ActionRecord/{id}', 'CardController@ActionRecord');

Route::get('/Selfservice', 'CardController@Selfservice');

Route::post('/editlevel/{id}', 'CardController@editlevel');

Route::post('/saveLavel', 'CardController@saveLavel');

Route::post('/deleteLevel/{id}', 'CardController@deleteLevel');

Route::prefix('/administrator')->namespace('Admins')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/', 'HomeController@index');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::prefix('/agent')->namespace('Agent')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/', 'HomeController@index');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::prefix('/shareholder')->namespace('Shareholder')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/', 'HomeController@index');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});
// admin
Route::get('/admins', 'HomeController@admin');
//  Mobile
Route::get('/wlmobile', 'HomeController@whitelabel_mobile');
Route::get('/myaccount', 'HomeController@myaccount');

Route::get('getRequets', 'CardController@getRequets');

Route::get('/shareholderTEST', 'Shareholder@index');

Route::post('/saveannounce', 'AdminController@saveannounce');

Route::post('/getDate', 'CardController@getDate');

Route::get('/Getlogin', 'RedirectBackController@Getlogin');

Route::get('/TaguserDetail', 'CardController@TaguserDetail');

Route::post('/Savveselfservice', 'CardController@Savveselfservice');

Route::get('/getaccountment', 'CardController@getaccountment');

