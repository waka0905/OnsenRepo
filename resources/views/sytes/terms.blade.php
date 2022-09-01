<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>絞り込み結果</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
        <link rel="stylesheet" href="{{asset('css/terms.css') }}">
        @include('sytes.header')
    </head>
    <body>
         <main>
        <div class="sytes">
            @foreach ($sytes as $syte)
                <div class="syte">
                    <h2 class="name">
                <a href="/sytes/{{$syte->id}}">{{ $syte->name }}</h2>
                 <img class="img" src="{{asset($syte->img1)}}">
                </div>
            @endforeach
        </div>
        <div class="footer">
          
        </div>
        </main>
    </body>
</html>