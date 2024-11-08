<!-- resources/views/admin/products/index.blade.php -->
@extends('admin.layouts.app')
@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h1>QUẢN LÝ SẢN PHẨM</h1>
                <p>Dưới đây là danh sách các sản phẩm đã được thêm vào:</p>
                <a class="btn btn-success" href="{{ route('admin.products.create') }}"> Thêm mới</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>MÃ</th>
                    <th>HÌNH ẢNH</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>DANH MỤC</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <img src="{{ $product->image ? asset('images/' . $product->image) : asset('images/default.png') }}" alt="Hình ảnh" style="width: 100px; height: auto;"> <!-- Hiển thị hình ảnh -->
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price) }} VND</td>
                        <td>{{ $product->category->name }}</td> <!-- Hiển thị tên danh mục -->
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.products.show', $product->id) }}">Xem</a>
                            <a class="btn btn-primary" href="{{ route('admin.products.edit', $product->id) }}">Sửa</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
