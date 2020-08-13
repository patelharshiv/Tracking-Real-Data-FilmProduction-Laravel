<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function(){
    return view('welcome');
});
Route::post('backend','guestcontroller@index');
Route::get('/intronew',function(){
    return view('intronew');
});
Route::post('uname','unamecontroller@index');
Route::post('checkrecord','checkrecordcontroller@index');
Route::post('checkanswered','checkansweredcontroller@index');
Route::view('/personalnew','personalnew');
Route::view('/home1','home1');
Route::post('question1','questioncontroller@index');
Route::post('question2','questioncontroller@index');
Route::post('question3','questioncontroller@index');
Route::post('question4','questioncontroller@index');
Route::post('question5','questioncontroller@index');
Route::post('question6','questioncontroller@index');
Route::post('question7','questioncontroller@index');
Route::post('backend4','home1controller@index');
Route::get('logout','logoutcontroller@index');
Route::get('contactnew','logoutcontroller@index');
Route::get('aboutnew','logoutcontroller@index');
Route::get('analysisnew','logoutcontroller@index');
Route::get('profile','profilecontroller@index');
Route::get('releaseposter','logoutcontroller@index');
Route::get('releasetrailer','logoutcontroller@index');
Route::post('backend','signincontroller@index');
Route::post('upload',function(Request $req){
    $img_name = $req->uploaded->getClientOriginalName();
    $type = $req->uploaded->getClientMimeType();
    $file = $req->uploaded;
    $validator = Validator::make($req->all(), [
        'uploaded' => 'mimes:jpeg,png,bmp,gif,svg,jpg',
    ]);
       if($validator->fails()){
           return "yes";
       }
       else{
        $path = $req->uploaded->storeAs('images', $img_name , 'public');
        $path1 = asset('storage/images/'.$img_name);
        return "<img src = '$path1' alt='traditional'>";
       }
});
Route::view('uplo','imageexample');