<!-- resources/views/admin/products/edit.blade.php -->
@extends('admin.layouts.app')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1>QUẢN LÝ SẢN PHẨM</h1>
                    <p>Cập nhật lại thông tin sản phẩm:</p>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Quay lại</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Rất tiếc!</strong> Đã xảy ra một số vấn đề với dữ liệu đầu vào của bạn.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Mã sản phẩm:</strong></label>
                        <input type="text" name="name" value="{{ $product->id }}" class="form-control" readonly>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Tên sản phẩm:</strong></label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                            placeholder="Nhập tên sản phẩm ...">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Ảnh sản phẩm hiện tại:</strong></label>
                        @if ($product->image)
                            <img src="{{ asset('images/' . $product->image) }}" alt="Ảnh sản phẩm" width="150">
                        @else
                            <p>Chưa có ảnh sản phẩm</p>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Chọn ảnh mới:</strong></label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="'"><strong>Mô tả:</strong></label>
                        <textarea class="form-control" style="height:150px; resize: none" name="description"
                            placeholder="Nhập mô tả sản phẩm ...">{{ $product->description }}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Đơn giá:</strong></label>
                        <input type="number" name="price" value="{{ $product->price }}" class="form-control"
                            placeholder="Nhập đơn giá ...">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Danh mục:</strong></label>
                        <select name="category_id" class="form-control">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
@endsection
