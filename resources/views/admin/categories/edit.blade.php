<!-- resources/views/admin/categories/edit.blade.php --> 
@extends('admin.layouts.app') 
 
@section('content_admin') 
<div class="container"> 
    <div class="row"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-left"> 
                <h1>QUẢN LÝ DANH MỤC</h1>
                <p>Cập nhật lại thông tin danh mục:</p> 
            </div> 
            <div class="pull-right"> 
                <a class="btn btn-primary" href="{{ route('admin.categories.index') }}"> Quay lại</a> 
            </div> 
        </div> 
    </div> 
 
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST"> 
        @csrf 
        @method('PUT') 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for=""><strong>Mã danh mục:</strong></label>
                    <input type="text" name="id" value="{{ $category->id }}" class="form-control" readonly>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group"> 
                    <label for=""><strong>Tên danh mục:</strong></label> 
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Nhập tên danh mục ..."> 
                </div> 
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
                <button type="submit" class="btn btn-success">Cập nhật</button> 
            </div> 
        </div> 
    </form> 
</div> 
@endsection