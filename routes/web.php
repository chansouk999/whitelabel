<?php
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
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
Route::get('/message','Homecontroller@message');
Route::get('/index','Homecontroller@indexpage');
Route::get('/promote','Homecontroller@promote');
Route::get('/lobby','Homecontroller@lobby');
Route::post('/updatemoney','MasterController@updatemoney');
Auth::routes();

Route::get('/home', function(){
    return view('home');
});
Route::get('/', 'MasterController@welcome')->name('home');
Route::get('/userdetaildata', 'MasterController@userdetaildata');
Route::get('/getuserdata', 'MasterController@getuserdata');
// Route::get('/login', 'MasterController@welcome')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logoutuser');
Route::get('updatemoney/{id}','API/Apicontroller@updatemoney');
Route::get('/getlogin',function(){
        
    $http = new GuzzleHttp\Client();
    $email = \Auth::user()->email;
    $name = \Auth::user()->name;
    $resposnse = $http->post('http://localhost:8001/login',[
        'form_params'=>[
            'email'=> $email,
            'password'=> $name
        ]
    ]);
    return $datacheckresult = json_decode((string) $resposnse->getBody(), true);
    return redirect('http://localhost:8001/getlogin');
    });


// admin
 Route::get('/admins','Homecontroller@admin');













// Route::get('redirect',function(){
//     $http = new GuzzleHttp\Client();
//     $namecheck = \Auth::user()->name;
//     $emailcheck = \Auth::user()->email;
//     $id = \Auth::user()->id;
//     $provider_name = \Auth::user()->provider_name;
//     $balance =  \Auth::user()->userBalance;
//     $pro_id = \Auth::user()->pro_id;
//     $password = \Auth::user()->password;
//     // return $password;

//     $query = http_build_query([
//         'client_id' => '13',
//         'redirect_uri' => 'http://localhost:8002/callback',
//         'response_type' => 'code',
//         'scope' => '',
//     ]); 
   

//     $datacheck = $http->get('http://localhost:8001/api/checkapiuser?name='.$namecheck
//     .'&email='.$emailcheck
//     .'&id='.$id
//     .'&provider_name='.$provider_name
//     .'&balance='.$balance
//     .'&pro_id='.$pro_id
//     );

    
//     $datacheckresult = json_decode((string) $datacheck->getBody(), true);
//     // $header =[
//     //     'Content-Type' => 'application/json',
//     //     'Accept'=>'application/json',
//     //     'Authorization'=>'Bearer '.$datacheckresult['access_token']
//     // ];

//     // $response = $http->post('http://localhost:8001/oauth/token', [
//     //     'headers' => $header,
//     //     'form_params' => [
//     //         'username' => $emailcheck,
//     //         'password' => $namecheck,
//     //         'grant_type' => 'password',
//     //         'client_id' => '12',
//     //         'client_secret' => 'v8wLf490sptGgBWWyaC3rAPbIzd7NLtQLcO2zMgx',
//     //     ]
//     // ]);
//     // $accessdata = json_decode((string) $response->getBody(), true);



//     // return $header;
//      return redirect('http://localhost:8001/oauth/authorize?'.$query);
// })->name('get.token');
// Route::get('/callback', function (Request $request) {
    
//     $http = new GuzzleHttp\Client;
//     $namecheck = \Auth::user()->name;
//     $emailcheck = \Auth::user()->email;
    
//     $response = $http->post('http://localhost:8001/oauth/token', [
//         'form_params' => [
//             'grant_type' => 'authorization_code',
//             'client_id' => '13',
//             'client_secret' => 'lofQKammC1Rk5cAJPFHEBJ6iXNcC9boKw7LzccgS',
//             'redirect_uri' => 'http://localhost:8002/callback',
//             'code' => $request->code,
//         ],
//     ]);
//     $accessdata = json_decode((string) $response->getBody(), true);
//     $header =[
//         'Content-Type' => 'application/json',
//         'Accept'=>'application/json',
//         'Authorization'=>'Bearer '.$accessdata['access_token']
//     ];

//     // $response2 = $http->post('http://localhost:8002/oauth/token', [
//     //     'form_params' => [
//     //         'name' => $emailcheck,
//     //         'password' => $namecheck,
//     //         'grant_type' => 'password',
//     //         'client_id' => '10',
//     //         'client_secret' => 'IxMjhiOGmo4KoMhA4V4z0MDfLIzlHOaRvQvVS6SG',
//     //     ],
//     //     'headers'=>$header
//     // ]);

    


//     $resuser = $http->get('http://localhost:8001/api/users',['headers'=>$header]);
//     $data =  json_decode((string) $resuser->getBody(), true);
//     return redirect('http://localhost:8001/getlogin');
//     // return [$accessdata,$data];
    
// });