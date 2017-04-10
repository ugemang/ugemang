<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class SessionController extends Controller
{
    //
    public function __construct(){
      $this->middleware('guest',['except' => 'destory']);
    }

    public function create(){
      return view('sessions.create');
    }

    public function test(){
      return redirect('/main');
    }

    public function destroy(){
dd("logout");

      auth()->logout();
      return redirect('/');
    }

    public function store(){

      $u = User::where('user_login', request('user_login'))->first();

      if (Hash::check(request('user_pass'), $u->user_pass))
      {
        Auth::login($u);

        if(!auth()->attempt([
          'user_login' => request('user_login'),
          'user_pass' => request('user_pass')
          ])){
          return back()->withErrors([
            'message' => 'Please check your blah blah'
          ]);
        }
      }
      
      return redirect('/');
    }
}
