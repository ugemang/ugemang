<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class RegistrationController extends Controller
{
    //
    public function create(){
      return view('registration.create');
    }

    public function store(){


      // hash check 는 기등록후 비밀번호 체크시 사용
      // password check

      /*

      example

      [1] > $pw = 123456;
      // 123456
      [2] > $hashed = Hash::make($pw);
      // '$2y$10$xSugoyKv765TY8DsERJ2/.mPIOwLNdM5Iw1n3x1XNVymBlHNG4cX6'
      [3] > Hash::check($hashed, $pw);
      // false
      [4] > Hash::check($pw, $hashed);
      // true
      if (Hash::check("1","1")) {
        dd('password correct');
      }else{
        dd(Hash::check(request('pwd1'), request('pwd2')));
      }
      */

      if(request('user_pass') != request('user_pass_confirmation')){

      }

      $this -> validate(request(),
        [
          'user_login' => 'required',
          'user_email' => 'required|email',
          'user_pass' => 'required|min:8|confirmed'
        ]
      );

      $user = User::create([
        'user_login' => request('user_login'),
        'user_pass' => Hash::make(request('user_pass')),
        'user_nickname' => request('user_nickname'),
        'user_email' => request('user_email')
      ]);


      auth()->login($user);

      return redirect('/');
    }
}
