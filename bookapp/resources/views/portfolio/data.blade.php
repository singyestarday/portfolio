<html>
<head>
    <title>QUPIX</title>
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

    th {background-color:#999; color:#fff; padding:5px 10px;}
    td {border:solid 1px #aaa; color:#999; padding:5px 10px;}
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
    
    <hr size="1">

    <form action="/testSQLite" method="post">
    <table>
        @csrf
        <tr><th>id: </th><td><input type="test" name="id">
            </td></tr>
        <tr><th>name: </th><td><input type="test" name="name">
            </td></tr>
        <tr><th>img1: </th><td><input type="test" name="img1">
            </td></tr>
        <tr><th>img2: </th><td><input type="test" name="img2">
            </td></tr>
        <tr><th>img3: </th><td><input type="test" name="img3">
            </td></tr>
        <tr><th>overview: </th><td><input type="test" name="overview">
            </td></tr>
        <tr><th>OS: </th><td><input type="test" name="OS">
            </td></tr>
        <tr><th>lang: </th><td><input type="test" name="lang">
            </td></tr>
        <tr><th>lib: </th><td><input type="test" name="lib">
            </td></tr>
        <tr><th>env: </th><td><input type="test" name="env">
            </td></tr>
        <tr><th>role: </th><td><input type="test" name="role">
            </td></tr>
        <tr><th></th><td><input type="submit" value="send">
            </td></tr>
    </table>
    </form>

    <table>
    <tr><th>id</th><th>Name</th><th>img1</th><th>img2</th><th>img3</th><th>overview</th>
        <th>lang</th><th>lib</th><th>env</th><th>role</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->img1}}</td>
            <td>{{$item->img2}}</td>
            <td>{{$item->img3}}</td>
            <td>{{$item->overview}}</td>
            <td>{{$item->lang}}</td>
            <td>{{$item->lib}}</td>
            <td>{{$item->env}}</td>
            <td>{{$item->role}}</td>
        </tr>
    @endforeach
    </table>

    <div class="footer">
    Copyright 2020 kosuke oshima...
    </div>
</body>
</html>