@extends('layouts.frame')

@section('title', 'Laravel')

@section('content')
  <div class="v-welcome">
    <div class="title m-b-md">
      Laravel
    </div>
    <p>{{ $now->format('Y年m月d日 H時i分s秒') }}</p>
    <form>
    <div>
      <label>
        <input type="radio" name="radio" value="1" required>
        <span>はい</span>
      </label>
      <label>
        <input type="radio" name="radio" value="0" required>
        <span>いいえ</span>
      </label>
    </div>
    <div>
      <label class="c-radio-label">
        <input type="radio" name="radio1" value="1" checked required>
        <span>はい</span>
      </label>
      <label class="c-radio-label">
        <input type="radio" name="radio1" value="0" required>
        <span>いいえ</span>
      </label>
    </div>
    <div>
      <label class="c-radio-label">
        <input type="radio" name="radio2" value="1" required>
        <p>はい</p>
      </label>
      <label class="c-radio-label">
        <input type="radio" name="radio2" value="0" checked required>
        <p>いいえ</p>
      </label>
    </div>
    <div>
      <label class="c-radio-label">
        <input type="radio" name="radio3" value="1" required>
        はい
      </label>
      <label class="c-radio-label">
        <input type="radio" name="radio3" value="0" checked required>
        いいえ
      </label>
    </div>
    <div>
      <label class="c-radio-label">
        <input type="radio" name="radio4" value="1" required>
      </label>
      <label class="c-radio-label">
        <input type="radio" name="radio4" value="0" required>
      </label>
    </div>
    <div>
      <label>
        <input type="checkbox" name="check" value="1" required>
        <span>はい</span>
      </label>
    </div>
    <div>
      <label class="c-checkbox-label">
        <input type="checkbox" name="check1" value="1" required>
        <span>はい</span>
      </label>
    </div>
    <div>
      <label class="c-checkbox-label">
        <input type="checkbox" name="check2" value="1" required>
        <span>はい</span>
      </label>
    </div>
    <div>
      <label class="c-checkbox-label">
        <input type="checkbox" name="check3" value="1" required>
        <span>はい</span>
      </label>
    </div>
    <div>
      <label class="c-checkbox-label">
        <input type="checkbox" name="check4" value="1" required>
        <span>はい</span>
      </label>
    </div>
    <button>hoge</button>
  </fomr>
    <div class="links">
      <a href="https://laravel.com/docs">Documentation</a>
      <a href="https://laracasts.com">Laracasts</a>
      <a href="https://laravel-news.com">News</a>
      <a href="https://forge.laravel.com">Forge</a>
      <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
  </div>
@endsection
