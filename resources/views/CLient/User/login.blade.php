@extends('Layout.clientLayout')
@section('title', 'Thiết Bị Vệ Sinh Cao Cấp Chính Hãng - TOTO Việt Nam')
@section('content')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Login</li>
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
            <div class="col-lg-7 col-md-12 m-auto">
                <div class="login-register-wrapper">
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        @csrf
                                        <div class="login-input-box">
                                            <input type="text" name="email" placeholder="Địa chỉ Email"
                                                require @if (isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @endif>

                                            <input type="password" name="password" placeholder="Password"
                                                required @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif>
                                        </div>
                                        <div class="col-12 py-3">
                                            @if (session('error'))
                                            <span class="text-danger">{{ session('error') }}</span>
                                            @endif
                                        </div>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" name="remember" value="on" id="flexCheckDefault"
                                                    @if (isset($_COOKIE['email'])) checked @endif>
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <a href="{{route('register')}}" class="hover:underline hover:text-red-500">Create Account</a>
                                            <div class="button-box">
                                                <button class="login-btn btn" type="submit"><span>Login</span></button>
                                            </div>
                                        </div>
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
<!-- content-wraper end -->
<!-- Main Wrapper End -->
@endsection