@extends('admin.layouts.app')

@section('title', 'Chi tiết Đơn hàng #' . $order->id)

@section('content_admin')
    <style>
        .order-details {
            font-size: 16px;
            line-height: 1.6;
        }

        .color-processing {
            color: #337ab7;
            /* Màu cam cho trạng thái Đang xử lý */
        }

        .color-paid {
            color: #28a745;
            /* Màu xanh lá cho trạng thái Đã thanh toán */
        }

        .color-cancelled {
            color: #dc3545;
            /* Màu đỏ cho trạng thái Đã hủy */
        }
    </style>

    @php
        $statusText = [
            'processing' => 'Đang xử lý',
            'paid' => 'Đã thanh toán',
            'cancelled' => 'Đã hủy',
        ];

        $statusColor = [
            'processing' => 'color-processing',
            'paid' => 'color-paid',
            'cancelled' => 'color-cancelled',
        ];
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1>CHI TIẾT ĐƠN HÀNG SỐ <b>{{ $order->id }}</b></h1>
                </div>
                <div class="pull-right">
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Quay lại</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h3>Tên khách hàng: <b>{{ $order->user->name }}</b></h3>
                <p>Dưới đây là những sản phẩm mà khách hàng đã mua:</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SỐ LƯỢNG</th>
                            <th>ĐƠN GIÁ</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <!-- Sửa lại từ orderItems thành items -->
                            <tr>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->price, 0) }} VND</td>
                                <td>{{ number_format($item->quantity * $item->price, 0) }} VND</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align: center"><b>TỔNG TIỀN</b></td>
                            <td><b>{{ number_format($order->total, 0) }} VND</b></td>
                        </tr>
                    </tbody>
                </table>

                <h3>Thông tin đơn hàng:</h3>
                <br><span class="order-details">
                    <strong>Trạng thái: <span class="{{ $statusColor[$order->status] }}">{{ $statusText[$order->status] }}</span></strong>
                </span>
                <br><span class="order-details">
                    <strong>Phương thức thanh toán:</strong> {{ $order->payment_method }}
                </span>
                <br><span class="order-details">
                    <strong>Ngày tạo:</strong> {{ $order->created_at->format('d/m/Y H:i:s') }}
                </span>
            </div>
        </div>
    </div>
@endsection
