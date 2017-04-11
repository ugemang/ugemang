<?php

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

Route::get('/', function(){ return view('main'); });

Route::get('/post', function(){ return view('post'); });

Route::get('/news', function(){ return view('news'); });

Route::get('/mypage', function() { return view('mypage'); });

Route::get('/signup', 'RegistrationController@create');
Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionController@create']);
Route::post('/login', [ 'as' => 'login', 'uses' => 'SessionController@store']);

Route::get('/logout', function(){
  auth()->logout();
  return redirect('/');
});
//Route::get('/logout', [ 'as' => 'destroySession', 'uses' => 'SessionController@destroy']);

Route::post('/signup', 'RegistrationController@store');
