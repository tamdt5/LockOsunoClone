@extends('admin.master')
@section('module', 'Tin tức')
@section('action', 'Xem thông tin')

@section('content')
<form action="{{ route('admin.new.update', ['id' => $new->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <strong>{{$new->tieude}}</strong></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" name="tieude" class="form-control" placeholder="Vui lòng nhập họ tên nhân viên" value="{{old('tieude',$new->tieude)}}">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</em></label>
                        <textarea class="form-control" name="noidung" cols="30" rows="10">{{ old('noidung', $new->noidung) }}</textarea>
                        <script>CKEDITOR.replace('noidung')</script>
                    </div>
                    <div class="form-group" style="width:50%">
                        <label>Thể loại</label>
                        <select class="form-control" name="theloai" style="width:250px;">
                            <option value="6" {{ old('theloai',$new->theloai) == '6' ? 'selected' : '' }}>Tin dạng Video</option>
                            <option value="7" {{ old('theloai',$new->theloai) == '7' ? 'selected' : '' }}>Tin tức</option>
                            <option value="8" {{ old('theloai',$new->theloai) == '8' ? 'selected' : '' }}>Hình ảnh thực tế</option>
                            <option value="5" {{ old('theloai',$new->theloai) == '5' ? 'selected' : '' }}>Giải thưởng</option>
                            <option value="9" {{ old('theloai',$new->theloai) == '9' ? 'selected' : '' }}>Tin Tuyển dụng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ẩn tin tức, người dùng sẽ không thấy tin này ngoài trang chủ </label>
                        <select class="form-control" name="hidden" style="width:100px;">
                            <option value="0" {{ old('hidden',$new->hidden) == 0 ? 'selected' : '' }}>Không</option>
                            <option value="1" {{ old('hidden',$new->hidden) == 1 ? 'selected' : '' }}>Có</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        @php
                            $image = !empty($new->hinhanhbaiviet) ? $new->hinhanhbaiviet : 'default.jpg';
                        @endphp
                        <label>Hình ảnh bài viết</label>
                        <div class="form-group">
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="{{asset('images/tintuc/'.$image)}}"
                                    alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;width:50%">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Đổi hình ảnh bài viết</label>
                        <input type="file" id="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload" class="form-control" name="hinhanhbaiviet">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function (e) {
 
   
 $('#image').change(function(){
          
  let reader = new FileReader();

  reader.onload = (e) => { 

    $('#preview-image-before-upload').attr('src', e.target.result); 
  }

  reader.readAsDataURL(this.files[0]); 
 
 });
 
});
</script>
@endsection