<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Technique;
use App\Models\Fetures;
use App\Models\Accessory;
use App\Models\Image;
use App\Services\ProductService;

class AdminProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $_productService)
    {
        $this->productService = $_productService;
    }
    //View Data Product
    public function index(Request $request)
    {
        $products = $this->productService->getAll($request);
        return view('Admin.Product.index', compact('products'));
    }
    //Add Product
    public function store(Request $request)
    {
        if ($request->isMethod('get')) {
            $brands = Brand::all();
            $categories = Category::all();
            return view('Admin.Product.addproduct', compact('brands', 'categories'));
        } else if ($request->isMethod('post')) {
            $product = $this->productService->addProduct($request);
            return redirect()->route('admin.products.show');
        }
    }
    //Add infor product
    public function updateInfor(Request $request, $id)
    {
        $products = Product::find($id);
        if ($request->isMethod('get')) {
            return view('Admin.Product.updateInfor', compact('products'));
        } else if ($request->isMethod('post')) {
            //Dữ liệu bảng kỹ thuật
            $products = $this->productService->tech($request, $id);
            //Dữ liệu bảng phụ kiện 
            $products = $this->productService->access($request, $id);
            //Dữ liệu cho bảng Image
            $products = $this->productService->image($request, $id);
            //Dữ liệu cho bảng tính năng
            $products = $this->productService->fetures($request, $id);
            return redirect()->route('admin.products.show');
        }
    }
    // Edit Product
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) 
        {
            // $previousUrl = url()->previous();
            // return view('404', compact('previousUrl'));
            return view('404');
        }
        if ($request->isMethod('get')) 
        {
            $brands = Brand::all();
            $categories = Category::all();
            return view('Admin.Product.edit', compact('product', 'brands', 'categories'));
        } 
        else if ($request->isMethod('post')) 
        {
            $product = $this->productService->editProduct($request, $id);
        }
            return redirect()->route('admin.products.show');
    }
    //Delete Product
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            // $previousUrl = url()->previous();
            // return view('404', compact('previousUrl'));
            return view('404');
        }
        $product = $this->productService->deleteProduct($id);
        return redirect()->route('admin.products.show');
    }
}
