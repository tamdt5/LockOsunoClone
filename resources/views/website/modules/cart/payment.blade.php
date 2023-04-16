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
                           <div class="woocommerce-notices-wrapper"></div>
                           <div class="woocommerce-form-coupon-toggle">
                              <div class="woocommerce-info message-wrapper">
                                 <div class="message-container container medium-text-center">
                                    Bạn có mã ưu đãi? <a href="#" class="showcoupon">Ấn vào đây để nhập mã</a>			
                                 </div>
                              </div>
                           </div>
                           <form class="checkout_coupon woocommerce-form-coupon has-border is-dashed" method="post" style="display:none">
                              <p>Nếu bạn có mã giảm giá, vui lòng điền vào phía bên dưới.</p>
                              <div class="coupon">
                                 <div class="flex-row medium-flex-wrap">
                                    <div class="flex-col flex-grow">
                                       <input type="text" name="coupon_code" class="input-text" placeholder="Mã ưu đãi" id="coupon_code" value="" />
                                    </div>
                                    <div class="flex-col">
                                       <button type="submit" class="button expand" name="apply_coupon" value="Áp dụng">Áp dụng</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           <div class="woocommerce-notices-wrapper"></div>
                           <form name="checkout" method="get" class="checkout woocommerce-checkout " action="{{route('website.PostOrder')}}" enctype="multipart/form-data">
                            @csrf  
                              @if(Cart::count()==0)
                                    <div class="alert alert-success alert-dismissible" style="background-color: #17a2b8 !important;">
                                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                       <h5 style="color:white;font-weight:700;font-size:19px;"><i class="fas fa-shopping-cart" style="color:white;font-weight:700;font-size:19px;"></i> Giỏ hàng đang trống</h5>
                                       Vui lòng mua sắm để lắp đầy giỏ hàng nhé 
                                    </div>
                              @else
                              <div class="row pt-0 ">
                                 <div class="large-7 col  ">
                                    <table>
                                       <thead>
                                          <th>Thông tin thanh toán</th>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Họ và tên:(*)</td>
                                             <td><input type="text" name="hoten"></td>
                                          </tr>
                                          <tr>
                                             <td>Địa chỉ(tùy chọn)</td>
                                             <td><input type="text" name="diachi"></td>
                                          </tr>
                                          <tr>
                                             <td>Số điện thoại(*)</td>
                                             <td><input type="text" name="sdt"></td>
                                          </tr>
                                          <tr>
                                             <td>Email(*)</td>
                                             <td><input type="text" name="email"></td>
                                          </tr>
                                          <tr>
                                             <td>Ghi chú đơn hàng(tùy chọn)</td>
                                             <td><textarea class="form-control" name="note" cols="30" rows="10"></textarea>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="large-5 col">
                                    <div class="col-inner has-border">
                                       <div class="checkout-sidebar sm-touch-scroll">
                                          <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                          <div id="order_review" class="woocommerce-checkout-review-order">
                                             <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                   <tr>
                                                      <th class="product-name">Sản phẩm</th>
                                                      <th class="product-total">Tạm tính</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($cart as $item)
                                                   <tr class="cart_item">
                                                      <td class="product-name">
                                                         {{$item->name}} <strong class="product-quantity"> x {{$item->qty}}</strong>											
                                                      </td>
                                                      <td class="product-name" style="display:none;">
                                                         <input type="text" value="{{$item->name}}" name="tensanpham[]"> 
                                                         <input type="text" value="{{$item->qty}}" name="quantity[]">									
                                                         <input type="text" value="{{$item->qty * $item->price}}" name="price[]">									
                                                         <input type="text" value="{{Cart::Total()}}" name="totalprice">									
                                                      </td>
                                                      <td class="product-total">
                                                         <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item->qty * $item->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>					
                                                      </td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                                <tfoot>
                                                   <tr class="cart-subtotal">
                                                      <th>Tạm tính</th>
                                                      <td><span class="woocommerce-Price-amount amount"><bdi>{{Cart::subTotal()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                                   </tr>
                                                   <tr class="order-total">
                                                      <th>Tổng (đã bao gồm thuế )</th>
                                                      <td><strong><span class="woocommerce-Price-amount amount"><bdi>{{Cart::Total()}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                                   </tr>
                                                </tfoot>
                                             </table>
                                             <div id="payment" class="woocommerce-checkout-payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                   <li class="wc_payment_method payment_method_cod">
                                                      <label for="payment_method_cod">
                                                      Trả tiền mặt khi nhận hàng 	</label>
                                                      <div class="payment_box payment_method_cod" >
                                                         <p>Trả tiền mặt khi giao hàng</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                   <noscript>
                                                      Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật tổng</button>
                                                   </noscript>
                                                   <div class="woocommerce-terms-and-conditions-wrapper">
                                                   </div>
                                                   <button type="submit" class="button alt" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="woocommerce-privacy-policy-text">
                                             <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website, và cho các mục đích cụ thể khác đã được mô tả trong <a href="https://osuno.com.vn/?page_id=3" class="woocommerce-privacy-policy-link" target="_blank">chính sách riêng tư</a>.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							         @endif

                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
		 @include('website.partials.diachishowroom')

		 @include('website.partials.footer')

      @include('website.partials.script')
</html>