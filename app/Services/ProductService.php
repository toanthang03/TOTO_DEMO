<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Technique;
use App\Models\Fetures;
use App\Models\Accessory;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductService
{
    //Hàm lấy toàn bộ sản phẩm
    public function getAll(Request $request)
    {
        //Lấy toàn bộ dữ liệu
        $query = Product::query();

        // Lấy sản phẩm theo Brand
        if ($request->has('brand_id')) {
            $query->where('brand_id', $request->input('brand_id'));
        }
        //Lấy sản phẩm theo loại
        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }
        //Sắp xếp theo giá
        if ($request->has('sort_by') && $request->has('sort_order')) {
            $query->orderBy($request->sort_by, $request->sort_order);
        }
        return $query->get();
    }   

    //Hàm Validate sản phẩm
    public function validateProduct(Request $validate)
    {
        return $validate->validate([
            'productname' => 'required|max:255',
            'product_id' => 'required|max:255',
            'price' => 'required|numeric|int',
            'category_id' => 'required',
            'brand_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
    }
    //Hàm tạo sản phẩm mới
    public function addProduct(Request $request)
    {
        $this->validateProduct($request);
        //Dữ liệu cho bảng product
        $product = new Product();
        $product->product_id = $request->product_id;
        $product->productname = $request->productname;
        $product->price = (int)$request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->description = $request->description;

        //image
        $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('/img_upload'), $file_name);
        $product->image = $file_name;

        $product->save();
        return $product;
    }
    //Hàm update thêm thông tin của sản phẩm

    //Hàm chỉnh sửa thông tin sản phẩm
    public function editProduct(Request $request, $id)
    {
        $this->validateProduct($request);
        $product = Product::find($id);
        $request->merge(['price' => (int)$request->price]);
        $product->update($request->all());
        if ($request->hasFile('image')) {
            $img = $product->image;
            $url = public_path('img_upload/' . $img);
            if (file_exists($url)) {
                unlink($url);
            }
            $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('/img_upload'), $file_name);
            $product->image = $file_name;
            $product->save();
            return $product;
        }
    }
    //Hàm xóa sản phẩm
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            // $previousUrl = url()->previous();
            // return view('404', compact('previousUrl'));
            return view('404');
        }
        $img = $product->image;
        $url = public_path('img_upload/' . $img);
        if (file_exists($url)) {
            unlink($url);
        }
        $product->delete();
        return $product;
    }

    //Hàm update thêm dữ liệu cho sản phẩm
    public function tech(Request $request, $id)
    {
        $products = Product::find($id);
        //Dữ liệu bảng kỹ thuật
        $specs = new Technique;
        $specs->size = $request->size;
        $specs->color = $request->color;
        $specs->material = $request->material;
        $specs->weight = $request->weight;
        $specs->capacity = $request->capacity;
        $specs->product_id = $products->id;
        $specs->save();
        return $specs;
    }
    //Thêm dữ liệu phụ kiện
    public function access(Request $request, $id)
    {
        $products = Product::find($id);
        //Dữ liệu bảng kỹ thuật
        $accessory = new Accessory;
        $accessory->name = $request->access_name;
        $accessory->product_id = $products->id;
        $accessory->save();
        return $accessory;
    }
    //Thêm bản vẽ kĩ thuật
    public function image(Request $request, $id)
    {
        $products = Product::find($id);
        //Dữ liệu bảng kỹ thuật
        $image = new Image;
        $image->image = $request->image_url;
        $image->product_id = $products->id;
        $image->save();
        return $image;
    }
    //Thêm tính năng sản phẩm
    public function fetures(Request $request, $id)
    {
        $products = Product::find($id);
        //Dữ liệu bảng kỹ thuật
        $fetures = new Fetures;
        $fetures->name = $request->feture_name;
        $fetures->product_id = $products->id;
        $fetures->save();
        return $fetures;
    }
}
