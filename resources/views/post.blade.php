@extends ('layouts.master')


@section('content')

<div class="content">

  <div class="board title">게시판</div>

  <div class="post">
    <div class="title"><span class="name">타이탄폴2</span><span class="date">2017.01.01</span></div>
    <div class="subinfo"><span class="info">장르:fps</span><span class="info">출시일:2017.01.01</span></div>
    <div class="body">body</div>
    <div class="files">첨부파일 : </div>
    <div class="previousArticle"><img src="/images/Arrow_left.png" alt="이전글"><span class="articleLink">이전글 : 리니지2</span></div>
    <div class="nextArticle"><img src="/images/Arrow_right.png" alt="다음글"><span class="articleLink">다음글 : 리니지 이터널</span></div>

  </div>

  <div class="reply"></div>

</div>
@endsection
