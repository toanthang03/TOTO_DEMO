@extends('Layout.clientLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')

<!-- Main Wrapper Start -->

<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-lg-image-1">
                        <div class="lg-image">
                            <a href="#" class="img-poppu"><img src="{{ asset('img_upload/'. $product->image) }}" alt="product image"></a>
                        </div>
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content">
                    <div class="product-info">
                        <h3 class="title_3">{{ $product->product_id }}</h3>
                        <h3>{{ $product->productname }}</h3>
                        <h3>SKU: {{ $product->product_id }}</h3>
                        <div class="price-box">
                            <span class="new-price"> @lang('messages.price'): {{ number_format($product->price, 0, ',', '.') }} VND</span>
                        </div>
                        @foreach($specs as $spec)
                        <p><b>@lang('messages.Size'):</b> {{ $spec->size }}</p>
                        <p><b>@lang('messages.Color'):</b> {{ $spec->color }}</p>
                        @endforeach
                        <b>(Đơn giá VNĐ đã bao gồm VAT/1 bộ sản phẩm)</b><br><br>
                        <button type="button" class="btn btn-primary btn-lg"> @lang('messages.compare') </button>
                        <button type="button" class="btn btn-primary btn-lg"> @lang('messages.store') </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-details-tab mt--60">
                    <ul role="tablist" class="mb--50 nav">
                        <li class="active" role="presentation">
                            <a data-bs-toggle="tab" role="tab" href="#description" class="active">@lang('messages.detail')</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="product_details_tab_content tab-content">
                    <!-- Start Single Content -->
                    <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-7">
                                @if($product->description == null)
                                <div class="product_description_wrap">
                                    <h3 class="title_3">Sản phẩm chưa có mô tả</h3>
                                </div>
                                @else
                                <div class="product_description_wrap">
                                    <div class="product_desc mb--30">
                                        <h3 class="title_3">Thông tin {{$product->productname}}</h3>
                                        <p class="preformatted">{{$product->description}}</p>
                                    </div>
                                    <div class="pro_feature">
                                        <img src="{{ asset('img_upload/'. $product->image) }}" alt="product image">
                                    </div>
                                    <div class="pro_feature">
                                        <h3 class="title_3">Bộ sản phẩm gồm có</h3>
                                        @foreach($accessies as $access)
                                        <p class="preformatted">{{ $access->name }}</p>
                                        @endforeach
                                    </div>
                                    <div class="pro_feature">
                                        <h3 class="title_3">Bản vẽ kỹ thuật {{$product->productname}}</h3>
                                        @foreach($image as $img)
                                        <img src="{{$img->image}}" alt="product image">
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-5">
                                <div class="pro_feature">
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="title_1"><b>@lang('messages.Specifications')</b></h1>
                                            @foreach($specs as $spec)
                                            @if($spec->size)
                                            <p><b>Kích thước:</b> {{ $spec->size }}</p>
                                            @endif
                                            @if($spec->color)
                                            <p><b>Màu sắc:</b> {{ $spec->color }}</p>
                                            @endif
                                            @if($spec->material)
                                            <p><b>Chất liệu:</b> {{ $spec->material }}</p>
                                            @endif
                                            @if($spec->weight)
                                            <p><b>Trọng lượng:</b> {{ $spec->weight }}</p>
                                            @endif
                                            @if($spec->capacity)
                                            <p><b>Dung tích:</b> {{ $spec->capacity }}</p>
                                            @endif
                                            @endforeach
                                            <h1 class="title_1">Tính năng</h1>
                                            @foreach($fetures as $fet)
                                            <p class="preformatted">{{ $fet->name }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro_feture">
                            <h3 class="title_3">Mua {{$product->productname}} chính hãng tại TOTO Việt Nam</h3>
                            <p class="preformatted">
                                Để được đảm bảo quyền lợi mua hàng chính hãng và dịch vụ bảo hành từ TOTO Việt Nam, quý khách vui lòng tham khảo
                                mua sản phẩm TOTO tại hệ thống phân phối chính thức trên toàn quốc: https://vn.toto.com/he-thong-phan-phoi

                                Địa chỉ Showroom trưng bày chính hãng (không bán hàng):

                                · Tại TP. Hồ Chí Minh: Tòa nhà 1A, Số 1A Phạm Ngọc Thạch, P.Bến Nghé, Q.1, TP. Hồ Chí Minh – (84-28) 38229520

                                · Tại TP. Hà Nội: Tầng 2, Tháp 2, Tòa nhà Capital Place, Số 29 Liễu Giai, P. Ngọc Khánh, Q. Ba Đình, Hà Nội – (84-24) 3 771 4461

                                Tổng đài chăm sóc khách hàng (miễn phí cước gọi): 1800 558830
                            </p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->


<!-- Product Area Start -->
<div class="product-area section-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title section-bg-2">
                    <h2>@lang('messages.Similar Product')</h2>
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <!-- product-wrapper start -->
        <div class="product-wrapper">
            <div class="row product-slider">
                @foreach ($relatedProducts as $item)
                <div class="col-12">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="/product/{{$item->id}}"><img src="{{ asset('img_upload/'. $item->image) }}" alt="product image"></a>
                            <span class="label-product label-new">new</span>
                        </div>
                        <div class="product-content">
                            <h3><a href="">{{$item->productname}}</a></h3>
                            <div class="price">
                                <span class="new-price">{{ number_format($item->price, 0, ',', '.') }} VND</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                </div>
                @endforeach
            </div>
        </div>
        <!-- product-wrapper end -->
    </div>
</div>
<!--Style định dạng bảng Product Detail-->
<style>
    .pro_feature {
        margin-top: 16px;
        padding: 20px 20px;
    }

    .product-info-table {
        width: 60%;
        border-collapse: collapse;
        margin: 0 auto;
    }

    .product-info-table th,
    .product-info-table td {
        padding: 10px 15px;
        border: 1px solid #ddd;
    }

    .product-info-table th {
        text-align: left;
        font-weight: normal;
    }

    .product-info-table .header-section {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
        border: none;
    }

    .product-info-table td {
        background-color: #f9f9f9;
    }

    .product-info-table td:first-child {
        font-weight: bold;
    }

    .title_1 {
        background: #111;
        color: white;
        padding: 11px 36px;
        font-size: 15px;
        line-height: 19px;
        font-weight: 500;
        width: max-content;
    }
</style>
<!-- Product Area End -->
<!-- Main Wrapper End -->
@endsection
<style>
    .preformatted {
        white-space: pre-wrap;
        /* Giữ định dạng văn bản và xuống dòng */
    }
</style>