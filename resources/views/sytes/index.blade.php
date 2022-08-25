<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>️温泉検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/index.css') }}">
         <link rel="icon" href="{{asset('img/favicon.ico')}}" >
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    </head>
    <body class="body"> 
                 <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{asset('img/background1.jpg')}}" style="width:100%;height:100%;">
            </div>
            <div class="swiper-slide">
              <img src="{{asset('img/background2.jpg')}}">
            </div>
            <div class="swiper-slide">
              <img src="{{asset('img/background3.jpg')}}">
            </div>
          </div>
        </div>
        
        <div class="infomation">
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
                    <a href='/sytes/rank'>関東温泉レビューランキング３０選</a>
                    <img class="area_img"src="{{asset('img/関東.png')}}" >
                </div>
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
       <script>
              var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                fadeEffect: {
                  crossFade: true
                },
                autoplay: {
                  delay: 3000
                },
                speed: 2000,
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev"
                },
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true
                }
              });
        </script>
    </body>
</html>