<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Hiển thị giỏ hàng
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Thêm sản phẩm vào giỏ hàng
    public function add(Request $request, Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image ?? 'default.jpg' // Sử dụng hình ảnh mặc định nếu không có hình ảnh
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    public function update(Request $request, $id)
    {
        if ($request->has('quantity') && $request->quantity > 0) {
            $cart = session()->get('cart');
            // Kiểm tra sản phẩm có trong giỏ hàng
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $request->quantity; // Cập nhật số lượng 
                session()->put('cart', $cart); // Cập nhật session
                return redirect()->route('cart.index')->with('success', 'Giỏ hàng đã được cập nhật!');
            }
        }
        return redirect()->route('cart.index')->with('error', 'Cập nhật thất bại!');
    }

    // Xoá sản phẩm khỏi giỏ hàng
    public function remove(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được xoá khỏi giỏ hàng.');
    }
}
