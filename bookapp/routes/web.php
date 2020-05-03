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
//**************************************************************** */
//ポートフォーリオ用
Route::get('/', 'productController@productMenu')->middleware('auth');
Route::get('product', 'productController@productData')->middleware('auth');

//SQLiteテスト
Route::get('testSQLite', 'productController@database')->middleware('auth');
Route::post('testSQLite', 'productController@create')->middleware('auth');

//**************************************************************** */
//Auth::routes();
Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');
