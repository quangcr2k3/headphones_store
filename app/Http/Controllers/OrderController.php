<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\OrderItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Payment;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Orders::where('user_id', Auth::id())->get();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Kiểm tra giỏ hàng có trống không
        if (count($cart) == 0) {
            return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn trống.');
        }

        // Tạo đơn hàng mới
        $order = Orders::create([
            'user_id' => Auth::id(),
            'total' => $request->total,
            'status' => 'processing',
            'payment_method' => $request->payment_method,
        ]);

        // Lưu các mặt hàng trong đơn hàng
        foreach ($cart as $id => $details) {
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
            ]);
        }

        // Tạo bản ghi thanh toán
        Payment::create([
            'order_id' => $order->id,
            'amount' => $order->total,
            'payment_method' => $order->payment_method,
        ]);

        // Xóa giỏ hàng sau khi đặt hàng
        session()->forget('cart');

        // Chuyển hướng đến trang đơn hàng sau khi thành công
        return redirect()->route('order.index')->with('success', 'Đặt hàng thành công!');
    }

    public function show($id)
    {
        $order = Orders::with('items.product')->findOrFail($id);

        // Chuyển đổi trạng thái trong controller
        $statusText = [
            'processing' => 'Đang xử lý',
            'paid' => 'Đã thanh toán',
            'cancelled' => 'Đã hủy',
        ];

        // Gán trạng thái trực tiếp vào $order
        $order->status_label = $statusText[$order->status];

        return view('orders.show', compact('order'));
    }
}
