@extends('layouts.app')

@section('content')
    <style>
        .table th,
        .table td {
            vertical-align: middle;
            /* Giữa các ô */
        }
    </style>
    <div class="container mt-4">
        <h1 class="text-center">Giỏ hàng của bạn</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (count($cart) > 0)
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">Hình ảnh</th>
                        <th class="text-center">Tên sản phẩm</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-center">Đơn giá</th>
                        <th class="text-center">Thành tiền</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp <!-- Biến tổng tiền -->
                    @foreach ($cart as $id => $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('images/' . $details['image']) }}" alt="{{ $details['name'] }}"
                                    class="img-thumbnail" style="width: 80px; height: 80px;">
                            </td>
                            <td>{{ $details['name'] }}</td>
                            <td class="text-center">
                                <form action="{{ route('cart.update', $id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1"
                                        class="form-control" style="width: 60px; display: inline;">
                                    <button type="submit" class="btn btn-sm btn-secondary">Cập nhật</button>
                                </form>
                            </td>
                            <td class="text-center">{{ number_format($details['price'], 0) }} VND</td>
                            <td class="text-center">{{ number_format($details['price'] * $details['quantity'], 0) }} VND
                            </td>
                            <td class="text-center">
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xoá</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right">
                <h3>Tổng tiền: <span class="text-danger">{{ number_format($total, 0) }} VND</span></h3>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h5>Thông tin đặt hàng</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="total" value="{{ $total }}">
                        <div class="form-group">
                            <label for="payment_method">Phương thức thanh toán:</label>
                            <select name="payment_method" id="payment_method" class="form-control">
                                <option value="COD">Thanh toán khi nhận hàng (COD)</option>
                                <option value="online">Thanh toán trực tuyến</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" style="margin-top: 10px">Đặt hàng</button>
                    </form>
                </div>
            </div>
        @else
            <p>Giỏ hàng của bạn trống.</p>
        @endif

        <a href="{{ route('welcome') }}" class="btn btn-primary mt-3">Tiếp tục mua sắm</a>
    </div>
@endsection
