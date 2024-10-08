@extends('Layout.adminLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')
<h1 align="center">Add Information to Product</h1>
<form action="{{ route('admin.products.update', $products->id) }}" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <p align="center">Thông tin mô tả kỹ thuật</p>
                    <label class="form-label">Size</label>
                    <input type="text" class="form-control" name="size">
                </div>
                <div class="mb-3">
                    <label class="form-label">Color</label>
                    <input type="text" class="form-control" name="color">
                </div>
                <div class="mb-3">
                    <label class="form-label">Material</label>
                    <input type="text" class="form-control" name="material">
                </div>
                <div class="mb-3">
                    <label class="form-label">Weight</label>
                    <input type="text" class="form-control" name="wight">
                </div>
                <div class="mb-3">
                    <label class="form-label">Capacity</label>
                    <input type="text" class="form-control" name="capacity">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <p align="center">Thông tin tính năng</p>
                    <label for="name" class="form-label">Feture Name</label>
                    <textarea type="text" class="form-control" name="feture_name"></textarea>
                </div>
                <div class="mb-3">
                    <p align="center">Thông tin phụ kiên đi kèm</p>
                    <label for="name" class="form-label">Accessory Name</label>
                    <textarea type="text" class="form-control" name="access_name"></textarea>
                </div>
                <div class="mb-3">
                    <p align="center">Thông tin ảnh sơ đồ kỹ thuật</p>
                    <label class="form-label">Image URL</label>
                    <input type="text" class="form-control" name="image_url">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection