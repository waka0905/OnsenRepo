<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>️温泉検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/index.css') }}">
         <link rel="icon" href="{{asset('img/favicon.ico')}}" >
    </head>
    <body class="body">
        <div class="title">
        <h1>日帰り温泉検索サイト♨︎</h1>
        <h2>誰でも簡単温泉検索</h2>    
        </div>
        <div class="jenre">
            <h1>ジャンルから探す</h1>
            <form action="/sytes/result" method="GET">
                @csrf
                サウナ
                <select name="sauna" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">サウナあり</option>
                    <option value="0">サウナなし</option>
                </select>
                岩盤浴
                <select name="ganban" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">岩盤浴あり</option>
                    <option value="0">岩盤浴なし</option>
                </select>
                炭酸泉
                 <select name="tansan" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">炭酸泉あり</option>
                    <option value="0">炭酸泉なし</option>
                </select>
                食事処
                 <select name="restaurant" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">食事処あり</option>
                    <option value="0">食事処なし</option>
                </select>
                <input type="submit" value="検索">
            </form>
        </div>
        <div class="sub">
            <div class="area">
                <img class="area_img"src="{{asset('img/関東.png')}}" >
                <a href='/sytes/area'>エリアから探す</a>
            </div>
            <div class="rank"> 
                <img class="rank_img"src="{{asset('img/ランキング.jpeg')}}">
                <a href='/sytes/rank'>関東温泉ランキング３０選</a>
            </div>
        </div>
    </body>
</html>