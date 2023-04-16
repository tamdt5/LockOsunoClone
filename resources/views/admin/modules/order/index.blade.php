@extends('admin.master')
@section('module', 'Hóa đơn')
@section('action', 'Danh sách')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
  
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endpush

@section('content')
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Họ và tên</th>
            <th>Địa chỉ</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng</th>
            <th>Tình trạng</th>
            <th>Ngày tạo đơn</th>
            <th>Ngày cập nhật</th>
            <th>Sửa</th>
            <th>Xóa</th>
    </thead>
    <tbody>
      {{-- @php dd($order);@endphp --}}
      
      @foreach ($order as $item)
        {{-- @php dd($item) @endphp --}}
        <tr>
            <td style="font-weight:799">HD{{ $item['id'] }}</td>
            <td style="font-weight:799;width:5%;">{{$item['hoten']}}</td>
            <td style="font-weight:799;">{{ $item['diachi']}}</td>
            <td>@foreach ($item['tensanpham'] as $i)
              {{$i}}<br>
            @endforeach</td>
            <td>@foreach ($item['quantity'] as $i)
              {{$i}}<br>
            @endforeach</td>
            <td>@foreach ($item['price'] as $i)
              {{number_format($i)}} đ<br>
            @endforeach</td>
            <td>{{$item['totalprice']}}</td>
            <td>{{$item['status'] == 0 ? 'Đang xử lý' : 'Đã xử lý' }}</td>
            <td>{{$item['created_at']  }}</td>
            <td>{{$item['updated_at'] ? $item['updated_at'] : '' }}</td>
            <td style="width:1%;">
              <button type="button" class="btn btn-warning " ><a style="color:black;" href="{{route('admin.order.edit', ['id' => $item['id']]) }}">Edit</a></button>
            </td>
            <td style="width:1%;">
              <button type="button" class="btn btn-danger"><a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white;" href="{{route('admin.order.destroy', ['id' => $item['id']]) }}">Delete</a></button>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
