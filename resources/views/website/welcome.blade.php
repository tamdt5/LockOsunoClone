<html lang="vi" class="js" style="height: 100%;">
   
   <!--<![endif]-->
   @include('.website.partials.head')
   <body data-rsssl="1" class="home page-template-default page page-id-16 theme-flatsome ot-vertical-menu woocommerce-js yith-wcan-pro woo-variation-swatches wvs-theme-mica wvs-theme-child-flatsome wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label lightbox nav-dropdown-has-arrow" style="position: relative; min-height: 100%; top: 0px;">
      <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
      <div id="wrapper">
         <header id="header" class="header has-sticky sticky-jump">
            @include('.website.partials.head-static')
         </header>
         <main id="main" class="">
            
            <div id="content" class="content-area page-wrapper" role="main">
               <div class="row row-main">
                  <div class="large-12 col">
                     <div class="col-inner">
                        @include('website.partials.col-inner')
                        <section class="section sp-chay pd0 title-sp home-pr" id="section_1613341932">
                           <div class="bg section-bg fill bg-fill bg-loaded">
                           </div>
                           <div class="section-content relative">
                              <div class="container section-title-container see-all">
                                 <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:80%;"><i class="far fa-star"></i>Sản phẩm bán chạy</span><b></b><a href="{{route('website.sanphambanchay',['tentheloai' => 'banchay'])}}" target="">Xem tất cả<i class="icon-angle-right"></i></a></h3>
                              </div>
                              <div class="row  equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small">
                                 @if (Session::get('payment_success'))
                                 <div class="alert alert-success alert-dismissible" style="background-color: green;">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5 style="color:white;font-weight:700;font-size:19px;"><i class="icon fas fa-check" style="color:white;font-weight:700;font-size:19px;"></i> Đã thanh toán thành công <br> {{ Session::get('payment_success') }}</h5>
                                 </div>
                                 @endif
                                 @foreach($spbanchay as $item)
                                 <div class="col">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1"></div>
                                       <div class="product-small box has-hover box-normal box-text-bottom">
                                          <div class="box-image">
                                             <div class="">
                                                <a href="{{route('website.detailProduct',['tensanpham' => $item->tensanpham])}}">
                                                <img width="350" height="350" src="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" class="" alt="" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" sizes="(max-width: 1080px) 100vw, 1080px">									</a>
                                             </div>
                                             <div class="image-tools top right show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text text-center">
                                             <div class="title-wrapper">
                                                <p class="name product-title" style="height: 41px;"><a href="{{route('website.detailProduct',['tensanpham' => $item->tensanpham])}}">{{$item->tensanpham}}</a></p>
                                             </div>
                                             <div class="price-wrapper" style="height: 52.7969px;">
                                                <div style="text-align:center;"title="Rated 5 out of 5">
                                                   <span style="width:100%;text-align:center;color:#ffc107">@php
                                                      $i=0;
                                                      $count=$item->danhgia;
                                                      do {
                                                         echo "<i class='fas fa-star'></i>";
                                                         $i++;
                                                      } while ($i<$count); 
                                                      @endphp
                                                   </span>
                                                </div>
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>@php echo number_format($item->giasanpham) @endphp<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <style scope="scope">
                              #section_1613341932 {
                              padding-top: 0px;
                              padding-bottom: 0px;
                              }
                           </style>
                        </section>
                        @foreach($sanpham as $item)
                        <section class="section sp-chay pd0 title-sp home-pr" id="section_308047023">
                           <div class="bg section-bg fill bg-fill  bg-loaded">
                           </div>
                           <div class="section-content relative">
                              <div class="container section-title-container see-all">
                                 <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:80%;">		<i class=" fas {{$item['icon']}}" data-icon-label="1">
                                    </i>{{$item['name']}}</span><b></b><a href="{{route('website.detailCategory',['tentheloai' => $item['name']])}}" target="">Xem tất cả<i class="icon-angle-right"></i></a>
                                 </h3>
                              </div>
                              <div class="row  equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small">
                                 @foreach($item['sanpham'] as $sanpham)
                                 <div class="col">
                                    <div class="col-inner">
                                       <div class="badge-container absolute left top z-1"></div>
                                       <div class="product-small box has-hover box-normal box-text-bottom">
                                          <div class="box-image">
                                             <div class="">
                                                <a href="{{route('website.detailProduct',['tensanpham' => $sanpham->tensanpham])}}">
                                                <img width="1000" height="1000" src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham)}}" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham)}}" sizes="(max-width: 1000px) 100vw, 1000px">									
                                             </a>
                                             </div>
                                             <div class="image-tools top right show-on-hover">
                                             </div>
                                             <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                             </div>
                                          </div>
                                          <div class="box-text text-center">
                                             <div class="title-wrapper">
                                                <p class="name product-title" style="height: 41px;"><a href="{{route('website.detailProduct',['tensanpham' => $sanpham->tensanpham])}}">{{$sanpham->tensanpham}}</a></p>
                                             </div>
                                             <div class="price-wrapper" style="height: 52.7969px;">
                                                <div style="text-align:center;"title="Rated 5 out of 5">
                                                   <span style="width:100%;text-align:center;color:#ffc107">@php
                                                      $i=0;
                                                      $count=$sanpham->danhgia;
                                                      do {
                                                         echo "<i class='fas fa-star'></i>";
                                                         $i++;
                                                      } while ($i<$count); 
                                                      @endphp
                                                   </span>
                                                </div>
                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi>@if($sanpham->giasanpham=='0')
                                                   
                                                     Liên hệ
                                                   
                                                   @else 
                                                   
                                                      {{(number_format($sanpham->giasanpham))}}đ
                                                   
                                                 @endif</bdi></span></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <style scope="scope">
                              #section_308047023 {
                              padding-top: 0px;
                              padding-bottom: 0px;
                              }
                           </style>
                        </section>
                        @endforeach
                        @foreach($danhsach as $item)
                        @if(($item['type'])=='giaithuong')
                        <section class="section pd0" id="section_643383816">
                              <div class="bg section-bg fill bg-fill  bg-loaded">
                              </div>
                              <div class="section-content relative">
                                 <div class="container section-title-container">
                                    <h3 class="section-title section-title-normal"><b></b><span class="section-title-main"><i class="fas fa-award"></i>{{$item['name']}}</span><b></b></h3>
                                 </div>
                                 <div class="slider-wrapper relative" id="slider-1148084681">
                                    <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal flickity-enabled is-draggable" data-flickity-options="{
                                       &quot;cellAlign&quot;: &quot;center&quot;,
                                       &quot;imagesLoaded&quot;: true,
                                       &quot;lazyLoad&quot;: 1,
                                       &quot;freeScroll&quot;: false,
                                       &quot;wrapAround&quot;: true,
                                       &quot;autoPlay&quot;: 6000,
                                       &quot;pauseAutoPlayOnHover&quot; : true,
                                       &quot;prevNextButtons&quot;: true,
                                       &quot;contain&quot; : true,
                                       &quot;adaptiveHeight&quot; : true,
                                       &quot;dragThreshold&quot; : 10,
                                       &quot;percentPosition&quot;: true,
                                       &quot;pageDots&quot;: true,
                                       &quot;rightToLeft&quot;: false,
                                       &quot;draggable&quot;: true,
                                       &quot;selectedAttraction&quot;: 0.1,
                                       &quot;parallax&quot; : 0,
                                       &quot;friction&quot;: 0.6        }" tabindex="0">
                                       <div class="flickity-viewport" style="height: 241.875px; touch-action: pan-y;">
                                          <div class="flickity-slider" style="left: 0px; transform: translateX(1.2%);">
                                             <div class="row is-selected" id="row-502575864" aria-selected="true" style="position: absolute; left: 0%;">
                                                @foreach($item['new'] as $new)
                                                   <div class="col medium-3 small-6 large-3">
                                                   <div class="col-inner text-center">
                                                      <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_88747690">
                                                         <div class="img-inner dark">
                                                            <img width="400" height="300" src="{{asset('images/giaithuong/'.$new->hinhanhbaiviet)}}" sizes="(max-width: 400px) 100vw, 400px">						
                                                         </div>
                                                         <style scope="scope">
                                                            #image_88747690 {
                                                            width: 100%;
                                                            }
                                                         </style>
                                                      </div>
                                                   </div>
                                                </div>
                                             @endforeach
                                          </div>
                                          </div>
                                       </div>
                                       <button class="flickity-button flickity-prev-next-button previous" type="button" disabled="" aria-label="Previous">
                                          <svg class="flickity-button-icon" viewBox="0 0 100 100">
                                             <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                                          </svg>
                                       </button>
                                       <button class="flickity-button flickity-prev-next-button next" type="button" disabled="" aria-label="Next">
                                          <svg class="flickity-button-icon" viewBox="0 0 100 100">
                                             <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                                          </svg>
                                       </button>
                                       <ol class="flickity-page-dots">
                                          <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
                                       </ol>
                                    </div>
                                    <div class="loading-spin dark large centered" style="display: none;"></div>
                                    <style scope="scope">
                                    </style>
                                 </div>
                              </div>
                              <style scope="scope">
                                 #section_643383816 {
                                 padding-top: 0px;
                                 padding-bottom: 0px;
                                 }
                              </style>
                           </section>
                        @endif
                        @if($item['type']=='video')
                        <section class="section https://osuno.com.vn/category/video/" id="section_445136717">
                           <div class="bg section-bg fill bg-fill  bg-loaded">
                           </div>
                           <div class="section-content relative">
                              <div class="container section-title-container see-all">
                                 <h3 class="section-title section-title-normal"><b></b><span class="section-title-main"><i class="fas fa-play"></i>{{$item['name']}}</span><b></b><a href="{{route('website.categoryNews',['type' => 'video'])}}" target="">Xem tất cả<i class="icon-angle-right"></i></a></h3>
                              </div>
                              <div class="row large-columns-4 medium-columns-1 small-columns-1 row-small">
                                 @foreach($item['new'] as $new)
                                 <div class="col post-item has-post-icon">
                                    <div class="col-inner">
                                       <a href="{{route('website.detailNews',['id'=>$new->id])}}" class="plain">
                                          <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                             <div class="box-image">
                                                <div class="image-cover" style="padding-top:65%;">
                                                   <img width="1000" height="562" src="{{asset('images/tintuc/'.$new->hinhanhbaiviet)}}" sizes="(max-width: 1000px) 100vw, 1000px">  							  							  						
                                                </div>
                                                <div class="absolute no-click x50 y50 md-x50 md-y50 lg-x50 lg-y50">
                                                   <div class="overlay-icon" >
                                                      <i class="fas fa-play" style="margin-top:12px;"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="box-text text-left">
                                                <div class="box-text-inner blog-post-inner">
                                                   <h5 class="post-title is-large ">{{$new->tieude}}</h5>
                                                   <div class="is-divider"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <style scope="scope">
                              #section_445136717 {
                              padding-top: 30px;
                              padding-bottom: 30px;
                              }
                           </style>
                        </section>
                        @endif
                        @if($item['type']=='tintuc')
                        <section class="section https://osuno.com.vn/category/tin-tuc/" id="section_1274373869">
                           <div class="bg section-bg fill bg-fill  bg-loaded">
                           </div>
                           <div class="section-content relative">
                              <div class="container section-title-container see-all">
                                 <h3 class="section-title section-title-normal"><b></b><span class="section-title-main"><i class="fas fa-newspaper"></i>{{$item['name']}}</span><b></b><a href="{{route('website.categoryNews',['type' => 'tintuc'])}}" target="">Xem tất cả<i class="icon-angle-right"></i></a></h3>
                              </div>
                              <div class="row large-columns-4 medium-columns-1 small-columns-1 row-small">
                                 @foreach($item['new'] as $new)
                                 <div class="col post-item">
                                    <div class="col-inner">
                                       <a href="{{route('website.detailNews',['id' => $new->id])}}" class="plain">
                                          <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                             <div class="box-image">
                                                <div class="image-cover" style="padding-top:65%;">
                                                   <img width="750" height="1000" src="{{asset('images/tintuc/'.$new->hinhanhbaiviet)}}" sizes="(max-width: 750px) 100vw, 750px">  							  							  						
                                                </div>
                                             </div>
                                             <div class="box-text text-left">
                                                <div class="box-text-inner blog-post-inner">
                                                   <h5 class="post-title is-large ">{{$new->tieude}}</h5>
                                                   <div class="is-divider"></div>
                                                   <p class="from_the_blog_excerpt ">{{$new->noidung}}</p>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <style scope="scope">
                              #section_1274373869 {
                              padding-top: 30px;
                              padding-bottom: 30px;
                              }
                           </style>
                        </section>
                        @endif
                        @if($item['type']=='hinhanhthucte')
                        <section class="section tin-tuc pd0" id="section_1963583420">
                           <div class="bg section-bg fill bg-fill  bg-loaded">
                           </div>
                           <div class="section-content relative">
                              <div class="container section-title-container see-all">
                                 <h3 class="section-title section-title-normal"><b></b><span class="section-title-main"><i class="fas fa-bars"></i>{{$item['name']}}</span><b></b><a href="{{route('website.categoryNews',['type' =>'hinhanhthucte'])}}" target="">Xem tất cả<i class="icon-angle-right"></i></a></h3>
                              </div>
                              <div class="row blog-content-album large-columns-4 medium-columns-1 small-columns-1 row-small">
                                 @foreach($item['new'] as $new)
                                 <div class="col post-item">
                                    <div class="col-inner">
                                       <a href="{{route('website.detailNews',['id'=>$new->id])}}" class="plain">
                                          <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                             <div class="box-image">
                                                <div class="image-cover" style="padding-top:65%;">
                                                   <img width="500" height="333" src="{{asset('images/tintuc/'.$new->hinhanhbaiviet)}}" class="attachment-original size-original wp-post-image" alt="" decoding="async" loading="lazy"  sizes="(max-width: 500px) 100vw, 500px">  							  							  						
                                                </div>
                                             </div>
                                             <div class="box-text text-left">
                                                <div class="box-text-inner blog-post-inner">
                                                   <h5 class="post-title is-large " style="height: 64.5938px;">{{$new->tieude}}</h5>
                                                   <div class="is-divider"></div>
                                                   <p class="from_the_blog_excerpt ">{{$new->noidung}}</p>
                                                </div>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <style scope="scope">
                              #section_1963583420 {
                              padding-top: 30px;
                              padding-bottom: 30px;
                              }
                           </style>
                        </section>
                        @endif
                        @endforeach
                        
                     </div>
                  </div>
               </div>
            </div>
         </main>
         @include('website.partials.diachishowroom')
         @include('website.partials.footer')
      </div>
      <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up"></i></a>
      <!-- Mobile Sidebar -->
      <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
         <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item menu-item-2975"><a href="https://osuno.com.vn/" aria-current="page">Trang chủ</a></li>
               <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2977"><a href="{{route('website.gioithieu')}}">Giới thiệu</a></li>
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2979"><a href="https://osuno.com.vn/category/tin-tuc/">Tin tức</a></li>
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3427"><a href="https://osuno.com.vn/category/video/">Video</a></li>
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2980"><a href="https://osuno.com.vn/category/tuyen-dung/">Tuyển dụng</a></li>
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4355"><a href="https://osuno.com.vn/category/ho-tro-ky-thuat/">Hỗ trợ kỹ thuật</a></li>
            </ul>
         </div>
      </div>
      <style>
         /** Mobile **/
         @media screen and (max-width: 700px) and (min-width: 320px) {
         }
         /** iBad **/
         @media screen and (max-width: 880px) and (min-width: 750px) {
         }
         /** Desktop **/
         @media screen and (max-width: 1400px) and (min-width: 900px) {
         }
      </style>
      @include('website.partials.script')
   </body>
</html>