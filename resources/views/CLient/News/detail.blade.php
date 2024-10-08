@extends('Layout.clientLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')

<section class="post">
    <div class="container process-container">
        <article class="article">
            <div class="content-left">
                <h1 class="post-title">{{$news->title}}</h1>
                <div class="info">
                    <time>{{$news->date}}</time>
                </div>
            </div>
            <div class="content-right">

            </div>
        </article>
    </div>
</section>
<section class="content">
    <div class="container content-container">
        <div class="content-left target-class">
            <img src="{{$news->image}}">
            <p class="preformatted">{{$news->content}}</p>
            @foreach($imgNew as $imgnew)
            <p class="preformatted">
                <img src="{{$imgnew->image}}">
            </p>
            @endforeach
        </div>
    </div>
</section>

<section class="establish">
    <div class="container process-container">
        <div class="content">
            <div class="right clearfix">
                <img src="https://vn.toto.com/wp-content/uploads/2023/10/action-1.webp" alt="establish">
                <div class="right-mobile">
                    <h3 class="right-content">TOTO Việt Nam</h3>
                    <div class="desc">
                        TOTO thành lập vào năm 1917 tại Nhật Bản và đã có hơn 100 năm kinh nghiệm trong lĩnh vực cung cấp thiết bị vệ sinh Cao cấp. Năm 2002, TOTO chính thức có mặt tại Việt Nam, đem đỉnh cao trải nghiệm vệ sinh đến gần hơn với các gia đình Việt.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related">
    <div class="container process-container padding">
        <div class="related-title">BÀI VIẾT LIÊN QUAN</div>
        <div class="list-content">
            <ul class="related-list slick-initialized slick slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 1068px; transform: translate3d(0px, 0px, 0px);">
                        <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 316px;">
                            <div>
                                <li style="width: 100%; display: inline-block;">
                                    <div class="top"> <a href="https://vn.toto.com/cuoc-thi-thiet-ke-hoan-vi-rearrangement-san-choi-chuyen-nghiep-cho-kien-truc-su-tre/" tabindex="0"><img src="https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/4.png.webp" alt="related-1.jpg"></a></div>
                                    <div class="desc">
                                        <div class="time"> <i class="fa fa-calendar" aria-hidden="true"></i> <span>31/08/2024</span></div> <a href="https://vn.toto.com/cuoc-thi-thiet-ke-hoan-vi-rearrangement-san-choi-chuyen-nghiep-cho-kien-truc-su-tre/" class="title" tabindex="0"> Cuộc thi thiết kế “Hoán vị / Rearrangement” – Sân chơi chuyên nghiệp cho kiến trúc sư trẻ </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 316px;">
                            <div>
                                <li style="width: 100%; display: inline-block;">
                                    <div class="top"> <a href="https://vn.toto.com/toto-ra-mat-nap-rua-dien-tu-washlet-s7-moi/" tabindex="0"><img src="https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/ban-cau-thong-minh-neorest-nx-2024-2.png.webp" alt="related-1.jpg"></a></div>
                                    <div class="desc">
                                        <div class="time"> <i class="fa fa-calendar" aria-hidden="true"></i> <span>16/08/2024</span></div> <a href="https://vn.toto.com/toto-ra-mat-nap-rua-dien-tu-washlet-s7-moi/" class="title" tabindex="0"> TOTO giới thiệu thế hệ nắp rửa điện tử WASHLET S7 mới </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 316px;">
                            <div>
                                <li style="width: 100%; display: inline-block;">
                                    <div class="top"> <a href="https://vn.toto.com/toto-ra-mat-ban-cau-thong-minh-neorest-nx-phien-ban-nang-cap-moi/" tabindex="0"><img src="https://vn.toto.com/wp-content/webp-express/webp-images/uploads/2024/08/ban-cau-thong-minh-neorest-nx-2024-1-4.png.webp" alt="related-1.jpg"></a></div>
                                    <div class="desc">
                                        <div class="time"> <i class="fa fa-calendar" aria-hidden="true"></i> <span>14/08/2024</span></div> <a href="https://vn.toto.com/toto-ra-mat-ban-cau-thong-minh-neorest-nx-phien-ban-nang-cap-moi/" class="title" tabindex="0"> TOTO ra mắt bàn cầu thông minh NEOREST NX phiên bản nâng cấp mới </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</section>
@endsection