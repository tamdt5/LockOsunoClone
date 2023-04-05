@extends('admin.master')
@section('module', 'Danh mục')
@section('action', 'Sửa')

@section('content')
<form action="{{ route('admin.categories.update', ['id' => $categories->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa danh mục <span style='font-weight:700;'>{{$categories->tentheloai}}</span></h3>
        </div>

        <div class="card-body">

            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="tentheloai" class="form-control" placeholder="Vui lòng nhập tên thể loại" value="{{ old('tentheloai', $categories->tentheloai) }}">
            </div>
            <div class="form-group">
                <label>Thể loại danh mục</label>
                <select class="form-control" name="type" style="width:200px;">
                    <option value="sanpham" {{ old('type',$categories->type) == 'sanpham' ? 'selected' : '' }}>Sản Phẩm</option>
                    <option value="giaithuong" {{ old('type',$categories->type) == 'giaithuong' ? 'selected' : '' }}>Giải Thưởng</option>
                    <option value="video" {{ old('type',$categories->type) == 'video' ? 'selected' : '' }}>Video</option>
                    <option value="tintuc" {{ old('type',$categories->type) == 'tintuc' ? 'selected' : '' }}>Tin tức</option>
                    <option value="hinhanhthucte" {{ old('type',$categories->type) == 'hinhanhthucte' ? 'selected' : '' }}>Hình ảnh thực tế</option>
                    <option value="others" {{ old('type',$categories->type) == 'others' ? 'selected' : '' }}>Khác</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ẩn danh mục, người dùng sẽ không thấy mục này ngoài trang chủ </label>
                <select class="form-control" name="hidden" style="width:100px;">
                    <option value="0" {{ old('hidden',$categories->hidden) == 0 ? 'selected' : '' }}>Không</option>
                    <option value="1" {{ old('hidden',$categories->hidden) == 1 ? 'selected' : '' }}>Có</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>
@endsection