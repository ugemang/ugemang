@extends ('layouts.master')

@section ('content')
<div class="content">
  <div class="board title">
    <span class="subject">로그인</span>
  </div>

  <form class="" action="/login" method="post">
    {{ csrf_field() }}

    <div class="login_info">
      <div class="login_id">
        <div class="id_lavel">
          아이디
        </div>
        <div class="id_input">
          <input type="text" name="user_login" ></input>
        </div>
      </div>
      <div class="login_pass">
        <div class="pass_lavel">
          비밀번호
        </div>
        <div class="pass_input">
          <input type="password" name="user_pass" />
        </div>
      </div>
      <div class="login_button">
        <div class="button_input">
          <input type="submit" name="login_submit" value="로그인"/>
          <input type="button" name="login_find" value="패스워드찾기"/>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
