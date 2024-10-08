@extends('Layout.clientLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')


<main class="new">
    <div class="container">
        <h1 class="main-title">Tin Tức</h1>
    </div>
    <div class="text">
        <div class="container">
            <p>Kênh tin tức tổng hợp của thương hiệu thiết bị vệ sinh TOTO tại Việt Nam, mang đến cho bạn những tin tức mới nhất về các dòng sản phẩm của thương hiệu TOTO, các thông tin về hoạt động của TOTO Việt Nam và nhiều sự kiện quan trọng khác.</p>
            <p>Mời bạn thường&nbsp; xuyên ghé mục Tin tức của TOTO để nắm bắt nhanh chóng, kịp thời và chính xác các thông tin nóng hổi. Từ đó hiểu thêm về quá trình vận hành và hoạt động chung của thương hiệu TOTO tại thị trường Việt Nam.</p>
        </div>
    </div>
    <div class="container wrap-all">
        <div class="text-box">
            <ul class="text-box-ul">
                <li>
                    <span class="text-box-content">
                        <a href="">Tin tức công ty</a>
                    </span>
                </li>
                <li>
                    <span class="text-box-content">
                        <a href="">Tin tức sản phẩm</a>
                    </span>
                </li>
                <li>
                    <span class="text-box-content">
                        <a href="">Tin tức CSR</a>
                    </span>
                </li>
                <li>
                    <span class="text-box-content">
                        <a href="">TOTO Showroom Hồ Chí Minh</a>
                    </span>
                </li>
                <li>
                    <span class="text-box-content">
                        <a href="">TOTO Showroom Hà Nội</a>
                    </span>
                </li>
            </ul>
        </div>
        <div class="wrap-slider">
            <div class="slider-inner">
            @foreach($news as $new)
                <div class="slide-wrap">
                   
                    <div class="top">
                        <a href="{{ route('news.detail', ['id' => $new->id]) }}">
                            <img src="{{$new->image}}" alt="" width="80%">
                        </a>
                    </div>
                    <div class="slide-content">
                        <a href="{{ route('news.detail', ['id' => $new->id]) }}"><h3>{{$new->title}}</h3></a>
                    </div>
                    <div class="slide-time">
                        <p>{{$new->date}}</p>
                    </div>
                    <a href="{{ route('news.detail', ['id' => $new->id]) }}"><h4>Xem chi tiết</h4></a>
                   
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection