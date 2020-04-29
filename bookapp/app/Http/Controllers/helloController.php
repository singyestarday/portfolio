<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

//デファイン定義
global $head, $style, $body, $end;

$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:40pt 0pt -50pt opt;}
</style>
</head>
EOF;
$body = '<head></body>';
$end = '</body></html>';

// タグ閉じのための関数
function tag($tag, $txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class helloController extends Controller
{
    //アクション
    public function index($id='no name', $pass='no pass') {
        return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:40pt 0pt -50pt opt;}
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これは、Helloコントローラのindexアクションだよ</p>
    <li>ID : {$id}</li>
    <li>PASS : {$pass}</li>
</body>
</html>
EOF;

    }

    //Other の ビュー
    public function other() {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/other') . $style . 
            $body
            . tag('h1', 'Other') . tag('p', 'This is Other page')
            . $end;
        return $html;
    }

    //RequestとResponse
    public function request(Request $request, Response $response) {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Request & Response') . $style . 
            $body
            . tag('h1', 'Hello') 
            . tag('h3', 'Request')
            . tag('pre', $request)
            . tag('h3', 'Response')
            . tag('pre', $response)
            . $end;

        $response->setContent($html);
        return $response;
    }

    //PHP テンプレート表示
    public function phpTemplate($id='zero')
    {
        //引数渡し
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです。',
            'id'=>$id
        ];
        return view('hello.index', $data);
    }

    //PHP テンプレート ＋ クエリ文字列
    public function Query(Request $request)
    {
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです',
            'id'=>$request->id
        ];
        return view('hello.index', $data);
    }

    //Blade テンプレート
    public function bladeIndex()
    {
        $data = [
            'msg' => 'これはBladeを利用したサンプルです。',
        ];

        return view('hello.index', $data);
    }

    //POST アクションの受け取り
    public function post(Request $request)
    {
        $msg = $request->msg;

        $data = [
            'msg'=>'こんにちわ'. $msg . 'さん',
        ];

        return view('hello.index', $data);
    }
    
    //Bladeテンプレートの使用
    public function yield()
    {
        //配列を渡す
        $data = [
            ['name'=>'古川未鈴', 'account'=>'Furukawa'],
            ['name'=>'相沢梨紗', 'account'=>'Aizawa'],
            ['name'=>'成瀬瑛美', 'account'=>'Naruse'],
            ['name'=>'藤咲彩音', 'account'=>'Pinky_neko'],
            ['name'=>'鹿目凛', 'account'=>'peropero'],
            ['name'=>'根本凪', 'account'=>'nemoto'],
        ];

        return view('hello.baselayout', ['data'=>$data]);
    }

    //Middleware使用
    public function middle(Request $request)
    {
        return view('hello.baselayout', ['data'=>$request->data]);
    }

    public function sqlite()
    {
        return view();
    }
}
