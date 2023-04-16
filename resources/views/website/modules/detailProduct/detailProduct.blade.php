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
          <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left" role="navigation">
              <!-- Logo -->
              <div id="logo" class="flex-col logo">
                <!-- Header logo -->
                <a href="{{route('website.index')}}" title="Khóa Cửa Thông Minh Osuno - Khóa Cửa Vân Tay" rel="home">
                  <img width="220" height="100" src="https://osuno.com.vn/wp-content/uploads/OSUNO-logo.png" class="header_logo header-logo logo-desktop" alt="Khóa Cửa Thông Minh Osuno">
                  <img width="220" height="100" src="https://osuno.com.vn/wp-content/uploads/220x50.png" class="header_logo header-logo logo-mobile" alt="Khóa Cửa Thông Minh Osuno">
                  <img width="220" height="100" src="https://osuno.com.vn/wp-content/uploads/OSUNO-logo.png" class="header-logo-dark" alt="Khóa Cửa Thông Minh Osuno">
                </a>
              </div>
              <!-- Mobile Left Elements -->
              <div class="flex-col show-for-medium flex-left">
                <ul class="mobile-nav nav nav-left "></ul>
              </div>
              <!-- Left Elements -->
              <div class="flex-col hide-for-medium flex-left
            flex-grow">
                <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                  <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                      <div class="searchform-wrapper ux-search-box relative is-normal">
                        <form role="search" method="get" class="searchform" action="https://osuno.com.vn/">
                          <div class="flex-row relative">
                            <div class="flex-col flex-grow">
                              <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                              <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Bạn đang cần sản phẩm nào?" value="" name="s" autocomplete="off">
                              <input type="hidden" name="post_type" value="product">
                            </div>
                            <div class="flex-col">
                              <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
                                <i class="icon-search"></i>
                              </button>
                            </div>
                          </div>
                          <div class="live-search-results text-left z-top">
                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Right Elements -->
              <div class="flex-col hide-for-medium flex-right">
                <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                  <li class="html custom html_topbar_left">
                    <a href="tel:19009292">
                        <i class="fa fa-phone" style="font-size:20px;"aria-hidden="true"></i>
                      <p>
                        <span>Hotline: 19009292</span>
                      </p>
                    </a>
                  </li>
                  <li class="cart-item has-icon">
                    <a href="{{route('website.cart')}}" title="Giỏ hàng" class="header-cart-link is-small">
                      <i class="fas fa-shopping-cart" style="font-size:20px;" data-icon-label="0"></i>
                      <span class="header-cart-title"> Giỏ hàng </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Mobile Right Elements -->
              <div class="flex-col show-for-medium flex-right">
                <ul class="mobile-nav nav nav-right ">
                  <li class="cart-item has-icon">
                    <a href="{{route('website.cart')}}" title="Giỏ hàng" class="header-cart-link is-small">
                      <i class="icon-shopping-cart" data-icon-label="0"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="wide-nav" class="header-bottom wide-nav nav-dark">
            <div class="flex-row container">
              <div class="flex-col hide-for-medium flex-left">
                <ul class="nav header-nav header-bottom-nav nav-left  nav-size-large">
                  <div id="mega-menu-wrap" class="ot-vm-click">
                    <div id="mega-menu-title">
                      <i class="fas fa-bars"></i> Danh mục sản phẩm
                    </div>
                    <ul id="mega_menu" class="sf-menu sf-vertical sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                       @foreach($cateMenu as $cate)
                      <li id="menu-item-{{$cate->id}}" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2957"><a href="{{route('website.detailCategory',['tentheloai' => $cate->tentheloai])}}">{{$cate->tentheloai}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </ul>
              </div>
              <div class="flex-col hide-for-medium flex-right flex-grow">
                <ul class="nav header-nav header-bottom-nav nav-right  nav-size-large">
                  <li id="menu-item-2975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2975">
                    <a href="{{route('website.index')}}" class="nav-top-link">Trang chủ</a>
                  </li>
                  <li id="menu-item-2977" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2977">
                    <a href="{{route('website.gioithieu')}}" class="nav-top-link">Giới thiệu</a>
                  </li>
                  <li id="menu-item-2979" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2979">
                    <a href="{{route('website.categoryNews',['type' => 'tintuc'])}}" class="nav-top-link">Tin tức</a>
                  </li>
                  <li id="menu-item-3427" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3427">
                    <a href="{{route('website.categoryNews',['type' => 'video'])}}" class="nav-top-link">Video</a>
                  </li>
                  <li id="menu-item-2980" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2980">
                    <a href="{{route('website.categoryNews',['type' => 'tuyendung'])}}" class="nav-top-link">Tuyển dụng</a>
                  </li>
                  <li id="menu-item-4355" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4355">
                    <a href="{{route('website.categoryNews',['type' => 'tintuc'])}}" class="nav-top-link">Hỗ trợ kỹ thuật</a>
                  </li>
                  <!-- GTranslate: https://gtranslate.io/ -->
                  <li style="position:relative;" class="menu-item menu-item-gtranslate">
                    <a href="#" onclick="doGTranslate('vi|en');return false;" title="English" class="glink nturl notranslate">
                      <img src="//osuno.com.vn/wp-content/plugins/gtranslate/flags/svg/en-us.svg" height="32" width="32" alt="English">
                    </a>
                  </li>
                  <li style="position:relative;" class="menu-item menu-item-gtranslate">
                    <a href="#" onclick="doGTranslate('vi|vi');return false;" title="Vietnamese" class="glink nturl notranslate">
                      <img src="//osuno.com.vn/wp-content/plugins/gtranslate/flags/svg/vi.svg" height="32" width="32" alt="Vietnamese">
                    </a>
                  </li>
                  <style>
                    a.glink img {
                      margin-right: 2px;
                    }
                  </style>
                  <style>
                    #goog-gt-tt {
                      display: none !important;
                    }

                    .goog-te-banner-frame {
                      display: none !important;
                    }

                    .goog-te-menu-value:hover {
                      text-decoration: none !important;
                    }

                    .goog-text-highlight {
                      background-color: transparent !important;
                      box-shadow: none !important;
                    }

                    body {
                      top: 0 !important;
                    }

                    #google_translate_element2 {
                      display: none !important;
                    }
                  </style>
                  <div id="google_translate_element2">
                    <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                      <div id=":0.targetLanguage">
                        <select class="goog-te-combo" aria-label="Tiện ích dịch ngôn ngữ">
                          <option value="">Chọn Ngôn ngữ</option>
                          <option value="ar">Ả Rập</option>
                          <option value="sq">Albania</option>
                          <option value="am">Amharic</option>
                          <option value="en">Anh</option>
                          <option value="hy">Armenia</option>
                          <option value="as">Assam</option>
                          <option value="ay">Aymara</option>
                          <option value="az">Azerbaijan</option>
                          <option value="pl">Ba Lan</option>
                          <option value="fa">Ba Tư</option>
                          <option value="bm">Bambara</option>
                          <option value="xh">Bantu</option>
                          <option value="eu">Basque</option>
                          <option value="be">Belarus</option>
                          <option value="bn">Bengal</option>
                          <option value="bho">Bhojpuri</option>
                          <option value="bs">Bosnia</option>
                          <option value="pt">Bồ Đào Nha</option>
                          <option value="bg">Bulgaria</option>
                          <option value="ca">Catalan</option>
                          <option value="ceb">Cebuano</option>
                          <option value="ny">Chichewa</option>
                          <option value="co">Corsi</option>
                          <option value="ht">Creole (Haiti)</option>
                          <option value="hr">Croatia</option>
                          <option value="dv">Dhivehi</option>
                          <option value="iw">Do Thái</option>
                          <option value="doi">Dogri</option>
                          <option value="da">Đan Mạch</option>
                          <option value="de">Đức</option>
                          <option value="et">Estonia</option>
                          <option value="ee">Ewe</option>
                          <option value="tl">Filipino</option>
                          <option value="fy">Frisia</option>
                          <option value="gd">Gael Scotland</option>
                          <option value="gl">Galicia</option>
                          <option value="ka">George</option>
                          <option value="gn">Guarani</option>
                          <option value="gu">Gujarat</option>
                          <option value="nl">Hà Lan</option>
                          <option value="af">Hà Lan (Nam Phi)</option>
                          <option value="ko">Hàn</option>
                          <option value="ha">Hausa</option>
                          <option value="haw">Hawaii</option>
                          <option value="hi">Hindi</option>
                          <option value="hmn">Hmong</option>
                          <option value="hu">Hungary</option>
                          <option value="el">Hy Lạp</option>
                          <option value="is">Iceland</option>
                          <option value="ig">Igbo</option>
                          <option value="ilo">Ilocano</option>
                          <option value="id">Indonesia</option>
                          <option value="ga">Ireland</option>
                          <option value="jw">Java</option>
                          <option value="kn">Kannada</option>
                          <option value="kk">Kazakh</option>
                          <option value="km">Khmer</option>
                          <option value="rw">Kinyarwanda</option>
                          <option value="gom">Konkani</option>
                          <option value="kri">Krio</option>
                          <option value="ku">Kurd (Kurmanji)</option>
                          <option value="ckb">Kurd (Sorani)</option>
                          <option value="ky">Kyrgyz</option>
                          <option value="lo">Lào</option>
                          <option value="la">Latinh</option>
                          <option value="lv">Latvia</option>
                          <option value="ln">Lingala</option>
                          <option value="lt">Litva</option>
                          <option value="lg">Luganda</option>
                          <option value="lb">Luxembourg</option>
                          <option value="ms">Mã Lai</option>
                          <option value="mk">Macedonia</option>
                          <option value="mai">Maithili</option>
                          <option value="mg">Malagasy</option>
                          <option value="ml">Malayalam</option>
                          <option value="mt">Malta</option>
                          <option value="mi">Maori</option>
                          <option value="mr">Marathi</option>
                          <option value="mni-Mtei">Meiteilon (Manipuri)</option>
                          <option value="lus">Mizo</option>
                          <option value="mn">Mông Cổ</option>
                          <option value="my">Myanmar</option>
                          <option value="no">Na Uy</option>
                          <option value="ne">Nepal</option>
                          <option value="ru">Nga</option>
                          <option value="ja">Nhật</option>
                          <option value="or">Odia (Oriya)</option>
                          <option value="om">Oromo</option>
                          <option value="ps">Pashto</option>
                          <option value="sa">Phạn</option>
                          <option value="fr">Pháp</option>
                          <option value="fi">Phần Lan</option>
                          <option value="pa">Punjab</option>
                          <option value="qu">Quechua</option>
                          <option value="eo">Quốc tế ngữ</option>
                          <option value="ro">Rumani</option>
                          <option value="sm">Samoa</option>
                          <option value="cs">Séc</option>
                          <option value="nso">Sepedi</option>
                          <option value="sr">Serbia</option>
                          <option value="st">Sesotho</option>
                          <option value="sn">Shona</option>
                          <option value="sd">Sindhi</option>
                          <option value="si">Sinhala</option>
                          <option value="sk">Slovak</option>
                          <option value="sl">Slovenia</option>
                          <option value="so">Somali</option>
                          <option value="su">Sunda</option>
                          <option value="sw">Swahili</option>
                          <option value="tg">Tajik</option>
                          <option value="ta">Tamil</option>
                          <option value="tt">Tatar</option>
                          <option value="es">Tây Ban Nha</option>
                          <option value="te">Telugu</option>
                          <option value="th">Thái</option>
                          <option value="tr">Thổ Nhĩ Kỳ</option>
                          <option value="sv">Thụy Điển</option>
                          <option value="ti">Tigrinya</option>
                          <option value="zh-CN">Trung (Giản thể)</option>
                          <option value="zh-TW">Trung (Phồn thể)</option>
                          <option value="ts">Tsonga</option>
                          <option value="tk">Turkmen</option>
                          <option value="ak">Twi</option>
                          <option value="uk">Ukraina</option>
                          <option value="ur">Urdu</option>
                          <option value="ug">Uyghur</option>
                          <option value="uz">Uzbek</option>
                          <option value="cy">Xứ Wales</option>
                          <option value="it">Ý</option>
                          <option value="yi">Yiddish</option>
                          <option value="yo">Yoruba</option>
                          <option value="zu">Zulu</option>
                        </select>
                      </div>Được hỗ trợ bởi <span style="white-space:nowrap">
                        <a class="VIpgJd-ZVi9od-l4eHX-hSRGPd" href="https://translate.google.com" target="_blank">
                          <img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Dịch">Dịch </a>
                      </span>
                    </div>
                  </div>
                  <script src="data:text/javascript;base64,ZnVuY3Rpb24gZ29vZ2xlVHJhbnNsYXRlRWxlbWVudEluaXQyKCkge25ldyBnb29nbGUudHJhbnNsYXRlLlRyYW5zbGF0ZUVsZW1lbnQoe3BhZ2VMYW5ndWFnZTogJ3ZpJyxhdXRvRGlzcGxheTogZmFsc2V9LCAnZ29vZ2xlX3RyYW5zbGF0ZV9lbGVtZW50MicpO31pZighd2luZG93Lmd0X3RyYW5zbGF0ZV9zY3JpcHQpe3dpbmRvdy5ndF90cmFuc2xhdGVfc2NyaXB0PWRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpO2d0X3RyYW5zbGF0ZV9zY3JpcHQuc3JjPSdodHRwczovL3RyYW5zbGF0ZS5nb29nbGUuY29tL3RyYW5zbGF0ZV9hL2VsZW1lbnQuanM/Y2I9Z29vZ2xlVHJhbnNsYXRlRWxlbWVudEluaXQyJztkb2N1bWVudC5ib2R5LmFwcGVuZENoaWxkKGd0X3RyYW5zbGF0ZV9zY3JpcHQpO30="></script>
                  <script src="data:text/javascript;base64,DQpmdW5jdGlvbiBHVHJhbnNsYXRlR2V0Q3VycmVudExhbmcoKSB7dmFyIGtleVZhbHVlID0gZG9jdW1lbnRbJ2Nvb2tpZSddLm1hdGNoKCcoXnw7KSA/Z29vZ3RyYW5zPShbXjtdKikoO3wkKScpO3JldHVybiBrZXlWYWx1ZSA/IGtleVZhbHVlWzJdLnNwbGl0KCcvJylbMl0gOiBudWxsO30NCmZ1bmN0aW9uIEdUcmFuc2xhdGVGaXJlRXZlbnQoZWxlbWVudCxldmVudCl7dHJ5e2lmKGRvY3VtZW50LmNyZWF0ZUV2ZW50T2JqZWN0KXt2YXIgZXZ0PWRvY3VtZW50LmNyZWF0ZUV2ZW50T2JqZWN0KCk7ZWxlbWVudC5maXJlRXZlbnQoJ29uJytldmVudCxldnQpfWVsc2V7dmFyIGV2dD1kb2N1bWVudC5jcmVhdGVFdmVudCgnSFRNTEV2ZW50cycpO2V2dC5pbml0RXZlbnQoZXZlbnQsdHJ1ZSx0cnVlKTtlbGVtZW50LmRpc3BhdGNoRXZlbnQoZXZ0KX19Y2F0Y2goZSl7fX0NCmZ1bmN0aW9uIGRvR1RyYW5zbGF0ZShsYW5nX3BhaXIpe2lmKGxhbmdfcGFpci52YWx1ZSlsYW5nX3BhaXI9bGFuZ19wYWlyLnZhbHVlO2lmKGxhbmdfcGFpcj09JycpcmV0dXJuO3ZhciBsYW5nPWxhbmdfcGFpci5zcGxpdCgnfCcpWzFdO2lmKEdUcmFuc2xhdGVHZXRDdXJyZW50TGFuZygpID09IG51bGwgJiYgbGFuZyA9PSBsYW5nX3BhaXIuc3BsaXQoJ3wnKVswXSlyZXR1cm47aWYodHlwZW9mIGdhPT0nZnVuY3Rpb24nKXtnYSgnc2VuZCcsICdldmVudCcsICdHVHJhbnNsYXRlJywgbGFuZywgbG9jYXRpb24uaG9zdG5hbWUrbG9jYXRpb24ucGF0aG5hbWUrbG9jYXRpb24uc2VhcmNoKTt9dmFyIHRlQ29tYm87dmFyIHNlbD1kb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnc2VsZWN0Jyk7Zm9yKHZhciBpPTA7aTxzZWwubGVuZ3RoO2krKylpZihzZWxbaV0uY2xhc3NOYW1lLmluZGV4T2YoJ2dvb2ctdGUtY29tYm8nKSE9LTEpe3RlQ29tYm89c2VsW2ldO2JyZWFrO31pZihkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZ29vZ2xlX3RyYW5zbGF0ZV9lbGVtZW50MicpPT1udWxsfHxkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZ29vZ2xlX3RyYW5zbGF0ZV9lbGVtZW50MicpLmlubmVySFRNTC5sZW5ndGg9PTB8fHRlQ29tYm8ubGVuZ3RoPT0wfHx0ZUNvbWJvLmlubmVySFRNTC5sZW5ndGg9PTApe3NldFRpbWVvdXQoZnVuY3Rpb24oKXtkb0dUcmFuc2xhdGUobGFuZ19wYWlyKX0sNTAwKX1lbHNle3RlQ29tYm8udmFsdWU9bGFuZztHVHJhbnNsYXRlRmlyZUV2ZW50KHRlQ29tYm8sJ2NoYW5nZScpO0dUcmFuc2xhdGVGaXJlRXZlbnQodGVDb21ibywnY2hhbmdlJyl9fQ0K"></script>
                </ul>
              </div>
              <div class="flex-col show-for-medium flex-grow">
                <ul class="nav header-bottom-nav nav-center mobile-nav  nav-size-large">
                  <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                      <div class="searchform-wrapper ux-search-box relative is-normal">
                        <form role="search" method="get" class="searchform" action="https://osuno.com.vn/">
                          <div class="flex-row relative">
                            <div class="flex-col flex-grow">
                              <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                              <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Bạn đang cần sản phẩm nào?" value="" name="s" autocomplete="off">
                              <input type="hidden" name="post_type" value="product">
                            </div>
                            <div class="flex-col">
                              <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
                                <i class="icon-search"></i>
                              </button>
                            </div>
                          </div>
                          <div class="live-search-results text-left z-top">
                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </li>
                  <div id="mega-menu-wrap" class="ot-vm-click">
                    <div id="mega-menu-title">
                      <i class="icon-menu"></i> Danh mục sản phẩm
                    </div>
                    <ul id="mega_menu" class="sf-menu sf-vertical">
                      @foreach($cateMenu as $cate)
                      <li id="menu-item-{{$cate->id}}" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2957"><a href="{{route('website.detailCategory',['tentheloai' => $cate->tentheloai])}}">{{$cate->tentheloai}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                  <li class="nav-icon has-icon">
                    <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                      <i class="icon-menu"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
		 
          <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
          </div>
        </div>
      </header>
      <div class="page-title shop-page-title product-page-title">
        <div class="page-title-inner flex-row medium-flex-wrap container">
          <div class="flex-col flex-grow medium-text-center">
            <div class="is-large">
              <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                <a href="{{route('website.index')}}">Trang chủ</a>
                <span class="divider">/</span>
                <a href="{{route('website.sanphambanchay')}}">Cửa hàng</a>
                <span class="divider">/</span>
                <a href="{{route('website.detailCategory',[$sanpham->tentheloai])}}">{{$sanpham->tentheloai}}</a>
                <span class="divider">/</span>
                <a href="{{route('website.detailProduct',[$sanpham->tensanpham])}}">{{$sanpham->tensanpham}}</a>
              </nav>
            </div>
          </div>
          <div class="flex-col medium-text-center"></div>
        </div>
      </div>
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
        <div class="shop-container">
          <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
          </div>
          <div id="product-243" class="product type-product post-243 status-publish first instock product_cat-gia-tren-5-trieu product_cat-khoa-cua-thong-minh product_cat-khoa-cua-van-tay product_cat-khoa-van-tay-cho-cua-nha-biet-thu product_cat-mo-bang-van-tay-ma-so-the-tu-chia-co product_cat-san-pham-ban-chay product_cat-san-pham-moi-nhat product_tag-khoavantaybietthu product_tag-khoa-thong-minh-danh-cho-biet-thu has-post-thumbnail downloadable shipping-taxable product-type-simple">
            <div class="product-container">
              <div class="product-main">
                <div class="row content-row mb-0">
                  <div class="product-gallery col large-4">
                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1;">
                      <div class="badge-container is-larger absolute left top z-1"></div>
                      <div class="image-tools absolute top show-on-hover right z-3"></div>
                      <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half flickity-enabled is-draggable" data-flickity-options="{
                &quot;cellAlign&quot;: &quot;center&quot;,
                &quot;wrapAround&quot;: true,
                &quot;autoPlay&quot;: false,
                &quot;prevNextButtons&quot;:true,
                &quot;adaptiveHeight&quot;: true,
                &quot;imagesLoaded&quot;: true,
                &quot;lazyLoad&quot;: 1,
                &quot;dragThreshold&quot; : 15,
                &quot;pageDots&quot;: false,
                &quot;rightToLeft&quot;: false       }" tabindex="0">
                        <div class="flickity-viewport" style="height: 396.656px; touch-action: pan-y;">
                          <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                            <div data-thumb="https://osuno.com.vn/wp-content/uploads/2019/11/3362-do-dong-100x100.jpg" class="woocommerce-product-gallery__image slide first is-selected" aria-selected="true" style="position: absolute; left: 0%;">
                              <a href="">
                                <img width="600" height="600" src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham)}}" sizes="(max-width: 600px) 100vw, 600px">
                              </a>
                            </div>
                            <div data-thumb="https://osuno.com.vn/wp-content/uploads/2019/11/OSN-3362-10-100x100.jpg" class="woocommerce-product-gallery__image slide" aria-selected="false" style="position: absolute; left: 100%;">
                              <a href="">
                                <img width="600" height="518" src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham2)}}" class="skip-lazy" alt="khoa van tay osn3362" decoding="async" loading="lazy" title="khoa van tay osn3362" data-caption="khoa van tay osn3362" data-src="https://osuno.com.vn/wp-content/uploads/2019/11/OSN-3362-10.jpg" data-large_image="https://osuno.com.vn/wp-content/uploads/2019/11/OSN-3362-10.jpg" data-large_image_width="790" data-large_image_height="682" srcset="https://osuno.com.vn/wp-content/uploads/2019/11/OSN-3362-10-600x518.jpg 600w, https://osuno.com.vn/wp-content/uploads/2019/11/OSN-3362-10-768x663.jpg 768w, https://osuno.com.vn/wp-content/uploads/2019/11/OSN-3362-10.jpg 790w" sizes="(max-width: 600px) 100vw, 600px">
                              </a>
                            </div>
                            <div data-thumb="https://osuno.com.vn/wp-content/uploads/2019/11/3362-100x100.jpg" class="woocommerce-product-gallery__image slide" aria-selected="false" style="position: absolute; left: 200%;">
                              <a href="">
                                <img width="600" height="829" src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham3)}}" sizes="(max-width: 600px) 100vw, 600px">
                              </a>
                            </div>
							<div data-thumb="https://osuno.com.vn/wp-content/uploads/2019/11/3362-100x100.jpg" class="woocommerce-product-gallery__image slide" aria-selected="false" style="position: absolute; left: 200%;">
								<a href="">
								  <img width="600" height="829" src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham4)}}" class="skip-lazy" alt="" decoding="async" loading="lazy" title="3362" data-caption="" data-src="https://osuno.com.vn/wp-content/uploads/2019/11/3362.jpg" data-large_image="https://osuno.com.vn/wp-content/uploads/2019/11/3362.jpg" data-large_image_width="1181" data-large_image_height="1631" srcset="https://osuno.com.vn/wp-content/uploads/2019/11/3362-600x829.jpg 600w, https://osuno.com.vn/wp-content/uploads/2019/11/3362-217x300.jpg 217w, https://osuno.com.vn/wp-content/uploads/2019/11/3362-741x1024.jpg 741w, https://osuno.com.vn/wp-content/uploads/2019/11/3362-109x150.jpg 109w, https://osuno.com.vn/wp-content/uploads/2019/11/3362-768x1061.jpg 768w, https://osuno.com.vn/wp-content/uploads/2019/11/3362-1112x1536.jpg 1112w, https://osuno.com.vn/wp-content/uploads/2019/11/3362.jpg 1181w" sizes="(max-width: 600px) 100vw, 600px">
								</a>
							  </div>
                          </div>
                        </div>
                        <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous">
                          <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                          </svg>
                        </button>
                        <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
                          <svg class="flickity-button-icon" viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                          </svg>
                        </button>
                      </figure>
                    </div>
                    <div class="product-thumbnails thumbnails slider row row-small row-slider slider-nav-small small-columns-4 flickity-enabled is-draggable" data-flickity-options="{
              &quot;cellAlign&quot;: &quot;left&quot;,
              &quot;wrapAround&quot;: false,
              &quot;autoPlay&quot;: false,
              &quot;prevNextButtons&quot;: true,
              &quot;asNavFor&quot;: &quot;.product-gallery-slider&quot;,
              &quot;percentPosition&quot;: true,
              &quot;imagesLoaded&quot;: true,
              &quot;pageDots&quot;: false,
              &quot;rightToLeft&quot;: false,
              &quot;contain&quot;: true
          }" tabindex="0">
                      <div class="flickity-viewport" style="height: 79.5625px; touch-action: pan-y;">
                        <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                          <div class="col first is-nav-selected is-selected" aria-selected="true" style="position: absolute; left: 0%;">
                            <a>
                              <img src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham)}}" alt="" width="350" height="350" class="attachment-woocommerce_thumbnail">
                            </a>
                          </div>
                          <div class="col" aria-selected="false" style="position: absolute; left: 25%;">
                            <a>
                              <img src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham2)}}" alt="khoa van tay osn3362" width="350" height="350" class="attachment-woocommerce_thumbnail">
                            </a>
                          </div>
                          <div class="col" aria-selected="false" style="position: absolute; left: 50%;">
                            <a>
                              <img src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham3)}}" alt="" width="350" height="350" class="attachment-woocommerce_thumbnail">
                            </a>
                          </div>
                          <div class="col" aria-selected="false" style="position: absolute; left: 74.99%;">
                            <a>
                              <img src="{{asset('images/sanpham/'.$sanpham->hinhanhsanpham4)}}" alt="" width="350" height="350" class="attachment-woocommerce_thumbnail">
                            </a>
                          </div>
                        </div>
                      </div>
                      <button class="flickity-button flickity-prev-next-button previous" type="button" disabled="" aria-label="Previous">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                        </svg>
                      </button>
                      <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
                        <svg class="flickity-button-icon" viewBox="0 0 100 100">
                          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                        </svg>
                      </button>
                    </div>
                    <div class="whotline">
                      <ul>
                        <li>
                          <span>Mua hàng (24/7)</span>
                          <p class="tdtv">19009292</p>
                        </li>
                        <li>
                          <span>Bảo hành (24/7)</span>
                          <p class="hotline">0943.833.688</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-info summary col-fit col entry-summary product-summary">
                    <h1 class="product-title product_title entry-title">
                      {{$sanpham->tensanpham}}
                    </h1>
                    <p class="tieuchuan">Tiêu chuẩn: <span>Công nghệ {{$sanpham->congnghe}}</span>
                    </p>
                    <p class="model-sing">| Model: <span>{{$sanpham->masanpham}}</span>
                    </p>
                    <div class="like-share-product">
                      <div id="fb-root" class=" fb_reset">
                        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                          <div></div>
                        </div>
                      </div>
                      <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v7.0&amp;appId=342929769920417&amp;autoLogAppEvents=1" nonce="bdfu732S"></script>
                      <div class="fb-like fb_iframe_widget" data-href="https://osuno.com.vn/mua/khoa-thong-minh-cho-biet-thu-osn3362-cong-nghe-hang-dau-nhat-ban/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=342929769920417&amp;container_width=397&amp;href=https%3A%2F%2Fosuno.com.vn%2Fmua%2Fkhoa-thong-minh-cho-biet-thu-osn3362-cong-nghe-hang-dau-nhat-ban%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width=">
                        <span style="vertical-align: bottom; width: 120px; height: 28px;">
                          <iframe name="f319c29facfd4" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/like.php?action=like&amp;app_id=342929769920417&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1a89b54383fa3c%26domain%3Dosuno.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fosuno.com.vn%252Ff312210cc844d04%26relation%3Dparent.parent&amp;container_width=397&amp;href=https%3A%2F%2Fosuno.com.vn%2Fmua%2Fkhoa-thong-minh-cho-biet-thu-osn3362-cong-nghe-hang-dau-nhat-ban%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width=" style="border: none; visibility: visible; width: 120px; height: 28px;" class=""></iframe>
                        </span>
                      </div>
                    </div>
                    <div class="woocommerce-product-rating">
                      <div class="" style="color:#f3d053" title="Rated 5 out of 5">
                        <span style="width:100%">
                          @php
                            $i=0;
                            $count=$averageStar;
                            do {
                                echo "<i class='fas fa-star'></i>";
                                $i++;
                            } while ($i<$count); 
                          @endphp
                      </div>
                      <a href="#reviews_summary" class="woocommerce-review-link" rel="nofollow"> ( <span class="count">{{$countingRater}}</span> khách hàng đánh giá ) </a>
                    </div>
                    <div class="price-wrapper">
                      <p class="price product-page-price " style="font-size:26px;color:black;font-weight::700"> Giá: {{number_format($sanpham->giasanpham).'đ'}}</p>
                    </div>
                    <div class="lienhe-sing">
                      <form class="cart" action="{{route('website.addtoCart',['id'=>$sanpham->prodid])}}" method="get" enctype="multipart/form-data">
                        <button type="submit" name="add-to-cart" value="5323" class="single_add_to_cart_button button alt">Mua ngay</button>
                      </form>
                      <a class="telme" href="tel:19009292">
                        <b>Liên hệ trực tiếp 19009292</b>
                        <span>Để có giá tốt nhất</span>
                      </a>
                      <div role="form" class="wpcf7" id="wpcf7-f2928-p243-o1" lang="vi" dir="ltr">
                        <div class="screen-reader-response">
                          <p role="status" aria-live="polite" aria-atomic="true"></p>
                          <ul></ul>
                        </div>
                          <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="2928">
                            <input type="hidden" name="_wpcf7_version" value="5.3">
                            <input type="hidden" name="_wpcf7_locale" value="vi">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2928-p243-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="243">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                          </div>
                          <div class="box_support">
                            <p class="hotline">CHƯƠNG TRÌNH KHUYẾN MÃI</p>
                            <p class="value"></p>
							<form action="{{route('website.cskh')}}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="product-call-requests">
								<label class="group__title">
									<span class="wpcf7-form-control-wrap sdt">
									<input type="tel" name="sdt" value="" size="40" placeholder="Nhập số điện thoại">
									<input type="text" name="sanpham" value="{{$sanpham->id}}" style="display:none;">
									<input type="text" name="tensanpham" value="{{$sanpham->tensanpham}}" style="display:none;">
									</span>
								</label>
								<p></p>
								<div class="cm-call-requests">
									<input type="submit" value="Đăng ký gửi" class="wpcf7-form-control wpcf7-submit">
								</div>
								<p>
									<span class="call-note">Chúng tôi sẽ gọi lại cho quý khách</span>
								</p>
								</div>
							</form>
                          </div>
                          <div class="wpcf7-response-output" aria-hidden="true"></div>
                      </div>
                    </div>
                  </div>
                  <div id="product-sidebar" class="col large-4 hide-for-medium product-sidebar-small">
                    <aside class="widget widget-upsell">
                      <h3 class="widget-title shop-sidebar"> Có thể bạn thích… <div class="is-divider small"></div>
                      </h3>
                      <!-- Upsell List style -->
                      <ul class="product_list_widget">
                        <li>
                          <a href="{{route('website.detailProduct',['tensanpham' => $spbanchaynhat->tensanpham])}}" title="Khóa thông minh cửa biệt thự OSN-KBT03">
                            <img width="100" height="100" src="{{asset('images/sanpham/'.$spbanchaynhat->hinhanhsanpham)}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="khoa van tay biet thu-KBT03" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$spbanchaynhat->hinhanhsanpham)}}" sizes="(max-width: 100px) 100vw, 100px">
                            <span class="product-title">{{$spbanchaynhat->tensanpham}}</span>
                          </a><strong> Giá: {{number_format($spbanchaynhat->giasanpham)}}đ </strong>
                        </li>
                      </ul>
                    </aside>
                    <div role="form" class="wpcf7" id="wpcf7-f2928-p243-o2" lang="vi" dir="ltr">
                      <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                      </div>
                      <form action="{{route('website.cskh')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        @csrf
                        <div class="box_support">
                          <p class="hotline">CHƯƠNG TRÌNH KHUYẾN MÃI</p>
                          <p class="value"></p>
                          <div class="product-call-requests">
                            <label class="group__title">
                              <span class="">
                                <input type="tel" name="sdt" value="" size="40"  aria-required="true" aria-invalid="false" placeholder="Nhập số điện thoại">
                                <input type="text" name="sanpham" value="{{$sanpham->id}}" style="display:none;">
                                <input type="text" name="tensanpham" value="{{$sanpham->tensanpham}}" style="display:none;">
                              </span>
                            </label>
                            <p></p>
                            <div class="cm-call-requests">
                              <input type="submit" value="Đăng ký gửi" class="wpcf7-form-control wpcf7-submit">
                              <span class="ajax-loader"></span>
                            </div>
                            <p>
                              <span class="call-note">Chúng tôi sẽ gọi lại cho quý khách</span>
                            </p>
                          </div>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                      </form>
                    </div>
                    <div class="list_keys">
                      <table width="520">
                        <tbody>
                          <tr>
                            <td>
                              <strong>Tính năng:</strong>
                            </td>
                            <td colspan="2">
                              {{$sanpham->tinhnang}}
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <strong>Công nghệ</strong>
                            </td>
                            <td>
                              {{$sanpham->congnghe}}
                            </td>
                          </tr>
                          <!-- <tr><td><strong>Mở khóa:</strong></td><td colspan="2">
						Vân tay, mã số, thẻ từ, chìa cơ					</td></tr> -->
                          <tr>
                            <td>
                              <strong>Thương hiệu :</strong>
                            </td>
                            <td>
                              {{$sanpham->thuonghieu}}
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <strong>Bảo hành:</strong>
                            </td>
                            <td>
                              {{$sanpham->baohanh}} tháng
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <strong>Lắp đặt:</strong>
                            </td>
                            <td colspan="2">
                              {{$sanpham->lapdat == 'toanquoc' ? 'Toàn Quốc' : ''}}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <aside id="text-3" class="widget widget_text">
                      <div class="textwidget">
                        <div class="why-buy">
                          <label>Tại sao mua hàng tại Osuno?</label>
                        </div>
                        <div class="wsupport-s">
                          <ul>
                            <li>
                              <i class="fa fa-handshake-o" aria-hidden="true"></i>Nhận đổi trả <br> trong 7 ngày
                            </li>
                            <li>
                              <i class="fa fa-wrench" aria-hidden="true"></i>Bảo hành <br> {{$sanpham->baohanh}} tháng.
                            </li>
                            <li>
                              <i class="fa fa-truck" aria-hidden="true"></i>Giao hàng <br> toàn quốc
                            </li>
                          </ul>
                        </div>
                      </div>
                    </aside>
                  </div>
                </div>
                <div class="content-sp">
                  <div class="row row-sp">
                    <div class="col large-8">
                      <div class="content-sp">
                        <div class="title">Thông tin sản phẩm</div>
                        <div class="ct-sp" style="height: auto;"> {!! $sanpham->noidungsanpham !!} </div>
                      </div>
					</div>
                      <div class="col large-4">
                        <div class="thongsokithuat">
                          <div class="title">Thông số kĩ thuật</div>
                          <div class="thongso_content">
                             {!! $sanpham->thongsokythuat !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-footer">
                  <div class="container">
                    <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                      <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                        <li class="reviews_tab active" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                          <a href="#tab-reviews"> Đánh giá (5) </a>
                        </li>
                      </ul>
                      <div class="tab-panels">
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content active" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                          <div id="ywar_reviews">
                            <div id="reviews_summary">
                              <div class="title">Đánh giá của khách hàng</div>
                              <div class="woocommerce-product-rating">
                                <div class="" title="5 / 5 sao">
                                  @php
                                      $star=round($averageStar);
                                      $i=1;
                                      do
                                      {
                                          echo "<i class='fa-solid fa-star' style='color:#FAB703;'></i>";
                                          $i++;
                                      }
                                      while($i<=$star);
                                  @endphp
                                </div>
                                <span class="ywar_review_count">{{$countingRater}} đánh giá</span>
                              </div>
                              <div class="">
                                @php
                                  if($countingRater)
                                  {
                                    $widthPercent5 = ($countingStar['5'] / $countingRater)*100;
                                    $widthPercent4 = ($countingStar['4'] / $countingRater)*100;
                                    $widthPercent3 = ($countingStar['3'] / $countingRater)*100;
                                    $widthPercent2 = ($countingStar['2'] / $countingRater)*100;
                                    $widthPercent1 = ($countingStar['1'] / $countingRater)*100;
                                  }
                                  else
                                  {
                                    $widthPercent5 = 0;
                                    $widthPercent4 = 0;
                                    $widthPercent3 = 0;
                                    $widthPercent2 = 0;
                                    $widthPercent1 = 0;
                                  }
                                @endphp
                                <div class="ywar_review_row">
                                    <div class=""> 5 sao ({{$countingStar['5']}} người)
                                      <div style="background-color:#f4f4f4;" >
                                          @php
                                              echo "<div style='background-color:#f3d053;width:$widthPercent5%;'> </div>"
                                          @endphp 
                                      </div>
                                    </div>
                                </div>
                                <div class="ywar_review_row">
                                  <div class=""> 4 sao ({{$countingStar['4']}} người)
                                    <div style="background-color:#f4f4f4;" >
                                        @php
                                            echo "<div style='background-color:#f3d053;width:$widthPercent4%;'> </div>"
                                        @endphp 
                                    </div>
                                  </div>
                              </div>
                              <div class="ywar_review_row">
                                <div class=""> 3 sao ({{$countingStar['3']}} người)
                                  <div style="background-color:#f4f4f4;" >
                                      @php
                                          echo "<div style='background-color:#f3d053;width:$widthPercent3%;'> </div>"
                                      @endphp 
                                  </div>
                                </div>
                            </div>
                            <div class="ywar_review_row">
                              <div class=""> 2 sao ({{$countingStar['2']}} người)
                                <div style="background-color:#f4f4f4;" >
                                    @php
                                        echo "<div style='background-color:#f3d053;width:$widthPercent2%;'> </div>"
                                    @endphp 
                                </div>
                              </div>
                          </div>
                          <div class="ywar_review_row">
                            <div class=""> 1 sao ({{$countingStar['1']}} người)
                              <div style="background-color:#f4f4f4;" >
                                  @php
                                      echo "<div style='background-color:#f3d053;width:$widthPercent1%;'> </div>"
                                  @endphp 
                              </div>
                            </div>
                        </div>
                              </div>
                              <div id="reviews_header"></div>
                            </div>
                            <div id="reviews_order" style="position: static; zoom: 1;">
                              <h4 style="margin-top:20px; font-weight:bold" id="most_recent_reviews" title="Đánh giá gần đây" >Đánh giá gần đây</h4>
                            </div>
                            <div id="reviews_dialog"></div>
                          </div>
                          <div id="reviews" class="ywar-review-content">
                            <div id="comments">
                              <ol class="commentlist">
                                @foreach($feedback as $fb)
                                <li id="li-comment-{{$fb->fbid}}" class="clearfix ">
                                  <div id="comment-4855" class="comment_container clearfix ">
                                    <img alt="" src="{{asset('images/user.png')}}" class="avatar avatar-60 photo" height="60" width="60" loading="lazy" decoding="async">
                                    <div class="comment-text clearfix ">
                                      <div class="" title="5 / 5">
                                        <span style="width:100%">
                                          @php
                                            $star=$fb->fbdanhgia;
                                            $i=1;
                                            do
                                            {
                                                echo "<i class='fa-solid fa-star' style='color:#FAB703;'></i>";
                                                $i++;
                                            }
                                            while($i<=$star);
                                        @endphp
                                      </div>
                                      <p class="meta">
                                        <strong>{{$fb->fbhoten}}</strong>
                                        <time datetime="2021-08-10T08:55:11+00:00">{{$fb->fbtime}}</time>
                                      </p>
                                      <div class="description ywar-description">
                                        <p>
                                          <span class="review_content">{{$fb->fbcomment}}</span>
                                        </p>
                                        <p></p>
                                      </div>
                                      <div class="ywar-review-thumbnails review_thumbnail horizontalRule">
                                        <a href="https://osuno.com.vn/wp-content/uploads/96215533_171756254306884_6589108138534764544_o.jpg" data-rel="prettyPhoto[review-gallery-5499]">
                                          <img class="ywar_thumbnail" src="{{asset('images/feedback/'.$fb->fbimg)}}" width="70px" height="70px">
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                @endforeach
                              </ol>
                            </div>
                            <div id="review_form_wrapper">
                              <div id="review_form">
                                <div id="respond" class="comment-respond">
                                  <h3 id="reply-title" class="comment-reply-title">
                                    <span class="review_label">Thêm đánh giá</span>
                                    <small>
                                      <a rel="nofollow" id="cancel-comment-reply-link" href="/mua/khoa-thong-minh-cho-biet-thu-osn3362-cong-nghe-hang-dau-nhat-ban/#respond" style="display:none;">Hủy</a>
                                    </small>
                                  </h3>
                                  <form action="{{route('website.danhgia')}}" method="post" id="commentform" class="comment-form" novalidate="" enctype="multipart/form-data">
                                    @csrf
                                    <div style="text-align:center;">Đánh giá sao
                                      <i class='fa-solid fa-star' style='color:#FAB703;'></i><i class='fa-solid fa-star' style='color:#FAB703;'></i><i class='fa-solid fa-star' style='color:#FAB703;'></i><i class='fa-solid fa-star' style='color:#FAB703;'></i><i class='fa-solid fa-star' style='color:#FAB703;'></i>
                                    </div>
                                    
                                    <select name="danhgia" id="" style="">
                                      
                                      <option value="5">Tuyệt vời</option>
                                      <option value="4">Tốt</option>
                                      <option value="3">Cũng được</option>
                                      <option value="2">Tệ</option>
                                      <option value="1">Quá tệ</option>
                                    </select>
                                    <p class="comment-form-comment">
                                      <label for="comment">Nhận xét</label>
                                      <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Bạn đang nghĩ gì?"></textarea>
                                    </p>
                                    <p class="upload_section ">
                                      <label for="ywar-uploadFile"> Ảnh </label>
                                      <input type="file" name="image" value="Chọn ảnh" >
                                      <input name="sanpham" value="{{$sanpham->prodid}}" style="display:none;" required>
                                      <span class="">Sử dụng một trong các loại tệp được phép:jpg,png. Kích thước tối đa được phép là:2 MB.</span>
                                    </p>
                                    <p></p>
                                    <ul id="uploadFileList"></ul>
                                    <p></p>
                                    <p class="">
                                      <label for="author">Name <span class="required">*</span>
                                      </label>
                                      <input id="" name="hoten" type="text" value="" size="30" aria-required="true">
                                    </p>
                                    <p class="">
                                      <label for="email">Email <span class="required">*</span>
                                      </label>
                                      <input id="email" name="email" type="text" value="" size="30" aria-required="true">
                                    </p>
                                    <p class="">
                                      <input  type="submit" id="submit" class="submit">
                                    </p>
                                  </form>
                                </div>
                                <!-- #respond -->
                              </div>
                            </div>
                            <div class="clear"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- shop container -->
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
          <div class="spc row"> @foreach($spbanchay as $sp) <div class="col large-3">
              <div class="">
                <a href="{{route('website.detailProduct',['tensanpham'=>$sp->tensanpham])}}">
                  <img width="290" height="290" src="{{asset('images/sanpham/'.$sp->hinhanhsanpham)}}" class="thumnail wp-post-image" alt="" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$sp->hinhanhsanpham)}}" sizes="(max-width: 1193px) 100vw, 1193px">
                </a>
                <div class="ct-bc">
                  <h4 class="title-sp">
                    <a href="{{route('website.detailProduct',['tensanpham'=>$sp->tensanpham])}}">{{$sp->tensanpham}}</a>
                  </h4>
                  <div class="price-product">Giá: <strong style="font-weight:700;">@php echo number_format($sp->giasanpham)@endphp đ</strong>
                  </div>
                </div>
              </div>
            </div> @endforeach </div>
        </div>
      </div> @include('website.partials.diachishowroom') @include('website.partials.footer') @include('website.partials.script')
      <!-- Mobile Sidebar -->