<!-- resources/views/admin/products/show.blade.php -->
@extends('admin.layouts.app')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1>QUẢN LÝ SẢN PHẨM</h1>
                    <p>Thông tin chi tiết sản phẩm:</p>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Quay lại</a>
                </div>
            </div>
        </div>

        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <img src="{{ $product->image ? asset('images/' . $product->image) : asset('images/default.png') }}" alt="Hình ảnh" style="width: 300px; height: auto;"> <!-- Hiển thị hình ảnh -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for=""><strong>Mã sản phẩm:</strong></label>
                    {{ $product->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for=""><strong>Tên sản phẩm:</strong></label>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for=""><strong>Mô tả sản phẩm:</strong></label>
                    <div style="text-align: justify;">{{ $product->description }}</div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for=""><strong>Đơn giá:</strong></label>
                    {{ number_format($product->price) }} VND
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for=""><strong>Danh mục:</strong></label>
                    {{ $product->category->name }}
                </div>
            </div>
        </div>
    </div>
@endsection
