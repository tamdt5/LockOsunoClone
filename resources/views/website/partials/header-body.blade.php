<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="header-wrapper">
    <div id="masthead" class="header-main ">
       <div class="header-inner flex-row container logo-left" role="navigation">
          <!-- Logo -->
          <div id="logo" class="flex-col logo">
             <!-- Header logo -->
             <a href="https://osuno.com.vn/" title="Khóa Cửa Thông Minh Osuno - Khóa Cửa Vân Tay" rel="home">
             <img width="220" height="100" src="https://osuno.com.vn/wp-content/uploads/OSUNO-logo.png" class="header_logo header-logo logo-desktop" alt="Khóa Cửa Thông Minh Osuno"><img width="220" height="100" src="https://osuno.com.vn/wp-content/uploads/220x50.png" class="header_logo header-logo logo-mobile" alt="Khóa Cửa Thông Minh Osuno"><img width="220" height="100" src="https://osuno.com.vn/wp-content/uploads/OSUNO-logo.png" class="header-logo-dark" alt="Khóa Cửa Thông Minh Osuno"></a>
          </div>
          <!-- Mobile Left Elements -->
          <div class="flex-col show-for-medium flex-left">
             <ul class="mobile-nav nav nav-left ">
             </ul>
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
                                  <i class="icon-search"></i>			</button>
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
                      <div class="icon"><i class="fa fa-phone" aria-hidden="true" style="transform:rotate(90deg)"></i></div>
                      <p><span>Hotline: 19009292</span></p>
                   </a>
                </li>
                <li class="cart-item has-icon">
                   <a href="https://osuno.com.vn/gio-hang/" title="Giỏ hàng" class="header-cart-link is-small">
                   <i class="fas fa-shopping-cart" data-icon-label="1" style="color:white">
                   </i>
                   <span class="header-cart-title">
                   Giỏ hàng     </span>
                   </a>
                </li>
             </ul>
          </div>
          <!-- Mobile Right Elements -->
          <div class="flex-col show-for-medium flex-right">
             <ul class="mobile-nav nav nav-right ">
                <li class="cart-item has-icon">
                   <a href="https://osuno.com.vn/gio-hang/" title="Giỏ hàng" class="header-cart-link is-small">
                   <i class="fas fa-shopping-cart" data-icon-label="1">
                   </i>
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
                   <ul id="mega_menu" class="sf-menu sf-vertical sf-js-enabled sf-arrows" style="touch-action: pan-y;"><li id="menu-item-2956" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2956">
                     @foreach($cateMenu as $cate)
                     <li id="menu-item-{{$cate->id}}" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2957"><a href="{{route('website.detailCategory',['tentheloai' => $cate->tentheloai])}}">{{$cate->tentheloai}}</a></li>
                     @endforeach
                  </ul>   
                </div>
             </ul>
          </div>
          <div class="flex-col hide-for-medium flex-right flex-grow">
             <ul class="nav header-nav header-bottom-nav nav-right  nav-size-large">
                <li id="menu-item-2975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item menu-item-2975 active"><a href="https://osuno.com.vn/" aria-current="page" class="nav-top-link">Trang chủ</a></li>
                <li id="menu-item-2977" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2977"><a href="https://osuno.com.vn/gioi-thieu-cong-tnhh-phat-trien-cong-nghe-long-tien-hai/" class="nav-top-link">Giới thiệu</a></li>
                <li id="menu-item-2979" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2979"><a href="https://osuno.com.vn/category/tin-tuc/" class="nav-top-link">Tin tức</a></li>
                <li id="menu-item-3427" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3427"><a href="https://osuno.com.vn/category/video/" class="nav-top-link">Video</a></li>
                <li id="menu-item-2980" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2980"><a href="https://osuno.com.vn/category/tuyen-dung/" class="nav-top-link">Tuyển dụng</a></li>
                <li id="menu-item-4355" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4355"><a href="https://osuno.com.vn/category/ho-tro-ky-thuat/" class="nav-top-link">Hỗ trợ kỹ thuật</a></li>
                <!-- GTranslate: https://gtranslate.io/ -->
                <li style="position:relative;" class="menu-item menu-item-gtranslate"><a href="#" onclick="doGTranslate('vi|en');return false;" title="English" class="glink nturl notranslate"><img src="//osuno.com.vn/wp-content/plugins/gtranslate/flags/svg/en-us.svg" height="32" width="32" alt="English"></a></li>
                <li style="position:relative;" class="menu-item menu-item-gtranslate"><a href="#" onclick="doGTranslate('vi|vi');return false;" title="Vietnamese" class="glink nturl notranslate"><img src="//osuno.com.vn/wp-content/plugins/gtranslate/flags/svg/vi.svg" height="32" width="32" alt="Vietnamese"></a></li>
                <style>a.glink img {margin-right:2px;}</style>
                <style>#goog-gt-tt{display:none!important;}.goog-te-banner-frame{display:none!important;}.goog-te-menu-value:hover{text-decoration:none!important;}.goog-text-highlight{background-color:transparent!important;box-shadow:none!important;}body{top:0!important;}#google_translate_element2{display:none!important;}</style>
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
                      </div>
                      Được hỗ trợ bởi <span style="white-space:nowrap"><a class="VIpgJd-ZVi9od-l4eHX-hSRGPd" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Dịch">Dịch</a></span>
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
                                  <i class="icon-search"></i>			</button>
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
                      <i class="fas fa-bars"></i> Danh mục sản phẩm                
                   </div>
                   <ul id="mega_menu" class="sf-menu sf-vertical">
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2956"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-van-tay-cua-go-chung-cu/">Khóa cửa điện tử</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2957"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-the-tu-cho-khach-san/">Khóa thẻ từ khách sạn</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3434"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-cua-van-tay/">Khóa cửa vân tay</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2955"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-van-tay-cho-cua-nha-biet-thu/">Khóa vân tay cho biệt thự</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2963"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-van-tay-cua-kinh-cuong-luc/">Khóa điện tử cửa kính</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2958"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-van-tay-cua-nhom-xingfa/">Khóa cửa nhôm xingfa</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3433"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-cua-thong-minh/">Khóa thông minh</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2962"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-van-tay-cho-cua-sat-inox/">Khóa vân tay cửa sắt</a></li>
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3008"><a href="https://osuno.com.vn/danh-muc-san-pham/khoa-co/">Khóa cơ</a></li>
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