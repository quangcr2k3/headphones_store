<!-- resources/views/admin/categories/create.blade.php --> 
@extends('admin.layouts.app') 
 
@section('content_admin') 
<div class="container"> 
    <div class="row"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-left"> 
                <h1>QUẢN LÝ DANH MỤC</h1>
                <p>Điền đầy đủ thông tin để tiến hành thêm loại danh mục mới :</p> 
            </div> 
            <div class="pull-right"> 
                <a class="btn btn-primary" href="{{ route('admin.categories.index') }}"> Quay lại</a> 
            </div> 
        </div> 
    </div> 
 
    <form action="{{ route('admin.categories.store') }}" method="POST"> 
        @csrf 
        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group"> 
                    <label for=""><strong>Tên danh mục:</strong></label> 
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục ..."> 
                </div> 
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
                <button type="submit" class="btn btn-success">Thêm mới</button> 
            </div> 
        </div> 
    </form> 
</div> 
@endsection 