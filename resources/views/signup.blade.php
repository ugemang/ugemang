@extends ('layouts.master')

@section('content')
  <div class="join-content">
    <div class="join-txt">
      회원가입
    </div>
    <fieldset>
      <div class="join-input">
        <div class="join-profile br-bt">
          <div class="txt">
            프로필 이미지
          </div>
          <select class="profile-type" name="">
            <option value="">naver</option>
            <option value="">daum</option>
            <option value="">google</option>
            <option value="">apple</option>
          </select>
          <span class="profile-arrow arrow"></span>
        </div>
        <div class="join-email br-bt">
          <div class="txt">
            이메일
          </div>
          <input type="text" class="email-id" name="eamil-id" value="">
          <span>@</span>
          <input type="text" class="email-domain" name="email-domain" value="">
          <select class="email-type" name="">
            <option value="">naver</option>
            <option value="">daum</option>
            <option value="">google</option>
            <option value="">apple</option>
          </select>
          <span class="email-arrow arrow"></span>
          <button type="button" class="email-chk chk-btn" name="button">중복확인</button>
          <span class="duple">중복된 이메일입니다.</span>
        </div>
        <div class="join-name br-bt">
          <div class="txt">
            이름(닉네임)
          </div>
          <input type="text" class="name" name="" value="">
          <button type="button" class="name-chk chk-btn" name="button">중복확인</button>
          <span class="duple">중복된 이름(닉네임)입니다.</span>
        </div>
        <div class="join-pwd br-bt">
          <div class="txt">
            비밀번호
          </div>
          <input type="password" class="pwd" name="" value="" placeholder="영문과 숫자조합 6~12자리">
        </div>
        <div class="join-pwd-chk br-bt">
          <div class="txt">
            비밀번호 확인
          </div>
          <input type="password" class="pwd-chk" name="" value="">
        </div>
        <button type="button" class="confirm-btn" name="button">가입완료</button>
      </div>
    </fieldset>
    <div class="link-btn-wrap">
      <span>
        소셜 계정으로 지금 바로 로그인 하실 수 있습니다.
      </span>
      <div class="btn-group">
      <button type="button" class="facebook-btn" name="button"></button>
      <button type="button" class="twitter-btn" name="button"></button>
      <button type="button" class="naver-btn" name="button"></button>
      </div>
    </div>
  </div>
@endsection
