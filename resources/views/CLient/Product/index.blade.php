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
                    <li class="breadcrumb-item active">Products</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active"><a class="active" data-bs-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of 15</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <div class="dropdown">
                                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.index', array_merge(request()->query(), ['sort_by' => 'price', 'sort_order' => 'asc'])) }}">Low
                                            to High</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products.index', array_merge(request()->query(), ['sort_by' => 'price', 'sort_order' => 'desc'])) }}">High
                                            to Low</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->

                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane active">
                            <div class="shop-product-area">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-30">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{ route('products.detail', ['id' => $product->id]) }}"><img src="{{ asset('img_upload/'. $product->image) }}" alt=""></a>
                                                <span class="label-product label-new">new</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="">{{ $product->productname }}</a></h3>
                                                <div>
                                                    <span class="new-price">{{ number_format($product->price, 0, ',', '.') }} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane">
                            <div class="row">
                                <div class="col">
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{ asset('Client/assets/images/product/5.jpg') }}" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">New Printed Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$55.27</span>
                                                        <span class="old-price">$58.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{ asset('Client/assets/images/product/4.jpg') }}" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">Summer Printed </a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$51.27</span>
                                                        <span class="old-price">$54.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{ asset('Client/assets/images/product/8.jpg') }}" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">New product Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$41.27</span>
                                                        <span class="old-price">$54.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{ asset('Client/assets/images/product/6.jpg') }}" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">Printed Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$41.27</span>
                                                        <span class="old-price">$54.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="{{ asset('Client/assets/images/product/2.jpg') }}" alt=""></a>
                                                    <span class="label-product label-new">new</span>
                                                    <span class="label-product label-sale">-7%</span>
                                                    <div class="quick_view">
                                                        <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <!-- single-product-wrap start -->
                                                <div class="product-content-list">
                                                    <h3><a href="product-details.html">Printed Summer</a></h3>
                                                    <div class="star_content">
                                                        <ul class="d-flex">
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price">$31.27</span>
                                                        <span class="old-price">$44.49</span>
                                                    </div>
                                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- paginatoin-area start -->
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 1-12 of 13 item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- paginatoin-area end -->
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->

<!-- Modal Algemeen Uitgelicht start -->
<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/1.jpg') }}" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/2.jpg') }}" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/3.jpg') }}" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/5.jpg') }}" alt="product image">
                                </div>
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1">
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/1.jpg') }}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/2.jpg') }}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/3.jpg') }}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/4.jpg') }}" alt="product image thumb"></div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="product-details-view-content">
                            <div class="product-info">
                                <h2>Healthy Melt</h2>
                                <div class="price-box">
                                    <span class="old-price">$70.00</span>
                                    <span class="new-price">$76.00</span>
                                    <span class="discount discount-percentage">Save 5%</span>
                                </div>
                                <p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.</p>
                                <div class="product-variants">
                                    <div class="produt-variants-size">
                                        <label>Size</label>
                                        <select class="form-control-select">
                                            <option value="1" title="S" selected="selected">S</option>
                                            <option value="2" title="M">M</option>
                                            <option value="3" title="L">L</option>
                                        </select>
                                    </div>
                                    <div class="produt-variants-color">
                                        <label>Color</label>
                                        <ul class="color-list">
                                            <li><a href="#" class="orange-color active"></a></li>
                                            <li><a href="#" class="paste-color"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <form action="#" class="cart-quantity">
                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </div>
                                        <button class="add-to-cart" type="submit">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Algemeen Uitgelicht end -->


<!-- Main Wrapper End -->
@endsection