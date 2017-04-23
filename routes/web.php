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

Route::get('/post', function(){
  /*
    databinding
    1. return view ('post',[
        'name' => 'park',
        'age' => '21'
      ]);
    2. return view ('post')->with('name','park');
    3. $name = 'part' return view ('post',['name'=> $name])
    4. $name = 'part' return view ('post',compact('name'));
  */
  return view('post');
});

Route::get('/news', function(){ return view('news'); });

Route::get('/mypage', function() { return view('mypage'); });

Route::get('/find', function(){ return view('registration.find'); });
Route::post('/find', 'RegistrationController@find');
Route::get('/signup', 'RegistrationController@create');
//Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionController@create']);
Route::post('/login', [ 'as' => 'login', 'uses' => 'SessionController@store']);

Route::get('/logout', function(){
  auth()->logout();
  return redirect('/');
});
//Route::get('/logout', [ 'as' => 'destroySession', 'uses' => 'SessionController@destroy']);

Route::post('/signup', 'RegistrationController@store');

Route::get('/verifyemail/{token}', 'RegistrationController@verify');


Route::get('/test', function(){
  $data = DB::table('articles')->get();

  return $data;
});

Route::get('/test/{b}', function($a){

  $data = DB::table('articles')->find($a);

  dd($data);
  return view('post',compact($data));
});

// Route::get('/curation', function() {
//   $posts = DB::table('posts')->get();
//   dd($posts);
//   return view('/curation'); });

Route::get('/mingi', function(){ return view('test'); });

Route::get('/curation', 'PostController@index');
Route::get('/tt', function(){

  $img = Image::make('images/facebook_lg_btn.png')->resize(145, 35);

  return $img->response('png');

});

Route::get('/{any}', function($any){
    return redirect('/');
})->where('any', '.*');
