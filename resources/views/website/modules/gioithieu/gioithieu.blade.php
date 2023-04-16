<html lang="vi" class="js" style="height: 100%;">
  <!--
	<![endif]-->
	<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
/>
<!-- Font Awesome -->
<link
    rel="stylesheet"
    href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('admin/plugins/fullcalendar/main.css') }}">

<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css?v=3.2.0') }}">
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}" />


<script src="{{ asset('admin/plugins/ckeditor/ckeditor.js') }}"></script>
	@include('website.partials.head') <body data-rsssl="1" class="product-template-default single single-product postid-243 theme-flatsome ot-vertical-menu woocommerce woocommerce-page woocommerce-js yith-wcan-pro woo-variation-swatches wvs-theme-mica wvs-theme-child-flatsome wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label lightbox nav-dropdown-has-arrow" style="position: relative; min-height: 100%; top: 0px;">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
	
    <div id="wrapper">
      <header id="header" class="header has-sticky sticky-jump">
        <div class="header-wrapper">
          @include('website.partials.head-static')
		 
          <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
          </div>
        </div>
      </header>
      @if ($errors->any())
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5 style="color:white;font-weight:700;font-size:19px;"><i class="icon fas fa-ban"></i> Alert!</h5>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </div>
          @endif
    @if (Session::get('cskh_success'))
    <div class="alert alert-success alert-dismissible" style="background-color: green;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5 style="color:white;font-weight:700;font-size:19px;"><i class="icon fas fa-check" style="color:white;font-weight:700;font-size:19px;"></i> Đăng đánh giá thành công</h5>
      {{ Session::get('cskh_success') }}
    </div>
    @endif
      @if (Session::get('feedback_success'))
      <div class="alert alert-success alert-dismissible" style="background-color: green;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5 style="color:white;font-weight:700;font-size:19px;"><i class="icon fas fa-check" style="color:white;font-weight:700;font-size:19px;"></i> Đăng đánh giá thành công</h5>
        {{ Session::get('feedback_success') }}
      </div>
@endif
        <main id="main" class="">
            <div id="content" class="content-area page-wrapper" role="main">
                <div class="row row-main">
                    <div class="large-12 col">
                        <div class="col-inner">
                            <section class="section" id="section_978497907">
                                <div class="bg section-bg fill bg-fill bg-loaded">
                                </div>
                                <div class="section-content relative">
                                    <div class="row" id="row-917842483">
                                        <div class="col small-12 large-12">
                                            <div class="col-inner">
                                                <p><strong>I.GIỚI THIỆU CHUNG</strong></p>
                                                <p>Thành lập năm 2014, <strong>Công ty TNHH Phát triển Công nghệ Long Tiến Hải</strong>&nbsp; là đơn vị hàng đầu trong lĩnh vực nhập khẩu, sản xuất và phần phối các sản phẩm <strong>khóa cửa thông minh, khóa chống trộm xe máy, thiết bị định vị GPS</strong> với thương hiệu <strong>OSUNO</strong>. Các sản phẩm dẫn đầu xu thế với các tính năng hiện đại và tiện lợi như mở bằng face-ID, vân tay, mã số, thẻ từ, điều khiển từ xa, tích hợp mở qua App trên điện thoại thông minh . <strong>Uy tín – Chất lượng – Bảo mật</strong> là những giá trị vượt trội đưa thương hiệu OSUNO không ngừng vươn xa.</p>
                                                <p><strong>II. SẢN PHẨM NỔI BẬT</strong></p>
                                                <ul>
                                                    <li>Khóa cửa thông minh</li>
                                                    <li>Khóa chống trộm xe máy</li>
                                                    <li>Bộ định vị giám sát hành trình xe máy</li>
                                                    <li>Ổ cắm, Công tắc điện thông minh</li>
                                                    <li>Sản xuất và phân phối Giắc/Cos</li>
                                                </ul>
                                                <p><strong>III.&nbsp;THÀNH TỰU</strong></p>
                                                <p><strong><em>Năm 2014</em></strong>:&nbsp; Đạt danh hiệu “<strong>Thương hiệu tiêu biểu vì người tiêu dùng</strong>“.</p>
                                                <p><strong><em>Năm 2015</em></strong>: Nằm trong “<strong>TOP 50 thương hiệu – Nhãn hiệu nổi tiếng</strong>“.</p>
                                                <p><strong><em>Năm 2017</em></strong>: Vượt mốc 1000 đại lý/63 tỉnh thành trên toàn quốc.</p>
                                                <p><strong><em>Năm 2018</em></strong>: Ra mắt thị trường 2 dòng sản phẩm chủ đạo: Thiết bị định vị OSUNO GPS và khóa cửa thông minh thương hiệu OSUNO.</p>
                                                <p><strong><em>Năm 2019</em></strong>: Nằm trong “TOP sản phẩm bán chạy nhất thị trường Hà Nội”</p>
                                                <p><em><strong>Năm 2020:</strong></em> Đã có hệ thống đại lý khóa thông minh tại nhiều tỉnh thành trên cả nước.</p>
                                                <p><em><strong>Năm 2022:</strong></em> OSUNO là thương hiệu khóa cửa điện tử đầu tiên tại Việt Nam đạt tiêu chuẩn chống cháy EI70.</p>
                                                <p><strong>V. TẦM NHÌN</strong></p>
                                                <p>Tiếp tục khẳng định vị thế thương hiệu <strong>khóa thông minh</strong> hàng đầu ở Việt Nam, đẩy mạnh phát triển ở khu vực Đông Nam Á, từng bước trở thành thương hiệu toàn cầu trong lĩnh vực <strong>smarthome.</strong></p>
                                                <p><strong>VI. PHƯƠNG CHÂM HÀNH ĐỘNG</strong></p>
                                                <ul>
                                                    <li>Quyết liệt</li>
                                                    <li>Chuyên nghiệp</li>
                                                    <li>Liên kết</li>
                                                    <li>Tận tâm</li>
                                                </ul>
                                                <p><strong>VII. GIÁ TRỊ CỐT LÕI</strong></p>
                                                <ul>
                                                    <li><em><strong>CÔNG NGHỆ</strong></em></li>
                                                </ul>
                                                <p><strong>Khóa cửa thông minh OSUNO</strong> được áp dụng công nghệ mã hóa thông minh hàng đầu của Nhật Bản. Sản phẩm được <strong>bảo mật, an toàn</strong> tuyệt đối khi sử dụng bộ cảm biến vân tay chống làm giả, lõi khóa cao cấp loại C. Các chức năng được kích hoạt và làm việc hoàn toàn tự động.</p>
                                                <ul>
                                                    <li><strong><em>CHẤT LƯỢNG</em></strong></li>
                                                </ul>
                                                <p><strong>Khóa cửa thông minh OSUNO</strong> là sự kết hợp giữa công nghệ tiên tiến – dây chuyền sản xuất hiện đại – vật liệu chất lượng hàng đầu, tạo ra những sản phẩm có chất lượng vượt trội. Được Cục Đăng kiểm chất lượng chứng nhận là thiết bị chống trộm chất lượng cao.</p>
                                                <ul>
                                                    <li><em><strong>DỊCH VỤ</strong></em></li>
                                                </ul>
                                                <p>Mạng lưới không ngừng mở rộng, phong cách phục vụ <strong>chuyên nghiệp, tận tâm</strong>, tư vấn <strong>hotline 24/7</strong>, thời gian bảo hành lên đến <strong>24 thán</strong>g, hỗ trợ kĩ thuật <strong>TRỌN ĐỜI.</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style scope="scope">
                                    #section_978497907 {
                                    padding-top: 30px;
                                    padding-bottom: 30px;
                                    }
                                </style>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      @include('website.partials.footer')
	  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('fontawesome/js/all.js')}}"></script>

<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/fullcalendar/main.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script src="{{ asset('admin/js/demo.js') }}"></script>
      <div class="container">
        <div class="">
          <div class="row">
            <div class="col large-12 col-title">
              <div class="title">Sản phẩm bán chạy</div>
            </div>
          </div>
      </div> @include('website.partials.diachishowroom') @include('website.partials.footer') @include('website.partials.script')
      <!-- Mobile Sidebar -->