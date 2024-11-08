<!-- views/admin/orders/index.blade.php -->
@extends ('admin.layouts.app')

@section('content_admin')
    <style>
        /* Style mặc định cho select */
        .status-select {
            padding: 5px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #333;
            transition: background-color 0.3s, border-color 0.3s;
        }

        /* Màu nền cho từng trạng thái */
        .processing {
            background-color: #337ab7;
            /* Màu xanh da trời */
            color: #fff;
        }

        .paid {
            background-color: #28a745;
            /* Màu xanh lá cây */
            color: #fff;
        }

        .cancelled {
            background-color: #dc3545;
            /* Màu đỏ */
            color: #fff;
        }

        /* Hover effect */
        .status-select:hover {
            background-color: #e6f7ff;
            border-color: #66afe9;
            color: #333
        }

        .status-select:focus {
            outline: none;
            background-color: #fff;
            border-color: #007bff;
        }
    </style>


    <h1>QUẢN LÝ ĐƠN HÀNG</h1>
    <p>Dưới đây là danh sách các đơn hàng mà khách hàng đã đặt mua: </p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th>MÃ</th>
                <th>TÊN KHÁCH HÀNG</th>
                <th>TỔNG TIỀN</th>
                <th>TRẠNG THÁI</th>
                <th>THANH TOÁN</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ number_format($order->total, 0) }} VND</td>
                    <td>
                        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="status-select {{ $order->status }}" onchange="this.form.submit()">
                                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Đang xử lý
                                </option>
                                <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Đã thanh toán
                                </option>
                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Đã hủy
                                </option>
                            </select>
                        </form>
                    </td>
                    <td>{{ $order->payment_method }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.orders.show', $order->id) }}"> Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
