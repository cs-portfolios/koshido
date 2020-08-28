<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOOKOUTPUT</title>

        <!-- Fonts -->
        
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
        <div class="bg-image">
            <img src="{{ asset('images/jaredd-craig-HH4WBGNyltc-unsplash (2).jpg') }}" alt="logo">
        </div>
        <div class="flex-center position-ref full-height">
            <h1>BOOK  OUTPUT  !</h1>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    
                          <!-- <a href="{{ url('/hone') }}">一覧ページへ</a>   -->
                          <!-- <a href="{{ url('/hone') }}" >一覧ページへ</a> -->
                          <a href="{{ url('/hone') }}" class="btn btn-radius-solid btn--shadow">一覧ページへ<i class="fas fa-angle-right fa-position-right"></i></a>
                          
                    @else
                    <div class="container">
                    <a href="{{ route('login') }}" class="btn btn-radius-solid btn--shadow">
                    ログイン
                    <i class="fas fa-angle-right fa-position-right"></i>
                    </a>
                    
                        <!-- <a href="{{ route('login') }}">ログイン</a> -->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-radius-solid btn--shadow">新規登録<i class="fas fa-angle-right fa-position-right"></i></a>
                            </div>
                        @endif
                    @endauth
                </div>
            @endif

            
                
                    
            </div>
        </div>
    </body>
</html>
