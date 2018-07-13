@extends('layouts.frame')

@section('title', 'お問い合わせ')

@section('content')
  <div class="v-contact-index">
    <h1>お問い合わせフォーム</h1>
    <div class="form-box">
      {!! Form::open(['url' => route('contact.send'), 'method' => 'post']) !!}
        <h2>名前</h2>
        {!! Form::text('name', null, ['class' => 'form-text', 'required' => 'required', 'placeholder' => '山田 太郎']) !!}
        <h2>メールアドレス</h2>
        {!! Form::email('email', null, ['class' => 'form-email', 'required' => 'required', 'placeholder' => 'example@hoge.jp']) !!}
        <h2>お問い合わせ内容</h2>
        {!! Form::textarea('content', null, ['class' => 'form-textarea', 'required' => 'required', 'placeholder' => 'お問い合わせ内容']) !!}
        <div class="submit-button-box">
          {!! Form::submit('送信する', ['class' => 'form-submit']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
