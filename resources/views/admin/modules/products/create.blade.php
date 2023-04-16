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
                            <label>Giá sản phẩm</label>
                            <input id="giasanpham" style="width:250px;" type="number" name="giasanpham" class="form-control" step="500000" value=''>
                        </div> 
                        <div class="form-group"style="width:50%">
                            <label>Mã sản phẩm</label>
                            <input id="masanpham" style="width:250px;" type="text" name="masanpham" class="form-control"  value=''>
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
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                @php
                                    $image = !empty($products->hinhanhsanpham) ? $products->hinhanhsanpham : 'default.jpg';
                                @endphp
                                <label>Hình ảnh sản phẩm chính hiện tại</label>
                                <div class="form-group">
                                    <div class="col-md-12 mb-2">
                                        <img class="preview-image-before-upload1" src="{{asset('images/sanpham/'.$image)}}"
                                            alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;width:50%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Đổi hình ảnh sản phẩm chính</label>
                                <input type="file" class="image1" aria-describedby="inputGroupFileAddon04" aria-label="Upload" class="form-control" name="hinhanhsanpham">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                @php
                                    $image = !empty($products->hinhanhsanpham2) ? $products->hinhanhsanpham2 : 'default.jpg';
                                @endphp
                                <label>Hình ảnh sản phẩm 2</label>
                                <div class="form-group">
                                    <div class="col-md-12 mb-2">
                                        <img class="preview-image-before-upload2" src="{{asset('images/sanpham/'.$image)}}"
                                            alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;width:50%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Đổi hình ảnh sản phẩm 2</label>
                                <input type="file" class="image2" aria-describedby="inputGroupFileAddon04" aria-label="Upload" class="form-control" name="hinhanhsanpham2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                @php
                                    $image = !empty($products->hinhanhsanpham3) ? $products->hinhanhsanpham3 : 'default.jpg';
                                @endphp
                                <label>Hình ảnh sản phẩm 3</label>
                                <div class="form-group">
                                    <div class="col-md-12 mb-2">
                                        <img class="preview-image-before-upload3" src="{{asset('images/sanpham/'.$image)}}"
                                            alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;width:50%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Đổi hình ảnh sản phẩm 3</label>
                                <input type="file" class="image3" aria-describedby="inputGroupFileAddon04" aria-label="Upload" class="form-control" name="hinhanhsanpham3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                @php
                                    $image = !empty($products->hinhanhsanpham4) ? $products->hinhanhsanpham4 : 'default.jpg';
                                @endphp
                                <label>Hình ảnh sản phẩm thứ 4</label>
                                <div class="form-group">
                                    <div class="col-md-12 mb-2">
                                        <img class="preview-image-before-upload4" src="{{asset('images/sanpham/'.$image)}}"
                                            alt="Hãy nhập hình ảnh" style="max-height: 350px;border-radius:20px;width:50%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Đổi hình ảnh sản phẩm 4</label>
                                <input type="file" class="image4" aria-describedby="inputGroupFileAddon04" aria-label="Upload" class="form-control" name="hinhanhsanpham4">
                            </div>
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
                                <option value="toanquoc" {{ old('lapdat') == 'toanquoc' ? 'selected' : '' }}>Toàn quốc</option>
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
     
       
     $('.image1').change(function(){
              
      let reader = new FileReader();
    
      reader.onload = (e) => { 
    
        $('.preview-image-before-upload1').attr('src', e.target.result); 
      }
    
      reader.readAsDataURL(this.files[0]); 
     
     });
    
     $('.image1').change(function(){
              
              let reader = new FileReader();
            
              reader.onload = (e) => { 
            
                $('.preview-image-before-upload1').attr('src', e.target.result); 
              }
            
              reader.readAsDataURL(this.files[0]); 
             
             });
    
    $('.image2').change(function(){
    
    let reader = new FileReader();
    
    reader.onload = (e) => { 
    
    $('.preview-image-before-upload2').attr('src', e.target.result); 
    }
    
    reader.readAsDataURL(this.files[0]); 
    
    });
    
    $('.image3').change(function(){
              
              let reader = new FileReader();
            
              reader.onload = (e) => { 
            
                $('.preview-image-before-upload3').attr('src', e.target.result); 
              }
            
              reader.readAsDataURL(this.files[0]); 
             
             });
    $('.image4').change(function(){
              
              let reader = new FileReader();
            
              reader.onload = (e) => { 
            
                $('.preview-image-before-upload4').attr('src', e.target.result); 
              }
            
              reader.readAsDataURL(this.files[0]); 
             
             });
     
    });
    
    </script>
@endsection