<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        // Lấy danh sách sản phẩm và phân trang
        $products = Product::with('category')->paginate(9);

        // Lấy tất cả danh mục
        $categories = Category::all();

        // Trả về view welcome với biến products và categories
        return view('welcome', compact('products', 'categories'));
    }
}
