<?php
use Illuminate\Http\Request;
use GuzzleHttp\Client;
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
Route::get('/index','Homecontroller@indexpage');
Route::get('/promote','Homecontroller@promote');
Route::get('/lobby','Homecontroller@lobby');
Auth::routes();

Route::get('/home', function(){
    return view('home');
});
Route::get('/', 'MasterController@welcome')->name('home');
// Route::get('/login', 'MasterController@welcome')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logoutuser');
Route::get('updatemoney/{id}','API/Apicontroller@updatemoney');

Route::get('redirect',function(){
    $http = new GuzzleHttp\Client;
    $query = http_build_query([
        'client_id' => '9',
        'redirect_uri' => 'http://localhost:8002/callback',
        'response_type' => 'code',
        'scope' => '',
    ]); 
    $namecheck = \Auth::user()->name;
    $emailcheck = \Auth::user()->email;
    $id = \Auth::user()->id;
    $provider_name = \Auth::user()->provider_name;
    $balance =  \Auth::user()->userBalance;
    $pro_id = \Auth::user()->pro_id;

    $datacheck = $http->get('http://localhost:8001/api/checkapiuser?name='.$namecheck
    .'&email='.$emailcheck
    .'&id='.$id
    .'&provider_name='.$provider_name
    .'&balance='.$balance
    .'&pro_id='.$pro_id
    );
    $datacheckresult = json_decode((string) $datacheck->getBody(), true);
    return $datacheckresult;
    // return redirect('http://localhost:8001/oauth/authorize?'.$query);
})->name('get.token');
Route::get('/callback', function (Request $request) {
    $http = new GuzzleHttp\Client;
    
    
    $response = $http->post('http://localhost:8001/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '9',
            'client_secret' => 'YFzms4Duk2SstrCioqyaJrheyPVA26mHvv4Xc5W0',
            'redirect_uri' => 'http://localhost:8002/callback',
            'code' => $request->code,
        ],
    ]);

    $accessdata = json_decode((string) $response->getBody(), true);
    $header =[
        'Content-Type' => 'application/json',
        'Accept'=>'application/json',
        'Authorization'=>'Bearer '.$accessdata['access_token']
    ];


    $resuser = $http->get('http://localhost:8001/api/users',['headers'=>$header]);
    $data =  json_decode((string) $resuser->getBody(), true);
    return [
        'ACCESS_DATA'=>$accessdata,
        'USER_DATA'=>$data,$name,$email
    ];
    // return redirect('http://localhost:8000/getlogin');
    
});