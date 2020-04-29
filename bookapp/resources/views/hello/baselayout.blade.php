@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>

    <!--フォームとバリデーション-->
    <p>{{$msg}}</p>
    <form action="/hello" method="post">
    <table>
        @csrf
        <tr><th>name: </th><td><input type="text"
            name="name"></td></tr>
        <tr><th>mail: </th><td><input type="text"
            name="mail"></td></tr>
        <tr><th>age: </th><td><input type="text"
            name="age"></td></tr>
        <tr><th></th><td><input type="submit"
            value="send"></td></tr>
    </table>
    </form>

    <!--配列のループ表示-->
    <ul>
    @each('components.item', $data, 'item')
    </ul>

    <!--コンポーネント-->
    @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です
    @endslot
    @endcomponent

    <!--サブビュー-->
    @include('components.message', ['msg_title'=>'OK!', 
        'msg_content'=>'サブビューです'])

@endsection

@section('footer')
copyright 2020 oshima.
@endsection