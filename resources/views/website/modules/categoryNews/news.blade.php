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
        <div id="content" class="blog-wrapper blog-archive page-wrapper">
          <header class="archive-page-header">
              <div class="row">
                <div class="large-12 text-center col">
                    <h1 class="page-title is-large uppercase">
                      <span>Tin tức</span>	
                    </h1>
                </div>
              </div>
          </header>
          <div class="row row-large row-divided ">
              <div class="large-9 col">
                <div class="row large-columns-1 medium-columns- small-columns-1">
                  @foreach($news as $new)
                    <div class="col post-item">
                      <div class="col-inner">
                          <a href="{{route('website.detailNews',['id' => $new->newid])}}" class="plain">
                            <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                                <div class="box-image" style="width:40%;">
                                  <div class="image-cover" style="padding-top:56%;">
                                      <img width="300" height="200" src="{{asset('images/tintuc/'.$new->hinhanhbaiviet)}}" sizes="(max-width: 300px) 100vw, 300px">  							  							  						
                                  </div>
                                </div>
                                <div class="box-text text-left">
                                  <div class="box-text-inner blog-post-inner">
                                      <h5 class="post-title is-large ">{{$new->tieude}}</h5>
                                      <div class="is-divider"></div>
                                      <p class="from_the_blog_excerpt ">{!!$new->noidung!!}</p>
                                  </div>
                                </div>
                                <div class="badge absolute top post-date badge-outline">
                                  <div class="badge-inner">
                                      <span class="">@php $d = strtotime($new->newtime); 
                                      echo date('d',$d); @endphp</span><br>
                                      <span class="">@php $d = strtotime($new->newtime); 
                                        echo 'Th'.date('m',$d); @endphp</span>
                                  </div>
                                </div>
                            </div>
                          </a>
                      </div>
                    </div>
                  @endforeach
                </div>
                {{-- <ul class="page-numbers nav-pagination links text-center">
                    <li><span aria-current="page" class="page-number current">1</span></li>
                    <li><a class="page-number" href="https://osuno.com.vn/category/tin-tuc/page/2/">2</a></li>
                    <li><a class="page-number" href="https://osuno.com.vn/category/tin-tuc/page/3/">3</a></li>
                    <li><a class="page-number" href="https://osuno.com.vn/category/tin-tuc/page/4/">4</a></li>
                    <li><a class="page-number" href="https://osuno.com.vn/category/tin-tuc/page/5/">5</a></li>
                    <li><a class="next page-number" href="https://osuno.com.vn/category/tin-tuc/page/2/"><i class="icon-angle-right"></i></a></li>
                </ul> --}}
              </div>
              <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area " role="complementary">
                    <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
                      <span class="widget-title "><span>Bài viết mới</span></span>
                      <div class="is-divider small"></div>
                      <ul>
                        @foreach($newposts as $post)
                          <li class="recent-blog-posts-li">
                            <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                <div class="flex-col mr-half">
                                  <div class="badge post-date  badge-outline">
                                      <div class="badge-inner bg-fill" style="background: url({{asset('images/tintuc/'.$post->hinhanhbaiviet)}}); border:0;">
                                      </div>
                                  </div>
                                </div>
                                <div class="flex-col flex-grow">
                                  <a href="https://osuno.com.vn/cong-ty-tnhh-ptcn-long-tien-hai-ky-ket-thoa-thuan-cap-phep-san-xuat-voi-tap-doan-connecticut-electric-ce-my/">{{$post->tieude}}</a>
                                  <span class="post_comments op-7 block is-xsmall"><a href="https://osuno.com.vn/cong-ty-tnhh-ptcn-long-tien-hai-ky-ket-thoa-thuan-cap-phep-san-xuat-voi-tap-doan-connecticut-electric-ce-my/#respond"></a></span>
                                </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    </aside>
                    <aside id="woocommerce_products-2" class="widget woocommerce widget_products">
                      <span class="widget-title "><span>Sản phẩm mới</span></span>
                      <div class="is-divider small"></div>
                      <ul class="product_list_widget">
                        @foreach($sanphammoi as $item)
                          <li>
                            <a href="https://osuno.com.vn/mua/khoa-co-kc06-new/">
                            <img width="350" height="350" src="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" sizes="(max-width: 350px) 100vw, 350px">		<span class="product-title">{{$item->tensanpham}}(New)</span>
                            </a>
                            <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item->giasanpham)}}<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                          </li>
                        @endforeach
                      </ul>
                    </aside>
                    <aside id="text-2" class="widget widget_text">
                      <div class="textwidget">
                          <div class="ck">
                            <div style="color: #555;font-weight: 700;  font-size: 18px;">1. Cam kết</div>
                            <p>Sản phẩm chính hãng</p>
                            <p>Sản phẩm mới 100%</p>
                          </div>
                          <div class="ht">
                            <div style="color: #555;font-weight: 700;  font-size: 18px;">2. Hỗ trợ 24/7</div>
                            <p>Hotline tư vấn:</p>
                            <p>1900.9292</p>
                          </div>
                      </div>
                    </aside>
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