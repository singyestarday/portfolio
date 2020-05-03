<html>
<head>
    <title>@yield('title')</title>
    
    <!-- 自作CSS -->
    <link rel="stylesheet" href="{{ asset('css/productbase.css') }}">
    <!-- Bootstrap用 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min/.css">

</head>
<body>
    <div class="sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4";>
                    <h1>
                    <a href="/" style="text-decoration:none; color:white;">Portfolio</a>
                    </h1>
                </div>
                <div class="col-sm-2";>
                    <div class="menufont">
                        <a href="#" style="text-decoration:none; color:white;">
                            
                        </a>
                    </div>
                </div>
                <div class="col-sm-2";><div class="menufont"></div></div>
                <div class="col-sm-2";><div class="menufont"></div></div>
                <div class="col-sm-2";><div class="menufont"></div></div>
            </div>
        </div>
    </div>

    <!-- タイトル表示 -->
    <div class="title">
        @yield('title-tile')
    </div>

    <!-- 画像スライド -->
    @yield('slideshow')

    <!-- カード -->
    @yield('cardcontents')

    <hr size=1>

    <div class="content">
    @yield('maincontents')
    </div>

    <div class="footer">
    Copyright 2020 kosuke oshima...
    </div>

    <!-- jQuery APopper.js ABootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>