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










Route::get('/getdata', 'AdminController@getuserdata');
Route::get('/gettoken', 'AdminController@gettoken');














Route::get('/home', function () {
    return view('home');
});
// Route::get('/',)
Route::get('/', 'MasterController@welcome')->name('home');
Route::get('/checkconnection', 'MasterController@checkconnection');
Route::post('/transfertoapi', 'MasterController@transfertoapi');

Route::post('/checkreigster', 'MasterController@checkreigster');
Route::get('/userdetaildata', 'MasterController@userdetaildata');
Route::get('/getuserdata', 'MasterController@getuserdata');
Route::post('/sendsms', 'MasterController@sendsms');
Route::post('/payment', 'MasterController@payment');
// Route::get('/login', 'MasterController@welcome')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logoutuser');
Route::get('updatemoney/{id}', 'API/Apicontroller@updatemoney');
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
    return $datacheckresult = json_decode((string)$resposnse->getBody(), true);
    // return redirect('http://localhost:8001/getlogin');
});


// admin
Route::get('/admins', 'HomeController@admin');

//  Mobile
Route::get('/wlmobile', 'HomeController@whitelabel_mobile');
Route::get('/myaccount', 'HomeController@myaccount');

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
    $id = \Auth::user()->pro_id . '_' . \Auth::user()->user_id;
    $http = new GuzzleHttp\Client();
    // function dehash(){
    $data = \Auth::user()->pwdhashed;
    $pwd = explode('-', $data);
    $gotpwd = [];
    foreach ($pwd as $p) {
        $gotpwd[] = substr($p, -1, 1);
    }
    $realpwd = implode('', $gotpwd);
 $dehashed =  $realpwd; //GOTED PASSWORD
    // }
    // return $dehashed;

    $response = $http->post('http://localhost:8003/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => '2',
            'client_secret' => 'n7ZrJ7VGv4b6QuQjZ1AKWZ4w4AuvX88JuxzlPjGu',
            'username' => \Auth::user()->email,
            'password' => $dehashed,
            'scope' => '',
        ],
    ]);
    $accessdata = json_decode((string)$response->getBody(), true);
    $header = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        'Authorization' => 'Bearer ' . $accessdata['access_token']
    ];
    $resuser = $http->get('http://localhost:8003/api/users', ['headers' => $header]);
   $data =  json_decode((string)$resuser->getBody(), true);
    $date = date('Y-m-d');
    $check = access_token::where([['created_at', 'like', '%' . $date . '%'], ['user_id', '=', '' . $data['user_id'] . '']])->get()->count();
    if ($check < 1) {
        access_token::create([
            'user_id' => $data['user_id'],
            'access_token' => $accessdata['access_token']
        ]);
    }
    return redirect('http://localhost:8003/igotologin');
});
// Route::get('redirect',function(){
//     $http = new GuzzleHttp\Client();

//     // $query = http_build_query([
//     //     'client_id' => '3',
//     //     'redirect_uri' => 'http://localhost:8004/callback',
//     //     'response_type' => 'code',
//     //     'scope' => '',
//     // ]);   
//     //  return redirect('http://localhost:8003/oauth/authorize?'.$query);
// })->name('get.token');
// Route::get('/callback', function (Request $request) {
    
//     $http = new GuzzleHttp\Client;
//     $response = $http->post('http://localhost:8003/oauth/token', [
//         'form_params' => [
//             'grant_type' => 'authorization_code',
//             'client_id' => '3',
//             'client_secret' => 'sBR3DGz8O9RJLkDa1Q4rixdC19iWktnjDca3yvBV',
//             'redirect_uri' => 'http://localhost:8004/callback',
//             'code' => $request->code,
//         ],
//     ]);
//     $accessdata = json_decode((string) $response->getBody(), true);
//     $header =[
//         'Content-Type' => 'application/json',
//         'Accept'=>'application/json',
//         'Authorization'=>'Bearer '.$accessdata['access_token']
//     ];
//     $resuser = $http->get('http://localhost:8003/api/users',['headers'=>$header]);
//     $data =  json_decode((string) $resuser->getBody(), true);
//     $date = date('Y-m-d');
//     $check = access_token::where([['created_at','like','%'.$date.'%'],['user_id','=',''.$data['user_id'].'']])->get()->count();
//     if($check < 1){
//         access_token::create([
//             'user_id'=>$data['user_id'],
//             'access_token'=>$accessdata['access_token']
//         ]);
//     }
//     return redirect('http://localhost:8003/getlogin');
// //     // return [$accessdata,$data];
    
// });

/////timer
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});





Route::get('/coding',function(Request $req){
    return $req->getHttpHost();
});
Route::get('/notify','PaymentController@notify');
Route::post('actionpayment', 'PaymentController@actionpayment');