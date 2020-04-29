
<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee; margin:40pt 0pt -50pt opt;}
    </style>
</head>
<body>
    <h1>Index</h1>
    <!--通常のHTML-->
    <p>This is a sample page with php-template.</p>
    <p></p>
    <p></p>
    <!--引数の取得-->
    <p><?php echo $msg; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>
    <p></p>
    <p></p>
    <!--ルートパラメータ-->
    <p><?php echo $msg; ?></p>
    <p>ID=<?php echo $id; ?></p>
</body>
</html>