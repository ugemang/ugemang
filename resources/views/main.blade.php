@extends ('layouts.master')

@section('content')
  <div class="main-content">
    <div class="main-first-row">
        <div class="image-area">

        </div>
        <div class="login-area">
            <div class="login-input-area">
                <span class="login-title">LOGIN</span>
                <input type="text" class="login-id" name="" value="" placeholder="아이디">
                <input type="password" class="login-pwd" name="" value="" placeholder="비밀번호">
                <button type="button" class="login-btn" name="button">로그인</button>
                <button type="button" class="signup-btn" name="button">회원가입</button>
            </div>
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
        </div>
    </div>
    <div class="main-third-row">
        <div class="title-wrap">
            <span class="news-title">Curation</span>
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
                <span class="news-title">NEW POST</span>
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
                </ul>
                <ul class="new-post-list">
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                </ul>
                <ul class="new-post-list">
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                </ul>
                <ul class="new-post-list">
                    <li>
                        <div class="cont-info">
                            <div class="no">5</div>
                            <div class="tit">용감하고 굳세게</div>
                            <div class="regdate">2017-01-01</div>
                            <div class="clicknum">119</div>
                        </div>
                    </li>
                </ul>
                <ul class="new-post-list">
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
                <span class="news-title">HOT POST</span>
                <button class="view-more">
                </button>
            </div>
        </div>
    </div>
    <div class="main-fifth-row">
        <div class="title-wrap">
            <span class="news-title">SNS UPDATE</span>
            <button class="view-more">
            </button>
        </div>
    </div>
  </div>
@endsection
