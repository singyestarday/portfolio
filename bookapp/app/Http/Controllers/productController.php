<?php

namespace App\Http\Controllers;

//アクション関係
use Illuminate\Http\Request;
use Illuminate\Http\Response;

//データベース
use Illuminate\Support\Facades\DB;

//認証
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    //Menu
    public function productMenu()
    {
        //ユーザ認証
        $user = Auth::user();

        //DBすべて取得
        $item = DB::select('select * from product');

        $param = ['items'=>$item, 'user'=>$user];

        //return view('layouts.productMenu', ['items'=>$item]);
        return view('portfolio.menu', $param);
    }

    //プロダクト情報の出力
    public function productData(Request $request)
    {
        if (isset($request->id))
        {
            $param = ['id'=>$request->id];
            //データ選択取得
            $data = DB::select('select * from product where id = :id', 
                $param);
        } else if (isset($request->product))
        {
            $param = ['product'=>$request->product];
            //データ選択取得
            $data = DB::select('select * from product where name = :product', 
                $param);
        } else {
            //全データ取得
            $data = DB::select('select * from product');
        }

        return view('portfolio.product', ['data'=>$data]);
    }

    //SQLiteの利用
    public function database(Request $request)
    {
        if (isset($request->id))
        {
            $param = ['id'=>$request->id];
            //データ全部取得
            $items = DB::select('select * from product where id = :id', 
                $param);
        } else {
            $items = DB::select('select * from product');
        }

        return view('portfolio.data', ['items'=>$items]);
    }

    //SQLiteデータ追加
    public function add(Request $request)
    {
        return view('portfolio.data');
    }

    public function create(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'img1'  => $request->img1,
            'img2' => $request->img2,
            'img3' => $request->img3,
            'overview' => $request->overview,
            'OS' => $request->OS,
            'lang' => $request->lang,
            'lib' => $request->lib,
            'env' => $request->env,
            'role' => $request->role,
        ];

        DB::insert('insert into product (id, name, img1, img2, img3, overview, OS, lang, lib, env, role) values 
            (:id, :name, :img1, :img2, :img3, :overview, :OS, :lang, :lib, :env, :role)', $param);

        return redirect('/testSQLite');
    }

}
