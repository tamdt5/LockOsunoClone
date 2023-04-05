@extends('admin.master')
@section('module', 'Sản phẩm')
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
<a href="{{route('admin.products.create')}}" class="fc-dayGridMonth-button btn btn-primary active">Thêm Sản Phẩm</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Thể Loại</th>
            <th>Đánh giá</th>
            <th>Đã Bán</th>
            <th>Tồn kho</th>
            <th>Giá sản phẩm</th>
            <th>Sửa</th>
            <th>Xóa</th>
    </thead>
    <tbody>
      
      @foreach ($products as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tensanpham}}</td>
            <td>{{ $item->tentheloai}}</td>
            <td>
              @if($item->danhgia==1)
                  <i class="fa-solid fa-star" ></i>
                  @php echo "<span style='font-style:italic'>".$item->luotdanhgia ." lượt đánh giá </span>"; @endphp
              @endif 
              @if($item->danhgia==2)
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                  @php echo "<span style='font-style:italic'>".$item->luotdanhgia ." lượt đánh giá </span>"; @endphp
              @endif
              @if($item->danhgia==3)
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i>
                  @php echo "<span style='font-style:italic'>".$item->luotdanhgia ." lượt đánh giá </span>"; @endphp
              @endif
              @if($item->danhgia==4)
                  <i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" ></i><i class="fa-solid fa-star" ></i>
                  @php echo "<span style='font-style:italic'>".$item->luotdanhgia ." lượt đánh giá </span>"; @endphp
              @endif
              @if($item->danhgia==5)
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star" ></i>
                  @php echo "<span style='font-style:italic'>".$item->luotdanhgia ." lượt đánh giá </span>"; @endphp
              @endif
            </td>
            <td>{{ $item->daban}}</td>
            <td>{{ $item->tonkho}}</td>
           
            <td> @php
             echo number_format($item->giasanpham,0); @endphp</td>
            <td style="width:1%;">
              <button type="button" class="btn btn-warning" ><a style="color:black;" href="{{route('admin.products.edit', ['id' => $item->productid]) }}">Edit</a></button>
            </td>
            <td style="width:1%;">
              <button type="button" class="btn btn-danger" ><a onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white;" href="{{route('admin.products.destroy', ['id' => $item->id]) }}">Delete</a></button>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection
<script src="{{asset('fontawesome/js/all.js')}}"></script>
