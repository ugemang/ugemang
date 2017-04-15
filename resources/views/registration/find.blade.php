@extends ('layouts.master')

@section ('content')
<div class="content">
  <div class="board title">
    <span class="subject">아이디/비밀번호 찾기</span>
  </div>

  <form class="" action="/find" method="post">
    {{ csrf_field() }}

    <div class="login_info">
      <div class="login_id">
        <div class="id_lavel">
          이메일
        </div>
        <div class="id_input">
          <input type="text" name="user_email"></input>
        </div>
      </div>
      <div class="login_button">
        <div class="button_input">
          <input type="submit" name="login_find" value="패스워드찾기"/>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
