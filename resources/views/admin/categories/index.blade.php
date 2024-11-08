<!-- resources/views/admin/categories/index.blade.php -->
@extends('admin.layouts.app')
@section('content_admin')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h1>QUẢN LÝ DANH MỤC</h1>
                <p>Dưới đây là danh sách các danh mục sản phẩm đã được thêm vào:</p>
                <a class="btn btn-success" href="{{ route('admin.categories.create') }}"> Thêm mới</a>
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
                    <th>DANH MỤC</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{-- <a class="btn btn-info" href="{{ route('admin.categories.show', $category->id) }}">Xem</a> --}}
                            <a class="btn btn-primary" href="{{ route('admin.categories.edit', $category->id) }}">Sửa</a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                style="display:inline">
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
