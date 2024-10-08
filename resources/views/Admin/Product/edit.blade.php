@extends('Layout.adminLayout')
@section('title', 'Edit Product')
@section('content')

<h3>Chỉnh Sửa Sản phẩm</h3>

<form action="{{ route('admin.product.edit', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="name" class="">ProductID
                @if ($errors->has('product_id'))
                <span class="text-red-500 float-right">{{ $errors->first('product_id') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <input type="text" class="form-control" placeholder="" value="{{ $product->product_id }}"
                    name="product_id">
            </div>
        </div>
    </div>
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="name" class="">Name
                @if ($errors->has('productname'))
                <span class="text-red-500 float-right">{{ $errors->first('productname') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <input type="text" class="form-control" placeholder="" value="{{ $product->productname }}"
                    name="productname">
            </div>
        </div>
    </div>
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="price" class="">Price
                @if ($errors->has('price'))
                <span class="text-red-500 float-right">{{ $errors->first('price') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <input type="text" class="form-control" placeholder=""
                    name="price" value="{{ $product->price }}">
            </div>
        </div>
    </div>
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="brand_id" class="">Brand
                @if ($errors->has('brand_id'))
                <span class="text-red-500 float-right">{{ $errors->first('brand_id') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <select class="w-full rounded-md h-8" name="brand_id">
                    @foreach ($brands as $brand)
                    @if ($product->brand_id == $brand->id)
                    <option value="{{ $brand->id }}" selected>{{ $brand->brandname }}</option>
                    @else
                    <option value="{{ $brand->id }}">{{ $brand->brandname }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="category_id" class="">Category
                @if ($errors->has('category_id'))
                <span class="text-red-500 float-right">{{ $errors->first('category_id') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <select class="w-full rounded-md h-8" name="category_id">
                    @foreach ($categories as $category)
                    @if ($product->category_id == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->categoryname }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->categoryname }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="file_upload" class="">Image
                @if ($errors->has('image'))
                <span class="text-red-500 float-right">{{ $errors->first('image') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <input type="file" class="block w-full text-sm text-slate-500file:mr-4 file:py-2 file:px-4file:rounded-md file:border-0file:text-sm file:font-semiboldfile:bg-violet-50 file:text-violet-700hover:file:bg-violet-100"
                    name="image">
            </div>
        </div>
    </div>
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="description" class="">Description
            </label>
            <div class="mt-2">
                <textarea class="form-control" placeholder="" name="description">{{ $product->description }}</textarea>
            </div>
        </div>
    </div>
    <div class="w-full p-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@endsection