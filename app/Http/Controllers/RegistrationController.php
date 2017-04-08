<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class RegistrationController extends Controller
{
    //
    public function create(){
      return view('sessions.create');
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

      if(request('pwd1') != request('pwd2')){
        dd('password incorrect');
      }

      $this -> validate(request(),
        [
          'name' => 'required',
          'email' => 'required|email',
          'pwd1' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%@]).*$/|confirmed',
          'pwd2' => 'required|min:8|confirmed'
        ]
      );

      $user = User::create(request(['name', 'email', 'password']));

      auth()->login($user);

      return redirect()->home();
    }
}
