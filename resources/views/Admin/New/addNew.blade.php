@extends('Layout.adminLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')

<div class="container">
    <h2>Thêm tin tức mới</h2>

    <!-- Kiểm tra và hiển thị thông báo thành công nếu có -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Hiển thị lỗi nếu có -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form thêm tin tức mới -->
    <form action="{{ route('new.addNew') }}" method="POST">
        @csrf <!-- Token bảo mật của Laravel -->

        <div class="form-group">
            <label for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            @if ($errors->has('title'))
            <span class="text-red-500 float-right">{{ $errors->first('title') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="image">Ảnh:</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
            @if ($errors->has('image'))
            <span class="text-red-500 float-right">{{ $errors->first('image') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="date">Ngày:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
            @if ($errors->has('date'))
            <span class="text-red-500 float-right">{{ $errors->first('date') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="content">Nội dung:</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
            @if ($errors->has('content'))
            <span class="text-red-500 float-right">{{ $errors->first('content') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Thêm Tin Tức</button>
    </form>
</div>

@endsection