<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;

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

Route::get('/my-controller' , [MyController::Class, 'index']);
/* การเรียกอีกแบบ*/
Route::get('/my-controller2' , 'App\Http\Controllers\MyComtroller@index');
Route::namespace('App\Http\Controllers') -> group(function(){
    Route::get('/my-controller3' , 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@store');

});
Route::resource('/my-controller4' , MyController::class);





Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
});
Route::get('/my-route', function(){
    $data = ['var_a' => 'Multiplication Table'];
    return view('myfolder.mypage',$data); //เรียก viwe จาก folder

});
Route::post('/my-route', function(Request $req){
    $data['input'] = $req->input('input');
    return view('myroute', $data);

    //$data['input'] = $req->input('input');
    //return view('myroute', ['input' => $req->input('input')]);


});
 //$data['myinput'] = $req->input('myinput');
    //echo $req->input('myinput');
    //return view('myroute',$data);
//แตกecho $req->input('/myinput');
