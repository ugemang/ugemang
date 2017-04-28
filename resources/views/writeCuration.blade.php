@extends('layouts.master')

@section('content')
  <h2>create post</h2>
  <form class="" action="/curation" method="post">
      {{ csrf_field() }}

      <div class="">
        <label for="title">title</label>
        <input type="text" value="" id="title" name="title">
      </div>

      <div class="">
        <label for="content">content</label>
        <textarea name="content" id="content" rows="8" cols="80"></textarea>
      </div>
      <div id="summernote"><p>Hello Summernote</p></div>
      <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
      </script>
      <div class="">
        <button type="submit">publish</button>
      </div>
  </form>
@endsection
