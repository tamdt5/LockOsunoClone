@extends('admin.master')
@section('module', 'Nhân viên')
@section('action', 'Tạo mới')

@section('content')
<form action="{{ route('admin.users.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tạo mới nhân viên</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Vui lòng nhập họ tên nhân viên" value="">
                    </div>
                    <div class="form-group">
                        <label>Email <em> (tài khoản để đăng nhập)</em></label>
                        <input type="email" name="email" class="form-control" placeholder="Vui lòng nhập tài khoản đăng nhập" value="">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu <em> (Mật khẩu để đăng nhập)</em></label>
                        <input type="password" name="password" class="form-control" placeholder="Vui lòng nhập mật khẩu" value="">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Please enter password confirmation">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại<em> (ví dụ: 0772752531)</em></label>
                        <div class="input-group mb-3" style="width:300px;">
                            <img src="{{asset('images/vietnam.webp')}}" style="width:50px;">
                            <input type="tel" class="form-control" name="phone"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                            required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Chức vụ</label>
                        <div class="input-group mb-3" style="width:300px;">
                            <select class="form-control" name="level" style="width:150px;">
                                <option value="1">Giám đốc</option>
                                <option value="2">Nhân viên</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload" src="{{asset('images/default.jpg')}}"
                                alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;">
                        </div>
                        <label>Hình ảnh đại diện</label>
                        <input type="file" id="image" class="form-control" name="avatar">
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