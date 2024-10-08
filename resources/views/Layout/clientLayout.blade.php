<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS 
    ========================= -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/font-awesome.min.css') }}">
    <link href="<link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Client/assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('Client/assets/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('Client/assets/css/detailNew.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('Client/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!--Header start-->
    <div class="header-area">
        <!-- header-top start -->
        <div class="header-top bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="top-left-wrap">
                            <ul class="phone-email-wrap">
                                <li><i class="fa fa-phone"></i>1800558830</li>
                            </ul>
                            <ul class="link-top">
                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Rss"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="top-selector-wrapper">
                            <ul class="single-top-selector">
                                <!-- Sanguage Start -->
                                @if (Auth::check())
                                <li class="setting-top list-inline-item">
                                    <div class="btn-group">
                                        <button class="dropdown-toggle"><i class="fa fa-user-circle-o"></i> {{ Auth::User()->name }} <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="">Thông tin</a></li>
                                                <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <!-- Nếu chưa đăng nhập thì hiện dòng này -->
                                <li class="setting-top list-inline-item">
                                    <div class="btn-group">
                                        <button class="dropdown-toggle"><i class="fa fa-user-circle-o"></i> Tài khoản <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!-- Sanguage End -->
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header-top end -->
        <div class="header-bottom-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-4">
                        <!-- logo start -->
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('Client/assets/images/logo/logo.png') }}" alt=""></a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <!-- main-menu-area start -->
                        <div class="main-menu-area">
                            <nav class="main-navigation">
                                <ul>
                                    <li><a href="">LANGAUGE</a>
                                        <ul class="mega-menu">
                                            <li><a href="locale/en">ENGLISH</a></li>
                                            <li><a href="locale/vi">VIETNAMESE</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('brands') }}">@lang('messages.PRODUCT')</a>
                                        <!--Lọc sản phẩm theo hãng-->
                                        <ul class="mega-menu">
                                            <li><a href="{{ route('products.index') }}">@lang('messages.SHOWALL')</a></li>
                                            <!-- Lọc sản phẩm theo từng loại và theo hãng -->
                                            @foreach($brands as $brand)
                                            <li>
                                                <a href="{{ route('products.index', ['brand_id' => $brand->id]) }}">{{ $brand->brandname }}</a>
                                                <ul>
                                                    <!-- Lọc sản phẩm theo từng loại của hãng -->
                                                    @foreach($category->where('brand_id', $brand->id) as $categories)
                                                    <li><a href="{{ route('products.index', ['category_id' => $categories->id]) }}">{{ $categories->categoryname }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="">@lang('messages.STORE LOCATION')</a>
                                    </li>
                                    <li><a href="">@lang('messages.SHOWROOM')</a>
                                    </li>
                                    <li><a href="">@lang('messages.CATALOUES')</a></li>
                                    <li><a href="">@lang('messages.WARRANTY')</a>
                                        <ul class="mega-menu">
                                            <li><a href="">@lang('messages.WARRANTY')</a>
                                                <ul>
                                                    <li><a href="">Warranty policy</a></li>
                                                    <li><a href="">Warranty process</a></li>
                                                    <li><a href="">Active-e warranty</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('news.index') }}">@lang('messages.NEWS')</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu-area End -->
                    </div>
                    <div class="col-lg-3 col-8">
                        <div class="header-bottom-right">
                            <div class="block-search">
                                <div class="trigger-search"><i class="fa fa-search"></i> <span>Search</span></div>
                                <div class="search-box main-search-active">
                                    <form action="#" class="search-box-inner">
                                        <input type="text" placeholder="Search our catalog">
                                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header End-->
    @yield('content')
    <!-- Footer Aare Start -->
    <footer class="footer-area">
        <!-- footer-top start -->
        <div class="footer-top pt--50 section-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- footer-info-area start -->
                        <div class="footer-info-area">
                            <div class="footer-logo">
                                <a href="#"><img src="{{ asset('Client/assets/images/logo/logo.png') }}" alt=""></a>
                            </div>
                            <div class="desc_footer">
                                <p><i class="fa fa-home"></i> <span> 1A Building, 1A Pham Ngoc Thach, Ben Nghe, Dist. 1, HCMC.</span> </p>
                                <p><i class="fa fa-phone"></i> <span>1800558830</span> </p>
                                <div class="link-follow-footer">
                                    <ul class="footer-social-share">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer-info-area end -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!-- footer-info-area start -->
                                <div class="footer-info-area">
                                    <div class="footer-title">
                                        <h3>Products</h3>
                                    </div>
                                    <div class="desc_footer">
                                        <ul>
                                            <li><a href="#">Prices drop</a></li>
                                            <li><a href="#"> New products</a></li>
                                            <li><a href="#"> Best sales</a></li>
                                            <li><a href="#"> Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- footer-info-area end -->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!-- footer-info-area start -->
                                <div class="footer-info-area">
                                    <div class="footer-title">
                                        <h3>Our company</h3>
                                    </div>
                                    <div class="desc_footer">
                                        <ul>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Stores</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- footer-info-area end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- footer-info-area start -->
                        <div class="footer-info-area">
                            <div class="footer-title">
                                <h3>Join Our Newsletter Now </h3>
                            </div>
                            <div class="desc_footer">
                                <div class="input-newsletter">
                                    <input name="email" class="input_text" value="" placeholder="Your email address" type="text">
                                    <button class="btn-newsletter"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                                <p>Get E-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                        <!-- footer-info-area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top end -->
        <!-- footer-buttom start -->
        <div class="footer-buttom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="copy-right">
                            <p>Copyright 2021 <a href="#">Boyka</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="payment">
                            <img src="{{ asset('Client/assets/images/icon/1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-buttom start -->
    </footer>
    <!-- Footer Aare End -->
    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="{{ asset('Client/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('Client/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('Client/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('Client/assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('Client/assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail -->
    <script src="{{ asset('Client/assets/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('Client/assets/js/main.js') }}"></script>
</body>

</html>