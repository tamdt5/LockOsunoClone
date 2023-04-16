@extends('admin.master')
@section('module', 'Tin tức')
@section('action', 'Danh sách')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<style>
.fa-star{
  color:#ff7f00;
}
  </style>
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
@if(Auth::user()->level==1)
<a href="{{route('admin.new.create')}}" class="fc-dayGridMonth-button btn btn-primary active">Thêm Tin Tức</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Thể loại</th>
            <th>Ẩn</th>
            <th>Sửa</th>
            <th>Xóa</th>
    </thead>
    <tbody>
      
      @foreach ($news as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tieude}}</td>
            <td>{!! $item->noidung!!}</td>
            <td>{{ $item->tentheloai}}</td>
            <td>
              @if ($item->hidden==1)
                Ẩn
              @else
                Hiện
              @endif
            </td>
            <td style="width:10%;">
              <button type="button" class="btn btn-warning"  ><a style="color:black;" href="{{route('admin.new.edit', ['id' => $item->newid]) }}">Sửa</a></button>
            </td>
            <td style="width:1%;">
              <button type="button" class="btn btn-danger" ><a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white;" href="{{route('admin.new.destroy', ['id' => $item->id]) }}">Delete</a></button>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@else
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h5><i class="icon fas fa-exclamation-triangle"></i> Chú ý</h5>
  Bạn không đủ quyền hạn để truy cập vào đây, hãy liên hệ quản lý của bạn.
  </div>
@endif
@endsection
<script src="{{asset('fontawesome/js/all.js')}}"></script>
