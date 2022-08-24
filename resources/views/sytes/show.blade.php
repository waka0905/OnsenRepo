<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $syte->name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/show.css') }}">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
    </head>
    <body class="body">
        <h1 class="name">
            {{ $syte->name }}
        </h1>
        <h2><a href="{{ $syte->url }}">公式サイト</a></h2>
        <div class="img">
            <img class="img1" src="{{asset($syte->img1)}}">
            <img class="img2" src="{{asset($syte->img2)}}">
        </div>
        <div>
            <li>住所:{{ $syte->prefecture }}{{ $syte->address }}</li>
            <li>最寄駅:{{ $syte->nearest }}</li>
            <li>入浴料:{{ $syte->price }}</li>
            <li>営業時間:{{ $syte->time }}</li>
            <li>休館日:{{ $syte->close }}</li>
            <li>送迎バス:{{ $syte->bus }}</li>
        </div>
        <div class="footer">
            <a href="/">ホームに戻る</a>
        </div>
    </body>
</html>