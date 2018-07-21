@extends('layouts.frame')

@section('title', 'お問い合わせ完了')

@section('content')
  <div class="v-contact-complate">
    <h1>お問い合わせありがとうございます。</h1>
    <p>
      <a href="{{ route('contact.index') }}">お問い合わせフォームに戻る</a>
    </p>
    <p>
      <a href="{{ route('index') }}">トップページに戻る</a>
    </p>
  </div>
@endsection
