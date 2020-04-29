<html>
<head>
    <title>Hello/Index</title>
    <style>
        body { font-size:16pt; color:#999; }
        h1 { font-size:50pt; text-align:right; color:#f6f6f6;
             margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
    </style>
</head>
    <body>
        <h1>Blade/Index</h1>

        <!--変数の使い方と条件分岐 -->
        @if (strlen($msg) > 10)
        <p>{{$msg}}</p>
        @else
        <p>こらー</p>
        @endif

        <!--フォームの入力-->
        <form method="POST" action="/testBlade">
        <!--WEB攻撃対策-->
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>