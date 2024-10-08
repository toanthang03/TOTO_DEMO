@extends('Layout.adminLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')

<h3>Sản phẩm</h3>

<a href="{{ route('admin.products.store') }}" class="hover:underline">Add new product</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ProductID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->product_id }}</td>
        <th>
            <img src="{{ asset('img_upload/'. $product->image) }}" alt="" width="200px">
        </th>
        <td>
            <p>{{ $product->productname }}</p>
        </td>
        @if($product->description == null)
            <td><b>Sản phẩm không có mô tả</b></td>
        @else
            <td class="description-cell">
                <div class="description-text">
                    {{ $product->description }}
                </div>
                <button class="toggle-button" onclick="toggleDescription(this)">Xem thêm</button>
            </td>
        @endif
        <td>{{number_format($product->price, 0, ',', '.')}} VND</td>
        <td>{{ $product->brand->brandname }}</td>
        <td>{{ $product->category->categoryname }}</td>
        <td>
            <a href="{{route('admin.products.update', $product->id)}}">Update</a>
            <a href="{{route('admin.product.edit', $product->id)}}">Edit</a>
            <a href="{{ route('admin.products.destroy', $product->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<script>
    function toggleDescription(button) {
        var description=button.previousElementSibling;

        if (description.classList.contains('expanded')) {
            description.classList.remove('expanded');
            button.textContent='Xem thêm';
        }

        else {
            description.classList.add('expanded');
            button.textContent='Thu gọn';
        }
    }

    </script>
@endsection

<style>
    .description-cell {
            position: relative;
        }
    .description-text {
        max-height: 200px;
        /* Giới hạn chiều cao của ô */
        overflow: hidden;
        /* Ẩn phần văn bản tràn */
        text-overflow: ellipsis;
        /* Thêm dấu ... ở cuối văn bản */
        display: -webkit-box;
        /* Để sử dụng với thuộc tính sau */
        -webkit-line-clamp: 4;
        /* Hiển thị tối đa 4 dòng */
        -webkit-box-orient: vertical;
        /* Đảm bảo hiển thị dòng theo chiều dọc */
        white-space: normal;
        /* Cho phép ngắt dòng */
    }

    .description-text.expanded {
        max-height: none;
    }

    .toggle-button {
        background-color: transparent;
        border: none;
        color: blue;
        cursor: pointer;
        padding: 5px;
    }
</style>