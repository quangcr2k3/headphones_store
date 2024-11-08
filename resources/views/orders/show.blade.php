@extends('layouts.app')

@section('content')
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

        .table th,
        .table td {
            vertical-align: middle;
            /* Giữa các ô */
        }
    </style>

    @php
        $statusColor = [
            'processing' => 'color-processing',
            'paid' => 'color-paid',
            'cancelled' => 'color-cancelled',
        ];
    @endphp

    <div class="container">
        <h1>Chi tiết đơn hàng số {{ $order->id }}</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h3>Danh sách sản phẩm bạn đã mua:</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}" style="width: 80px; height: 80px;">
                                </td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->price, 0) }} VND</td>
                                <td>{{ number_format($item->quantity * $item->price, 0) }} VND</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" style="text-align: center"><b>TỔNG TIỀN</b></td>
                            <td><b style="color: #dc3545">{{ number_format($order->total, 0) }} VND</b></td>
                        </tr>
                    </tbody>
                </table>

                <h3>Thông tin đơn hàng:</h3>
                <span class="order-details">
                    <strong>Trạng thái: <span class="{{ $statusColor[$order->status] }}">{{ $order->status_label }}</span></strong>
                </span>
                <br><span class="order-details">
                    <strong>Phương thức thanh toán:</strong> {{ $order->payment_method }}
                </span>
                <br><span class="order-details">
                    <strong>Ngày tạo:</strong> {{ $order->created_at->format('d/m/Y H:i:s') }}
                </span>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('order.index') }}" class="btn btn-primary">Quay lại</a>
        </div>
    </div>
@endsection
