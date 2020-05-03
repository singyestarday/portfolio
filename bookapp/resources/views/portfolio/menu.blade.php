@extends('layouts.baselayout')

@section('title')
    Portfolio
@endsection

@section('slideshow')
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" style="margin-bottom:25px;">
    <!-- スライドさせる画像の設定 -->
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3000">
            <img class="d-block w-100" src="/storage/top/VisualStudio.png" alt="第1スライド">
        </div><!-- /.carousel-item -->
        <div class="carousel-item" data-interval="3000">
            <img class="d-block w-100" src="/storage/top/Spyder.png" alt="第2スライド">
        </div><!-- /.carousel-item -->
        <div class="carousel-item" data-interval="3000">
            <img class="d-block w-100" src="/storage/top/AWS.png" alt="第3スライド">
        </div><!-- /.carousel-item -->
        <div class="carousel-item" data-interval="3000">
            <img class="d-block w-100" src="/storage/top/AndroidStudio.png" alt="第3スライド">
        </div><!-- /.carousel-item -->
    </div><!-- /.carousel-inner -->
</div><!-- /.carousel -->
@endsection

@section('cardcontents')
<div class="card-columns">
    @foreach($items as $item)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=/storage/product/{{$item->img1}} alt="コメント">
        <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text"></p>
            <a href="/product?product={{$item->name}}" class="btn btn-primary">詳細ページ</a>
        </div>
    </div>
    @endforeach
</div>
@endsection

