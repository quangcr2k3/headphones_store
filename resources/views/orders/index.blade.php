<!-- resources/views/orders/index.blade.php -->
@extends('layouts.app')
@section('content')
    <style>
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
    <h1>Lịch sử đơn hàng của bạn</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (count($orders) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Thời gian</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ number_format($order->total, 0) }} VND</td>
                        <td><span class="{{ $statusColor[$order->status] }}">{{ $statusText[$order->status] }}</span></td>
                        <td>{{ $order->created_at->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <a href="{{ route('order.show', $order->id) }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Bạn chưa có đơn hàng nào. </p>
    @endif
@endsection
