@extends('layouts.main')
@section('container')


  <h1>{{ $post->title }}</h1>

  <p>By. Me in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

  {!! $post->body !!}

<a href="/blog">back to posts</a>

@endsection