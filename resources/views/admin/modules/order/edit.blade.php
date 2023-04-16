@extends('admin.master')
@section('module', 'Hóa đơn')
@section('action', 'Sửa')

@section('content')
<form action="{{ route('admin.order.update', ['id' => $order['id']]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thông tin mã đơn hàng <span style='font-weight:700;'>HD{{$order['id']}}</span></h3>
        </div>

        <div class="card-body">

            <div class="form-group">
                <label>Họ tên người đặt hàng</label>
                <input disabled type="text" name="hoten" class="form-control" value="{{ old('hoten', $order['hoten']) }}">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input disabled type="text" name="diachi" class="form-control" value="{{ old('diachi', $order['diachi']) }}">
            </div>
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                   <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tên sản phẩm</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Số lượng</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Thành tiền</th>
                   </tr>
                </thead>
                <tbody>
                   <tr class="odd">
                    <td>@foreach ($order['tensanpham'] as $i)
                        <input disabled type="text" value="{{$i}}" name="tensanpham[]"><br>
                      @endforeach</td>
                      <td>@foreach ($order['quantity'] as $i)
                        <input disabled type="text" value="{{$i}}" name="quantity[]"><br>
                      @endforeach</td>
                      <td>@foreach ($order['price'] as $i)
                        <input disabled type="text" value="{{number_format($i)}}" name="price[]"> đ<br>
                      @endforeach</td>
                   </tr>
                </tbody>
                <tfoot>
                   <tr>
                      <th rowspan="1" colspan="1">Tổng tiền</th>
                      <th rowspan="1" colspan="2">{{$order['totalprice']}}</th>
                   </tr>
                </tfoot>
             </table>
             <div class="form-group">
                <label>Tình trạng xử lý</label>
                <select class="form-control" name="status" style="width:50%;">
                    <option value="0" {{ old('status',$order['status']) == 0 ? 'selected' : '' }}>Đang xử lý</option>
                    <option value="1" {{ old('status',$order['status']) == 1 ? 'selected' : '' }}>Đã xử lý</option>
                </select>
            </div>
             <div class="form-group" style="width:100%">
                <label>Ghi chú</label>
                <textarea class="form-control" name="note" cols="30" rows="10">{{ old('note', $order['note']) }}</textarea>
                <script>CKEDITOR.replace('note')</script>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
</form>
@endsection