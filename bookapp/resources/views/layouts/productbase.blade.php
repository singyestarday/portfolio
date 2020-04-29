<html>
<head>
    <title>@yield('title')</title>
    <style>
    body { font-size:16pt; color:#999; margin: 5px; }
    h1 { font-size:50px; text-align:right; color:#f6f6f6;
        margin:-20px 0px -30px 0px; letter-spacing:-4px; }
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle { font-size:14px; font-weight:bold; margin: 0px; }
    .content { margin:10px; }
    .footer { text-align:right; font-size:10px; margin:10px; 
        border-bottom:solid 1px #ccc; color:#ccc; }
    </style>

    <!-- JQUERYを使うため 1-->
    <!-- 必要なファイル読込 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!-- JQUERYを使うため 2-->
    <!-- ファンクションの呼出 -->
    <script>
        $(function(){
            $('.bxslider').bxSlider();
        });
    </script>

</head>
<body>
    <h1>Product</h1>
    <p>@yield('title')</p>

    @yield('slider')
    
    <hr size="1">
    
    <div class="content">
    @yield('overview')
    </div>

    <div class="content">
    @yield('dev')
    </div>
    
    <div class="content">
    @yield('role')
    </div>

    <div class="footer">
    Copyright 2020 kosuke oshima...
    </div>
</body>
</html>