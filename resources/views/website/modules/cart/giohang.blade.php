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
   @include('website.partials.head') 
   <body data-rsssl="1" class="product-template-default single single-product postid-243 theme-flatsome ot-vertical-menu woocommerce woocommerce-page woocommerce-js yith-wcan-pro woo-variation-swatches wvs-theme-mica wvs-theme-child-flatsome wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label lightbox nav-dropdown-has-arrow" style="position: relative; min-height: 100%; top: 0px;">
      <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
      <div id="wrapper">
         <header id="header" class="header has-sticky sticky-jump">
            @include('.website.partials.head-static')
         </header>
         <div class="page-title shop-page-title product-page-title">
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
            <div id="content" class="content-area page-wrapper" role="main">
               <div class="row row-main">
                  <div class="large-12 col">
                     <div class="col-inner">
                        <div class="woocommerce">
                           <div class="woocommerce-notices-wrapper">
                              <div class="woocommerce-message message-wrapper" role="alert">
                                 <div class="message-container container success-color medium-text-center">
                                    <i class="icon-checkmark"></i>				Giỏ hàng đã được cập nhật.							
                                 </div>
                              </div>
                           </div>
                           <div class="woocommerce row row-large row-divided">
                              <div class="col large-7 pb-0 ">
                                 @if(Cart::count()==0)
                                 <div class="alert alert-success alert-dismissible" style="background-color: #17a2b8 !important;">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h5 style="color:white;font-weight:700;font-size:19px;"><i class="fas fa-shopping-cart" style="color:white;font-weight:700;font-size:19px;"></i> Giỏ hàng đang trống</h5>
                                     Vui lòng mua sắm để lắp đầy giỏ hàng nhé 
                                  </div>
                                 @else
                                  <form class="woocommerce-cart-form" action="{{route('website.updateCart')}}" method="post">
                                    @csrf
                                    <div class="cart-wrapper sm-touch-scroll">
                                       <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                          <thead>
                                             <tr>
                                                <th class="product-name" colspan="3">Sản phẩm</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product-quantity">Số lượng</th>
                                                <th class="product-subtotal">Tạm tính</th>
                                             </tr>
                                          </thead>
                                          <tbody>
											            @foreach($cart as $item)
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                   <td class="product-remove">
                                                      <a href="{{route('website.removeItem',['id'=>$item->rowId])}}" class="remove" aria-label="Xóa sản phẩm này" data-product_id="4380" data-product_sku="OSN-3301">&times;</a>						
                                                   </td>
                                                   <td class="product-thumbnail">
                                                      <a href="https://osuno.com.vn/mua/khoa-cua-dien-tu-mo-qua-app-ban-chay-nhat-hien-nay/"><img width="350" height="350" src="{{asset('images/sanpham/'.$item->options->image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$item->options->image)}} " sizes="(max-width: 350px) 100vw, 350px" /></a>						
                                                   </td>
                                                   <td class="product-name" data-title="Sản phẩm">
                                                      <a href="https://osuno.com.vn/mua/khoa-cua-dien-tu-mo-qua-app-ban-chay-nhat-hien-nay/">{{$item->name}}</a>							
                                                      <div class="show-for-small mobile-product-price">
                                                         <span class="mobile-product-price__qty"> </span>
                                                         <span class="woocommerce-Price-amount amount"></span>							
                                                      </div>
                                                   </td>
                                                   <td class="product-price" data-title="Giá">
                                                      <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item->price,0)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>						
                                                   </td>
                                                   <td class="product-quantity" data-title="Số lượng">
                                                      <div class="quantity buttons_added">
                                                         <label class="screen-reader-text" for="quantity_6433c42606409">Khóa cửa điện tử OSN-3303 số lượng</label>
                                                         <input
                                                            type="number"
                                                            id="quantity_6433c42606409"
                                                            class="input-text qty text"
                                                            step="1"
                                                            min="0"
                                                            max=""
                                                            name="quantity[{{$item->rowId}}]"
                                                            value="{{$item->qty}}"
                                                            title="SL"
                                                            size="4"
                                                            placeholder=""
                                                            inputmode="numeric" />
                                                      </div>
                                                   </td>
                                                   <td class="product-subtotal" data-title="Tạm tính">
                                                      <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item->qty * $item->price,0)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>						
                                                   </td>
                                                </tr>
                                             @endforeach
                                             <tr>
                                                <td colspan="6" class="actions clear">
                                                   <div class="continue-shopping pull-left text-left">
                                                      <a class="button-continue-shopping button primary is-outline"  href="{{route('website.index')}}">
                                                      &#8592;&nbsp;Tiếp tục xem sản phẩm	</a>
                                                   </div>
                                                   <button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>
                                                   <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="4e74303035" /><input type="hidden" name="_wp_http_referer" value="/gio-hang/" />				
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <div class="cross-sells">
                                          <h2>Bạn có thể thích&hellip;</h2>
                                          <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">
                                             <div class="product-small col has-hover product type-product post-4118 status-publish first instock product_cat-san-pham-khoa-cua-van-tay product_cat-khoa-cua-thong-minh product_cat-khoa-cua-van-tay product_cat-khoa-van-tay-cua-go-chung-cu product_cat-mo-tu-xa-qua-app product_cat-san-pham-ban-chay product_cat-san-pham-moi-nhat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                <div class="col-inner">
                                                   <div class="badge-container absolute left top z-1"></div>
                                                   <div class="product-small box ">
                                                      <div class="box-image">
                                                         <div class="image-fade_in_back"> 
                                                            <a href="{{route('website.detailProduct',['tensanpham'=>$favorite->id])}}">
                                                            <img width="350" height="350" src="{{asset('images/sanpham/'.$favorite->hinhanhsanpham)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="https://osuno.com.vn/wp-content/uploads/3320-1-350x350.jpg 350w, https://osuno.com.vn/wp-content/uploads/3320-1-100x100.jpg 100w, https://osuno.com.vn/wp-content/uploads/3320-1-298x298.jpg 298w, https://osuno.com.vn/wp-content/uploads/3320-1-300x300.jpg 300w, https://osuno.com.vn/wp-content/uploads/3320-1-150x150.jpg 150w, https://osuno.com.vn/wp-content/uploads/3320-1.jpg 510w" sizes="(max-width: 350px) 100vw, 350px" /><img width="350" height="350" src="https://osuno.com.vn/wp-content/uploads/3320-2-1-350x350.jpg" class="show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="https://osuno.com.vn/wp-content/uploads/3320-2-1-350x350.jpg 350w, https://osuno.com.vn/wp-content/uploads/3320-2-1-100x100.jpg 100w, https://osuno.com.vn/wp-content/uploads/3320-2-1-298x298.jpg 298w, https://osuno.com.vn/wp-content/uploads/3320-2-1-300x300.jpg 300w, https://osuno.com.vn/wp-content/uploads/3320-2-1-150x150.jpg 150w, https://osuno.com.vn/wp-content/uploads/3320-2-1.jpg 510w" sizes="(max-width: 350px) 100vw, 350px" />				</a>
                                                         </div>
                                                         <div class="image-tools is-small top right show-on-hover">
                                                         </div>
                                                         <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                         </div>
                                                         <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                         </div>
                                                      </div>
                                                      <div class="box-text box-text-products">
                                                         <div class="title-wrapper">
                                                            <p class="name product-title"><a href="https://osuno.com.vn/mua/khoa-van-tay-osn-3302/">{{$favorite->tensanpham}}</a></p>
                                                         </div>
                                                         <div class="thuong-hieu-wrapper"></div>
                                                         <div class="price-wrapper">
                                                            <div class="" title="Rated 4.8333333333333 out of 5">
                                                               <span style="width:96.666666666667%">
                                                                  
                                                            </div>
                                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi>5,190,000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- row -->
                                       </div>
                                    </div>
                                 </form>
                                 @endif
                              </div>
                              <div class="cart-collaterals large-5 col pb-0">
                                 <div class="cart-sidebar col-inner ">
                                    <div class="cart_totals ">
                                       <table cellspacing="0">
                                          <thead>
                                             <tr>
                                                <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
                                             </tr>
                                          </thead>
                                       </table>
                                       <h2>Cộng giỏ hàng</h2>
                                       <table cellspacing="0" class="shop_table shop_table_responsive">
                                          <tr class="cart-subtotal">
                                             <th>Tạm tính</th>
                                             <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount"><bdi>{{Cart::subTotal()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                          </tr>
                                          <tr class="cart-subtotal">
                                             <th>Thuế</th>
                                             <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount"><bdi>{{Cart::Tax()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                          </tr>
                                          <tr class="order-total">
                                             <th>Tổng </th>
                                             <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount"><bdi>{{Cart::Total()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                          </tr>
                                       </table>
                                       <div class="wc-proceed-to-checkout">
                                          <a href="{{route('website.payment')}}" class="checkout-button button alt wc-forward">
                                          Tiến hành thanh toán</a>
                                       </div>
                                    </div>
                                    <div class="cart-sidebar-content relative"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="cart-footer-content after-cart-content relative"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         @include('website.partials.diachishowroom')
         @include('website.partials.footer')
      </div>
      @include('website.partials.script')
</html>