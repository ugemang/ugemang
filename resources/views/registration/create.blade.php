@extends ('layouts.master')

@section('content')
  <div class="join-content">
    <div class="join-txt">
      회원가입
    </div>

    <form action="/signup" method="POST">
      {{ csrf_field() }}

      <fieldset>
        <div class="join-input">
          <div class="join-profile br-bt">
            <div class="txt">
              아이디
            </div>
            <input type="text" class="name" name="user_login" value="">
          </div>
          <div class="join-email br-bt">
            <div class="txt">
              이메일
            </div>
            <input type="text" class="name" name="user_email" value="">
            <button type="button" class="email-chk chk-btn" name="button">중복확인</button>
            <span class="duple">중복된 이메일입니다.</span>
          </div>
          <div class="join-name br-bt">
            <div class="txt">
              이름(닉네임)
            </div>
            <input type="text" class="name" name="user_nickname" value="">
            <button type="button" class="name-chk chk-btn" name="button">중복확인</button>
            <span class="duple">중복된 이름(닉네임)입니다.</span>
          </div>
          <div class="join-pwd br-bt">
            <div class="txt">
              비밀번호
            </div>
            <input type="password" class="pwd" name="user_pass" value="" placeholder="영문과 숫자조합 6~12자리">
          </div>
          <div class="join-pwd-chk br-bt">
            <div class="txt">
              비밀번호 확인
            </div>
            <input type="password" class="pwd-chk" name="user_pass_confirmation" value="">
          </div>
          <div class="join-profile br-bt">
            <div class="txt">
              프로필 아이콘
            </div>
            <div class="iconImg">
              <input type="radio" name="ruriweb" value="ruriweb"/> ruriweb
              <input type="radio" name="kakao" value="kakao"/> kakao
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="kakao" value="kakao"/> kakao
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="kakao" value="kakao"/> kakao
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
              <input type="radio" name="naver" value="naver"/> naver
            </div>
          </div>
          <button type="submit" class="confirm-btn" name="button">가입완료</button>
          <a href="/"><button type="button" class="confirm-btn" name="button">취소</button></a>
        </div>
      </fieldset>

    </form>
  </div>
@endsection
