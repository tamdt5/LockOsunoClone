@extends('admin.master')
@section('module', 'Nhân viên')
@section('action', 'Xem thông tin')

@section('content')
<form action="{{ route('admin.users.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Xem thông tin nhân viên <strong>{{$user->fullname}}</strong></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input disabled type="text" name="fullname" class="form-control" placeholder="Vui lòng nhập họ tên nhân viên" value="{{old('fullname',$user->fullname)}}">
                    </div>
                    <div class="form-group">
                        <label>Email <em> (tài khoản để đăng nhập)</em></label>
                        <input disabled type="email" name="email" class="form-control" placeholder="Vui lòng nhập tài khoản đăng nhập" value="{{old('email',$user->email)}}">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại<em> (ví dụ: 0772752531)</em></label>
                        <div class="input-group mb-3" style="width:300px;">
                            <img src="{{asset('images/vietnam.webp')}}" style="width:50px;">
                            <input disabled type="tel" class="form-control" name="phone" value="{{old('phone',$user->phone)}}"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                            required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Chức vụ</label>
                        <div class="input-group mb-3" style="width:300px;">
                            <select disabled class="form-control" name="level" style="width:150px;">
                                <option value="1" @if($user->level==1) selected @endif>
                                    Giám đốc
                                </option>
                                <option value="2" @if($user->level!=1) selected @endif>
                                    Nhân viên
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Hình ảnh đại diện</label>
                        @php
                            $image = !empty($user->avatar) ? $user->avatar : 'default.jpeg';
                        @endphp
                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload" src="{{asset('images/nhanvien/'.$image)}}"
                                alt="Hãy nhập hình ảnh" style="max-height: 200px;border-radius:20px;">
                        </div>
                    </div>
                </div>
            </div>
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