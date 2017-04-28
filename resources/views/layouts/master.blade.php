
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ugemang Community</title>

    <!-- Custom styles for this template -->
    <script>
         window.Laravel = <?php echo json_encode([
             'csrfToken' => csrf_token(),
         ]); ?>
       </script>

    <link href="/css/submain.css?ver=1.9" rel="stylesheet">
    <link href="/css/main.css?ver=1.1" rel="stylesheet">
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <!-- include summernote css/js-->
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
  </head>

  <body>

    @if(Session::has('flash_message'))
      <script>alert("{{ Session::get('flash_message') }}")</script>
    @endif

    @include('layouts.header')

    <div class="container">

      @yield('content')

    </div>

    @include('layouts.footer')

  </body>
</html>
