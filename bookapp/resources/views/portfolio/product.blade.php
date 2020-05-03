@extends('layouts.baselayout')

@section('title')
    {{$data[0]->name}}
@endsection

@section('title-tile')
    {{$data[0]->name}}
@endsection

@section('slideshow')
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="margin-bottom:25px;">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <!-- スライドさせる画像の設定 -->
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3000">
            <img class="d-block w-100" src=/storage/product/{{$data[0]->img1}} alt="第1スライド">
        </div><!-- /.carousel-item -->
        <div class="carousel-item" data-interval="3000">
            <img class="d-block w-100" src=/storage/product/{{$data[0]->img2}} alt="第2スライド">
        </div><!-- /.carousel-item -->
        <div class="carousel-item" data-interval="3000">
            <img class="d-block w-100" src=/storage/product/{{$data[0]->img3}} alt="第3スライド">
        </div><!-- /.carousel-item -->
    </div><!-- /.carousel-inner -->
    <!-- スライドコントロールの設定 -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">前へ</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">次へ</span>
  </a>
</div><!-- /.carousel -->
@endsection

@section('maincontents')
    @component('components.message')
        @slot('msg_title')
            概要
        @endslot
        @slot('msg_content')
            {{$data[0]->overview}}
        @endslot
    @endcomponent

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

    @component('components.message')
        @slot('msg_title')
        役割
        @endslot

        @slot('msg_content')
            {{$data[0]->role}}
        @endslot
    @endcomponent
@endsection

