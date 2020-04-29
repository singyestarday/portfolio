<html>
<head>
    <title>Portfolio Menu</title>
    <style>
    dai { font-size:16pt; color:#999; margin: 5px; }
    menu { font-size:50px; text-align:right; color:#f6f6f6;
        margin:-20px 0px -30px 0px; letter-spacing:-4px; }
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle { font-size:14px; font-weight:bold; margin: 0px; }
    .content { margin:10px; }
    .footer { text-align:right; font-size:10px; margin:10px; 
        border-bottom:solid 1px #ccc; color:#ccc; }
    </style>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap用 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min/.css">
</head>
<body>
    <menu>Portfolio</menu>
    
    @if (Auth::check())
        <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
    @else
        <p>※ログインしていません(<a href="/login">ログイン</a>|
            <a href="/register">登録</a>)</p>
    @endif

    <dai>Product一覧</dai>

    <div class="card-columns">
        @foreach($items as $item)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=/storage/product/{{$item->img1}} alt="コメント">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{{$item->overview}}</p>
                <a href="/product?product={{$item->name}}" class="btn btn-primary">詳細ページ</a>
            </div>
        </div>
        @endforeach
    </div>
        
    <div class="footer">
    Copyright 2020 kosuke oshima...
    </div>
</body>
</html>