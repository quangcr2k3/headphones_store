<!-- resources/views/admin/products/create.blade.php -->
@extends('admin.layouts.app')

@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1>QUẢN LÝ SẢN PHẨM</h1>
                    <p>Điền đầy đủ thông tin để tiến hành thêm sản phẩm mới:</p>
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

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Tên sản phẩm:</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm ...">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Hình ảnh:</strong></label>
                        <input type="file" name="image" id="image-input" class="form-control" accept="image/*">
                        <!-- Trường tải lên hình ảnh -->
                        <br><img src="" alt="Hình ảnh" id="image-preview" style="max-width: 150px; max-height: 150px;">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Mô tả:</strong></label>
                        <textarea class="form-control" style="height:150px; resize: none" name="description"
                            placeholder="Nhập mô tả sản phẩm ..."></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Đơn giá:</strong></label>
                        <input type="number" name="price" class="form-control" placeholder="Nhập đơn giá ...">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for=""><strong>Danh mục:</strong></label>
                        <select name="category_id" class="form-control">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Thêm mới</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Lắng nghe sự kiện khi tệp hình ảnh được chọn
        document.getElementById("image-input").addEventListener("change", function() {
            // Lấy thẻ <img> để hiển thị hình ảnh
            var imgPreview = document.getElementById("image-preview");

            // Kiểm tra xem có tệp hình ảnh được chọn hay không
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                // Đọc tệp hình ảnh và gán nó cho thẻ <img>
                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                };

                reader.readAsDataURL(this.files[0]);
            } else {
                // Nếu không có tệp nào được chọn, xóa hình ảnh hiển thị
                imgPreview.src = "";
            }
        });
    </script>
@endsection
