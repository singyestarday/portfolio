<?php

use Illuminate\Support\Facades\Route;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

Route::get('/', function () {
    $books = Book::all();
    return view('books', ['books' => $books]);
})->middleware('auth');
*/


Route::get('testhtml', function(){
    return '<html><body><h1>Hellow</h1><p>this is smaple page.</p></body></html>'; 
});

//ヒア文--------------------------------------------------
$html = <<<EOF
<html>
<head>
<title>Hellow!</title>
<style>
body {font-size:16pt; color:#999;}
</style>
</head>

<body>
    <h1>Hellow</h1>
    <p>This is samole page.</p>
    <p>これは、サンプルで作ったページです</p>
</body>
</html>
EOF;

Route::get('testhere', function() use ($html) {
    return $html;
});

//パラメータ------------------------------------------------
//Route::get('testparametar/{msg}', function($msg){
Route::get('testparametar/{msg?}', function($msg='no parametar'){
    $html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:40pt 0pt -50pt opt;}
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これは、サンプルページだよ</p>
</body>
</html>
EOF;
    return $html;
});
//---------------------------------------------------------


//コントローラーMVC-----------------------------------------
Route::get('testController/{id?}/{pass?}', 'helloController@index');
//---------------------------------------------------------

//アクション------------------------------------------------
Route::get('testAction', 'helloController@other');
//---------------------------------------------------------

//リクエスト------------------------------------------------
Route::get('testRequest', 'helloController@request');
//---------------------------------------------------------

//PHPテンプレート-------------------------------------------
Route::get('testPHPTemplate', function() {
    return view('hello.index');
});

//コントローラを使用した呼び出し
Route::get('testPHPTemplateController/{id?}', 'helloController@phpTemplate');
Route::get('testQuery', 'helloController@Query');
//---------------------------------------------------------

//Bladeテンプレート-----------------------------------------
Route::get('testBlade', 'helloController@bladeIndex');
Route::post('testBlade', 'helloController@post');

//Blade×ディレクティブ
Route::get('testYield', 'helloController@yield');

//Middlewareテスト
Route::get('testMiddleware', 'helloController@middle')
    ->middleware(HelloMiddleware::class);

//SQLiteテスト
Route::get('testSQLite', 'productController@database');

//**************************************************************** */
//ポートフォーリオ用
Route::get('/', 'productController@productMenu')->middleware('auth');
Route::get('product/{num}', 'productController@productMain')->middleware('auth');
Route::get('product', 'productController@productData')->middleware('auth');

Route::post('testSQLite', 'productController@create');

//**************************************************************** */
//↓↓ Udemy のサンプル
Route::post('/book', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $book = new Book;
    $book->title = $request->name;
    $book->save();

    return redirect('/');
});

Route::delete('/book/{book}', function(Book $book){
    $book->delete();

    return redirect('/');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
