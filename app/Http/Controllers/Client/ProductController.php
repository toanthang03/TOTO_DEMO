<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Technique;
use App\Models\Fetures;
use App\Models\Accessory;
use App\Models\Image;
use App\Services\ProductService;


class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductService $_productService)
    {
        $this->productService = $_productService;
    }

    public function index(Request $request)
    {
        $products = $this->productService->getAll($request);

        return view('Client.Product.index', compact('products'));
    }

    //Phương thức xem chi tiết sản phẩm theo id
    public function show($id)
    {
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('brand_id', $product->brand_id)
            ->where('id', '!=', $id)
            ->take(5)
            ->get();
        $specs = Technique::where('product_id', $id)->get();
        $fetures = Fetures::where('product_id', $id)->get();
        $accessies = Accessory::where('product_id', $id)->get();
        $image = Image::where('product_id', $id)->get();
        return view('Client.Product.detail', compact('product', 'relatedProducts', 'specs', 'fetures', 'accessies', 'image'));
    }


    //Phương thức lấy ra view sản phẩm theo brand và category
    public function getBrandsAndCategory()
    {
        $brands = Brand::all();
        $category = Category::all();
        view()->share(compact('brandname', 'name'), $brands, $category);
    }

    public function getBrandView()
    {
        $query = Brand::query();
        $brands = $query->get();
        return view('Client.Product.brand', compact('brands'));
    }
    public function _construct()
    {
        $this->getBrandsAndCategory();
    }
}
