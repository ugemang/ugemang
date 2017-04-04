@extends ('layouts.master')

@section('content')
<div class="content">

  <div class="board title">
    <span class="subject">간뉴:간추린 뉴스</span>
    <span class="total">총 <label style="color:red">193개</label>의 뉴스가 있습니다.</span>
  </div>

  <div class="newsArea">
    <div class="news">
      <div class="poster">
        <img src="/images/titanfall.png" class="posterImg" alt="">
      </div>
      <div class="article">
        <div class="subject">
          타이탄폴2
        </div>
        <div class="info">
          <span>장르:FPS</span><span>출시일:2016.10</span>
        </div>
        <div class="summary">
          넥슨의 타이탄폴 프론트라인, 1월20일 서비스 종료. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세 무궁화 삼천리
          화려강산 대한사람 대한으로 길이보전하세. 남산위에 저소나무 철갑을 두른듯 바람서리 불변함은 우리기상일세. 무궁화 삼천리 화려강산
          대한사람 대한으로 길이보전하세. 가을하늘 공활한데 높고 구름없이 맑은달은 우리가슴 일편단심일세. 무궁화 삼천리 화려강산 대한사람
          대한으로 길이보전하세. 이기상과 이마음으로 충성을 다하여 외로우나 즐거우나 나라사랑하세. 무궁화 삼천리 화려강산 대한사람 대한으로
          길이보전하세.
        </div>
      </div>
    </div>
    <div class="news">
      <div class="poster">
        <img src="/images/titanfall.png" class="posterImg" alt="">
      </div>
      <div class="article">
        <div class="subject">
          타이탄폴2
        </div>
        <div class="info">
          <span>장르:FPS</span><span>출시일:2016.10</span>
        </div>
        <div class="summary">
          넥슨의 타이탄폴 프론트라인, 1월20일 서비스 종료. 동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세 무궁화 삼천리
          화려강산 대한사람 대한으로 길이보전하세. 남산위에 저소나무 철갑을 두른듯 바람서리 불변함은 우리기상일세. 무궁화 삼천리 화려강산
          대한사람 대한으로 길이보전하세. 가을하늘 공활한데 높고 구름없이 맑은달은 우리가슴 일편단심일세. 무궁화 삼천리 화려강산 대한사람
          대한으로 길이보전하세. 이기상과 이마음으로 충성을 다하여 외로우나 즐거우나 나라사랑하세. 무궁화 삼천리 화려강산 대한사람 대한으로
          길이보전하세.
        </div>
      </div>
    </div>

  </div>
  @include ('layouts.paging')
</div>
@endsection
