@extends ('layouts.master')

@section('content')
  <div class="main-content">
    <div class="main-first-row">
        <div class="image-area">

        </div>
        <div class="login-area">

          @if (Auth::check())
            <div class="login-user-area">
              <div class="user-profile">
                <div class="user-icon">
                  @if($icon != null)
                    <img src="/images/ico/{{$icon[0]->icon_src}}"/>
                  @endif
                </div>
              </div>
              <span class="user-name">{{Auth::user()->user_nickname}}</span>
              <span class="user-name"><img src="/images/ico/{{Auth::user()->level}}.gif" alt=""></span>
          @endif
          @if (!Auth::check())
          <form class="" action="/login" method="post">
            {{ csrf_field() }}
            <div class="login-input-area">
                <span class="login-title">LOGIN</span>
                <input type="text" class="login-id" name="user_login" value="" placeholder="아이디">
                <input type="password" class="login-pwd" name="user_pass" value="" placeholder="비밀번호">
                <button type="submit" class="login-btn" name="button">로그인</button>
                <a href="/signup"><button type="button" class="signup-btn" name="button">회원가입</button></a>
            </div>
          </form>
          @endif
        </div>
    </div>
    <div class="main-second-row">
        <div class="title-wrap">
            <span class="news-title">News Feed</span>
            <button class="view-more">
            </button>
        </div>
        <div class="content-wrap">
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                    <div class="summary">남는 것은 영락과 부패뿐이다! 낙원을 남는 것은 영락과 부패뿐이다! 낙원을</div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                    <div class="summary">남는 것은 영락과 부패뿐이다! 낙원을 남는 것은 영락과 부패뿐이다! 낙원을</div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게 용감하고 굳세게</div>
                    <div class="summary">남는 것은 영락과 부패뿐이다! 낙원을 남는 것은 영락과 부패뿐이다! 낙원을</div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                    <div class="summary">남는 것은 영락과 부패뿐이다! 낙원을 남는 것은 영락과 부패뿐이다! 낙원을</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-third-row">
        <div class="title-wrap">
            <span class="curation-title">Curation</span>
            <button class="view-more">
            </button>
        </div>
        <div class="content-wrap">
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                </div>
            </div>
            <div class="tab">
                <div class="tab-picture">
                    <img src="/images/news_ex.png" alt="">
                </div>
                <div class="tab-text">
                    <div class="title">용감하고 굳세게</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-fourth-row">
        <div class="new-post">
            <div class="title-wrap">
                <span class="new-title">NEW POST</span>
                <button class="view-more">
                </button>
            </div>
            <div class="new-post-wrap">
                <div class="new-post-top">
                    <div class="sb01">NO</div>
                    <div class="sb02">제목</div>
                    <div class="sb03">등록일</div>
                    <div class="sb04">조회수</div>
                </div>
                <ul class="new-post-list">
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hot-post">
            <div class="title-wrap">
                <span class="hot-title">HOT POST</span>
                <button class="view-more">
                </button>
            </div>
            <div class="hot-post-wrap">
                <div class="hot-post-top">
                    <div class="sb01">NO</div>
                    <div class="sb02">제목</div>
                    <div class="sb03">등록일</div>
                    <div class="sb04">조회수</div>
                </div>
                <ul class="hot-post-list">
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-fifth-row">
        <div class="title-wrap">
            <span class="sns-title">SNS UPDATE</span>
            <button class="view-more">
            </button>
        </div>
        <div class="sns-content-wrap">
          <div class="sns-content">
            <div class="sns-image">
              <img src="/images/news_ex.png" alt="">
              <div></div>
            </div>
            <div class="sns-info">
              <div class="info-title">
                용감하고 굳세게
              </div>
              <div class="info-summary">
                <span>#온라인게임</span><span>#용감하고</span>굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!
              </div>
              <div class="info-like">
                <span class="like-txt">좋아요  58</span>
                <span class="like-btn"></span>
              </div>
            </div>
          </div>
          <div class="sns-content">
            <div class="sns-image">
              <img src="/images/news_ex.png" alt="">
              <div></div>
            </div>
            <div class="sns-info">
              <div class="info-title">
                용감하고 굳세게
              </div>
              <div class="info-summary">
                <span>#온라인게임</span><span>#용감하고</span>굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!
              </div>
              <div class="info-like">
                <span class="like-txt">좋아요  58</span>
                <span class="like-btn"></span>
              </div>
            </div>
          </div>
          <div class="sns-content">
            <div class="sns-image">
              <img src="/images/news_ex.png" alt="">
              <div></div>
            </div>
            <div class="sns-info">
              <div class="info-title">
                용감하고 굳세게
              </div>
              <div class="info-summary">
                <span>#온라인게임</span><span>#용감하고</span>굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!
              </div>
              <div class="info-like">
                <span class="like-txt">좋아요  58</span>
                <span class="like-btn"></span>
              </div>
            </div>
          </div>
          <div class="sns-content">
            <div class="sns-image">
              <img src="/images/news_ex.png" alt="">
              <div></div>
            </div>
            <div class="sns-info">
              <div class="info-title">
                용감하고 굳세게
              </div>
              <div class="info-summary">
                <span>#온라인게임</span><span>#용감하고</span>굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!
              </div>
              <div class="info-like">
                <span class="like-txt">좋아요  58</span>
                <span class="like-btn"></span>
              </div>
            </div>
          </div>
          <div class="sns-content">
            <div class="sns-image">
              <img src="/images/news_ex.png" alt="">
              <div></div>
            </div>
            <div class="sns-info">
              <div class="info-title">
                용감하고 굳세게
              </div>
              <div class="info-summary">
                <span>#온라인게임</span><span>#용감하고</span>굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!
              </div>
              <div class="info-like">
                <span class="like-txt">좋아요  58</span>
                <span class="like-btn"></span>
              </div>
            </div>
          </div>
          <div class="sns-content">
            <div class="sns-image">
              <img src="/images/news_ex.png" alt="">
              <div></div>
            </div>
            <div class="sns-info">
              <div class="info-title">
                용감하고 굳세게
              </div>
              <div class="info-summary">
                <span>#온라인게임</span><span>#용감하고</span>굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게굳세게!
              </div>
              <div class="info-like">
                <span class="like-txt">좋아요  58</span>
                <span class="like-btn"></span>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
