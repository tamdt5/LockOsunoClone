@extends('admin.master')
@section('module', 'Sản phẩm')
@section('action', 'Edit')
@section('content')
<form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Tạo mới sản phẩm </h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group" style="width:50%">
                            <label>Tên sản phẩm</label>
                            <input type="text" name="tensanpham" style="width:250px;" class="form-control" placeholder="Vui lòng nhập tên sản phẩm" value="">
                        </div>
                        <div class="form-group" style="width:50%">
                            <label>Thể loại sản phẩm </label>
                            <select class="form-control" name="theloai" style="width:250px;">
                                @php 
                                    foreach($categories as $category)
                                    {
                                        echo "<option value='".$category->id."'>".$category->tentheloai."</option>";
                                    }
                                @endphp
                            </select>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="form-group"style="width:50%">
                            <label>Số lượng nhập kho</label>
                            <input  style="width:250px;" type="number" name="tonkho" class="form-control" step="10" value=''>
                        </div> 
                        <div class="form-group"style="width:50%">
                            <label>Giá sản phẩm</label>
                            <input id="giasanpham" style="width:250px;" type="number" name="giasanpham" class="form-control" step="500000" value=''>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="form-group" style="width:100%">
                            <label>Thông số kỹ thuật</label>
                            <textarea class="form-control" name="thongsokythuat" cols="30" rows="10"></textarea>
                            <script>CKEDITOR.replace('thongsokythuat')</script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="{{asset('images/default.jpg')}}"
                                    alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;">
                            </div>
                            <label>Hình ảnh sản phẩm</label>
                            <input type="file" id="image" class="form-control" name="hinhanhsanpham">
                        </div>
                    </div>
               </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group" style="margin-right:20px;width:40%;">
                            <label>Tính năng sản phẩm</label>
                            <input type="text" name="tinhnang" class="form-control" placeholder="Vân tay, mã số, thẻ từ, chìa cơ..." value="{{old('tinhnang')}}">
                        </div>
                        <div class="form-group">
                            <label>Công nghệ của</label>
                            <input type="text" name="congnghe" class="form-control" placeholder="Nhật Bản, Hàn Quốc,..." value="{{old('congnghe')}}">
                        </div>
                        <div class="form-group" style="margin-left:20px;">
                            <label>Thương hiệu</label>
                            <input type="text" name="thuonghieu" class="form-control" placeholder="ASANZO,OSUNO,v.v" value="{{old('thuonghieu')}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="form-group" style="width:50%">
                            <label>Bảo hành trong</label>
                            <select class="form-control" name="baohanh" style="width:250px;">
                                <option value="6" {{ old('type') == '6' ? 'selected' : '' }}>6 tháng</option>
                                <option value="12" {{ old('type') == '12' ? 'selected' : '' }}>12 tháng</option>
                                <option value="24" {{ old('type') == '24' ? 'selected' : '' }}>24 tháng</option>
                                <option value="36" {{ old('type') == '36' ? 'selected' : '' }}>36 tháng</option>
                            </select>
                        </div>
                        <div class="form-group" style="width:50%">
                            <label>Lắp đặt</label>
                            <select class="form-control" name="lapdat" style="width:250px;">
                                <option value="lapdat" {{ old('lapdat') == 'toanquoc' ? 'selected' : '' }}>Toàn quốc</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group" style="width:100%">
                    <label>Nội dung sản phẩm</label>
                    <textarea class="form-control" name="noidungsanpham" cols="30" rows="10">{{ old('noidungsanpham') }}</textarea>
                    <script>CKEDITOR.replace('noidungsanpham')</script>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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