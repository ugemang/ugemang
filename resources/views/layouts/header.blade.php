<div class="header">
  <div class="header-top">
    <span class="header-title">
     <a href="/">UGEMANG</a>
    </span>
    <span class="header-subtitle">
      @if (!Auth::check())
        <span><input type="text" style="width:100px;" name="" value=""></span>
        <span><input type="text" style="width:100px;" name="" value=""></span>
        <span class="link" id="login">로그인 | </span>
        <script type="text/javascript">
          $("#login").click(function(){
            alert("dd");
          });
        </script>
        <span class="link"><a href="/signup">회원가입</a> | </span>
        <span class="link"><a href="/find">아이디/비밀번호 찾기</a></span>
      @endif
      @if (Auth::check())
        마이페이지
        @if($icon != null)
        <img src="/images/ico/{{Auth::user()->level}}.gif"/>
        <a href="/logout">{{Auth::user()->user_nickname}}</a>
        @endif
      @endif
    </span>
    <div class="header-util">
      <div class="header-search">
        <input type="text" class="search-text" name="" value=""/>
        <button class="search-btn">
      	   <img src="/images/search_button.png" alt="">
      	</button>
      </div>
    </div>
  </div>
  <div class="header-menu">
    <div class="header-menu-tabs">
      <ul>
        <li>Curation</li>
        <li>|</li>
        <li>간뉴</li>
        <li>|</li>
        <li>리뷰</li>
        <li>|</li>
        <li>게시판</li>
        <li>|</li>
        <li>이벤트</li>
      </ul>
      <button class="facebook-btn" style="">f
      </button>
    </div>
  </div>
</div>
