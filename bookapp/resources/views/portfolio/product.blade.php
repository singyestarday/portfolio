@extends('layouts.productbase')

@section('title')
    {{$data[0]->name}}
@endsection

@section('slider')
<ul class="bxslider">
    <li><img src=/storage/product/{{$data[0]->img1}}></li>
    <li><img src=/storage/product/{{$data[0]->img2}}></li>
    <li><img src=/storage/product/{{$data[0]->img3}}></li>
</ul>
@endsection

@section('overview')
    @component('components.message')
        @slot('msg_title')
            概要
        @endslot
        @slot('msg_content')
            {{$data[0]->overview}}
        @endslot
    @endcomponent
@endsection

@section('dev')
    @component('components.message')
        @slot('msg_title')
        開発
        @endslot

        @slot('msg_content')
        OS：{{$data[0]->OS}}<br>
        言語：{{$data[0]->lang}}<br>
        使用ライブラリ：{{$data[0]->lib}}<br>
        開発環境：{{$data[0]->env}}<br>
        @endslot
    @endcomponent
@endsection

@section('role')
    @component('components.message')
        @slot('msg_title')
        役割
        @endslot

        @slot('msg_content')
            {{$data[0]->role}}
        @endslot
    @endcomponent
@endsection

