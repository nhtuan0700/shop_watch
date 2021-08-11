<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    protected $limit;

    public function __construct() {
        $this->limit = Config::get('constants.limit_page');
    }
    public function index()
    {
        $products = Product::paginate($this->limit);
        $brands = Brand::all();
        foreach ($products as $item)
        {
            $item['image_detail'] = json_decode($item->image_detail) ?? [];
        }
        return view('user.home.index', compact('products','brands'));
    }
}
