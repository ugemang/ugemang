<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
use App\Jobs\SendFindAccountEmail;
use App\User;

use Hash;
use Auth;

class RegistrationController extends Controller
{
    //
    public function create(){
      if(Auth::check()){
        return redirect('/');
      }else
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
        'user_email' => request('user_email'),
        'email_token' => base64_encode(request('user_email'))
      ]);

      dispatch(new SendVerificationEmail($user));

      //auth()->login($user);
      \Session::flash('flash_message','인증메일이 발송되었습니다. 메일함을 확인해주세요.');
      return redirect('/');
    }

    public function verify($token)
    {
      $user = User::where('email_token',$token)->first();
      $user->verified = 1;
      if($user->save()){
        \Session::flash('flash_message','인증메일이 발송되었습니다. 메일함을 확인해주세요.');
        //Auth::login($user);
        return redirect('/');
      }
    }

    public function find(){
      $user = User::where('user_email',request('user_email'))->first();
      dispatch(new SendFindAccountEmail($user));
      \Session::flash('flash_message','아이디, 비밀번호정보가 발송되었습니다. 메일함을 확인해주세요.');
      return redirect('/');
    }
}
