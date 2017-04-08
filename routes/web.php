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

Route::get('/', function () { return view('welcome'); });

Route::get('/post', function(){ return view('post'); });

Route::get('/news', function(){ return view('news'); });

Route::get('/mypage', function() { return view('mypage'); });

Route::get('/main', function(){ return view('main'); });

Route::get('/signup', 'RegistrationController@create');
Route::get('/login', 'SessionController@create');

Route::post('/signup', 'RegistrationController@store');
