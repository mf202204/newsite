<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>newsite</title>
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <h1>お問い合わせ</h1>
    </div>
    <div class="content_wrapper">
      <div class="content2">

        <form action="/enqsend" method="post">
          @csrf

          @if(count($errors) > 0)
          <p><span style="color:red; font-weight:bold;">※エラー部分を修正してね！</span></p>
          @endif

          <p>タイトル</p>
          <input type="text" name="title" class="formtitle" value="{{old('title')}}">
          @error('title')
          <p class="perror"><span style="color:red;">{{$message}}</span></p>
          @enderror

          <p>&nbsp;</p>
          <p>本文</p>
          <textarea name="main" cols="40" rows="10">{{old('main')}}</textarea>
          @error('main')
          <p class="perror"><span style="color:red;">{{$message}}</span></p>
          @enderror

          <p>&nbsp;</p>
          <p>メールアドレス</p>
          <input type="text" name="email" class="formtitle" value="{{old('email')}}">
          @error('email')
          <p class="perror"><span style="color:red;">{{$message}}</span></p>
          @enderror

          <p>&nbsp;</p>
          <p>電話番号</p>
          <input type="text" name="phone" class="formtitle" value="{{old('phone')}}">
          @error('phone')
          <p class="perror"><span style="color:red;">{{$message}}</span></p>
          @enderror

          <p>&nbsp;</p>
          <input type="submit" class="submitbtn">
        </form>
      </div>
    </div>
  </div>
</body>

</html>
