@extends('admin.master')
@section('module', 'Danh mục')
@section('action', 'Tạo mới')

@section('content')
<form action="{{ route('admin.categories.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tạo mới danh mục</h3>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="tentheloai" class="form-control" placeholder="Vui lòng nhập tên thể loại" value="">
            </div>
            <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="type" style="width:150px;">
                    <option value="sanpham">Sản phẩm</option>
                    <option value="others">Khác</option>
                </select>
            </div>

            <div class="form-group">
                <label>Ẩn danh mục, người dùng sẽ không thấy mục này ngoài trang chủ </label>
                <select class="form-control" name="hidden" style="width:100px;">
                    <option value="0">Không</option>
                    <option value="1">Có</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>
@endsection