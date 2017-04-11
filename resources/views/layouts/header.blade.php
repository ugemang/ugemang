<div class="header">
  <div class="header-top">
    <span class="header-title">
     <a href="/">UGEMANG</a>
    </span>
    <div class="header-util">
      <div class="header-search">
        <input type="text" class="search-text" name="" value=""/>
        <button class="search-btn">
      	   <img src="/images/search_button.png" alt="">
      	</button>
      </div>
      <div class="header-tabs">
        <ul>
          @if (!Auth::check())
            <li><a href="/login">로그인</a></li>
            <li>|</li>
            <li><a href="/signup">회원가입</a></li>
          @endif
          @if (Auth::check())
            <li>마이페이지</li>
            @if($icon != null)
            <li><img src="/images/ico/{{$icon[0]->icon_src}}"/></li>
            @endif
            <li><a href="/logout">{{Auth::user()->user_nickname}}</a></li>
          @endif
        </ul>
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
