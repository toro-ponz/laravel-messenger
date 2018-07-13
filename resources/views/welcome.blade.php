@extends('layouts.frame')

@section('title', 'Laravel')

@section('style')
  <style>
    .title {
      font-size: 84px;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
@endsection

@section('content')
  <div>
    <div class="title m-b-md">
      Laravel
    </div>
    <p>{{ $now->format('Y年m月d日 H時i分s秒') }}</p>
    <div class="links">
      <a href="https://laravel.com/docs">Documentation</a>
      <a href="https://laracasts.com">Laracasts</a>
      <a href="https://laravel-news.com">News</a>
      <a href="https://forge.laravel.com">Forge</a>
      <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
  </div>
@endsection
