@extends('layouts.master')

@section('content')
  <div class="">
    @foreach ($posts as $post)
      <p>{{$post->title}}</p>
    @endforeach
  </div>
  <div class="">
    <a href="/curation/create">write curation</a>
  </div>
@endsection
