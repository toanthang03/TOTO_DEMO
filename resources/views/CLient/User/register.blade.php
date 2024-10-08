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
                                            <input type="email" name="email" placeholder="Email" class="form-control rounded-0"
                                                value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif

                                            <input type="text" name="name" placeholder="Name" class="form-control rounded-0"
                                                value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif

                                            <input type="text" name="phone" placeholder="Phone Number" class="form-control rounded-0"
                                                value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif

                                            <span>Mật Khẩu</span>
                                            <div class="col-12 py-3">
                                                <input type="password" name="password" placeholder="Your Password" class="form-control rounded-0">
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-12 py-3">
                                                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                                    class="form-control rounded-0">
                                                @if ($errors->has('password_confirmation'))
                                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                            <a href="{{ route('login') }}" class="hover:underline hover:text-red-500">Already have an account?</a>
                                            <div class="button-box">
                                                <button class="login-btn btn" type="submit"><span>Register</span></button>
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
@endsection