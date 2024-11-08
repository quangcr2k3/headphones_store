@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>{{ $product->name }}</h1>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}"> <!-- Hình ảnh sản phẩm -->
        </div>
        <div class="col-md-6">
            <p><strong>Mô tả:</strong> {{ $product->description }}</p>
            <p><strong>Số lượng:</strong> {{ $product->quantity }}</p>
            <p><strong>Giá:</strong> {{ number_format($product->price, 0) }} VND</p>
            <p><strong>Danh mục:</strong> {{ $product->category->name }}</p>
            @auth
                <!-- Form để thêm sản phẩm vào giỏ hàng -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                </form>
            @else
                <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để thêm sản phẩm vào giỏ hàng.</p>
            @endauth
        </div>
    </div>

    <a href="{{ route('welcome') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
</div>
@endsection
