<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $syte->name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
    </head>
    <body>
        <h1 class="name">
            {{ $syte->name }}
        </h1>
        <h2><a href="{{ $syte->url }}">公式サイト</a></h2>
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