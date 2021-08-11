<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Color;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    protected $limit;

    public function __construct() {
        $this->limit = Config::get('constants.limit_page');
    }
    public function index()
    {
        $products = Product::paginate($this->limit);
        foreach ($products as $item)
        {
            $item['image_detail'] = json_decode($item->image_detail) ?? [];
        }
        $categories = Category::all();
        $brands = Brand::all();
        return view('user.product.index', compact('products', 'categories', 'brands'));
    }
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();
        $product['image_detail'] = json_decode($product->image_detail) ?? [];
        $colors = Color::all();
        return view('user.product.detail', compact('product', 'categories', 'brands', 'colors'));
    }
}
