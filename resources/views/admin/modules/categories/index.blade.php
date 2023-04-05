@extends('admin.master')
@section('module', 'Danh mục')
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
<a href="{{route('admin.categories.create')}}" class="fc-dayGridMonth-button btn btn-primary active">Thêm Thể Loại</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Icon</th>
            <th>Tên danh mục</th>
            <th>Danh mục đang ẩn</th>
            <th>Thể loại của danh mục</th>
            <th>Sửa</th>
            <th>Xóa</th>
    </thead>
    <tbody>
      @foreach ($categories as $item)
        <tr>
            <td style="font-weight:799">{{ $loop->iteration }}</td>
            <td style="font-weight:799;width:5%;"><i style="font-size:25px;" class='fas {{ $item->icon}}'></i></td>
            <td style="font-weight:799;">{{ $item->tentheloai}}</td>
            <td>@php
              if($item->hidden==0)
              {
                echo'Không';
              }
              if($item->hidden==1)
              {
                echo'Có';
              }
          @endphp
            </td>
            <td>@php
              if($item->type=='sanpham')
              {
                echo'Sản phẩm';
              }
              if($item->type=='video')
              {
                echo'Video';
              }
              if($item->type=='tintuc')
              {
                echo'Tin tức';
              }
              if($item->type=='hinhanhthucte')
              {
                echo'Hình ảnh thực tế';
              }
              if($item->type=='others')
              {
                echo'others';
              }
              if($item->type=='giaithuong')
              {
                echo'Giải thưởng';
              }
          @endphp</td>
          
            <td style="width:1%;">
              <button type="button" class="btn btn-warning " ><a style="color:black;" href="{{route('admin.categories.edit', ['id' => $item->id]) }}">Edit</a></button>
            </td>
            <td style="width:1%;">
              <button type="button" class="btn btn-danger"><a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white;" href="{{route('admin.categories.destroy', ['id' => $item->id]) }}">Delete</a></button>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
