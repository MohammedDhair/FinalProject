<?php

use Illuminate\Support\Facades\Route;

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




 
Route::get('/' , 'App\Http\controllers\controller@home');
Route::get('/user/index' , 'App\Http\controllers\UserController@index')->name('user.index');
Route::get('/user/create' , 'App\Http\controllers\UserController@create')->name('user.create');
Route::post('/user/store' , 'App\Http\controllers\UserController@store')->name('user.store');
Route::post('/user/update/{id}' , 'App\Http\controllers\UserController@update')->name('user.update');
Route::get('/user/edit/{id}' , 'App\Http\controllers\UserController@edit')->name('user.edit');
Route::get('/user/delete/{id}' , 'App\Http\controllers\UserController@delete')->name('user.delete');

Route::get('/article/index' , 'App\Http\controllers\ArticleController@index')->name('article.index');
Route::get('/article/create' , 'App\Http\controllers\ArticleController@create')->name('article.create');
Route::post('/article/store' , 'App\Http\controllers\ArticleController@store')->name('article.store');
Route::post('/article/update/{id}' , 'App\Http\controllers\ArticleController@update')->name('article.update');
Route::get('/article/edit/{id}' , 'App\Http\controllers\ArticleController@edit')->name('article.edit');
Route::get('/article/delete/{id}' , 'App\Http\controllers\ArticleController@delete')->name('article.delete');

Route::get('/project/index' , 'App\Http\controllers\PojectController@index')->name('project.index');
Route::get('/project/create' , 'App\Http\controllers\PojectController@create')->name('project.create');
Route::post('/project/store' , 'App\Http\controllers\PojectController@store')->name('project.store');
Route::post('/project/update/{id}' , 'App\Http\controllers\PojectController@update')->name('project.update');
Route::get('/project/edit/{id}' , 'App\Http\controllers\PojectController@edit')->name('project.edit');
Route::get('/project/delete/{id}' , 'App\Http\controllers\PojectController@delete')->name('project.delete');
// Route::get('login' , 'App\Http\controllers\controller@login');


// ///////////////////////////////////////////////////////////////Displaying Data//////////////////////////////////
// Route::get('r1', function(){
//     return view  ('admin.welcomeAdmin',['name' =>'Mohammed']);

// });
// ////////////////////////////////////////////Named Route/////////////////////////////
// Route::get('userprofile1/{name?}' , function($name = 'Mohammed'){
//     return 'User is the :  ' .$name;
// })->name('login');
// ////////////////////////////////////////////////////optional parameters//////////////////////////////////
// Route::get('user/{name?}' , function($name){
//     return 'User is the :  ' .$name;
// });
// ////////////////////////////////////////////////////Required parematers/////////////////////
// Route::get('user/{id}/collage/{uid}', function($id,$uid){
//     return 'User is :' .$id . ' , Collage: ' . $uid;
// });
// /////////////////////////////////////////////////////////////////////////////////////////////

// Route::view('welcome', 'admin.welcomeAdmin',['age'=>'35' , 'name' =>'Mohammed']);
// ///////////////////////////////////////////////////////////////////////////////////////////Redirect Routes/////
// Route::redirect('google', 'https://www.google.fr/',301);
// Route::redirect('oldLogin', 'login',301);
// ////////////////////////////////////////////////////////////////////////////////////////////////////
// //Route::get('login' , 'App\Http\controllers\controller@login');
// ////////////////////////// Named Route ////////////////////////////////////////
// Route::get('/', function () {
//     return view ('Welcome');
// })->name('home');

// Route::get('aa' , function(){
//     return redirect()->route('home');
// });

// ///////////////////////////////////////////// Route group (prefix) //////////////////////////////
// Route::prefix('admin')->group(function(){
     
//     Route::get('userprofile' , function(){
//         return 'Userprofile';
//     });

//     Route::get('changepassword' , function(){
//         return 'password';
//     });

//     Route::get('layout' , function(){
//         return 'layoutmohammed';
//     });

// });
// ////////////////////////////////////////////////////// middleware auth  ////////////////
   
// Route::middleware('auth')->group(function(){
     
//     Route::get('userprofile' , function(){
//         return 'Userprofile';
//     });

//     Route::get('changepassword' , function(){
//         return 'password';
//     });

//     Route::get('layout' , function(){
//         return 'layoutmohammed';
//     });

// });

// ////////////////////////////////////////////////////Rate Limiting////////////////////////////////////
// Route::middleware('throttle:5,3')->group(function(){
//     Route::get('layout' , function(){
//         return 'layout123456';
//     });

// }) ;