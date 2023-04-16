@include('website.partials.head')
@include('website.partials.head-static')
<body data-rsssl="1" class="archive tax-product_cat term-khoa-van-tay-cho-cua-nha-biet-thu term-58 theme-flatsome ot-vertical-menu woocommerce woocommerce-page woocommerce-js yith-wcan-pro woo-variation-swatches wvs-theme-mica wvs-theme-child-flatsome wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label lightbox nav-dropdown-has-arrow" style="position: relative; min-height: 100%; top: 0px;">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
        <div class="shop-page-title category-page-title page-title ">
            <div class="page-title-inner flex-row  medium-flex-wrap container">
                <div class="flex-col flex-grow medium-text-center">
                    <div class="is-large">
                        <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{route('website.index')}}">Trang chủ</a> <span class="divider">/</span> <a href="{{route('website.sanphambanchay')}}">Cửa hàng</a> <span class="divider">/</span></nav>
                    </div>
                    <div class="category-filtering category-filter-row show-for-medium">
                        <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                        <i class="icon-menu"></i>
                        <strong>Lọc</strong>
                        </a>
                        <div class="inline-block">
                        </div>
                    </div>
                </div>
                <div class="flex-col medium-text-center">
                    <p class="woocommerce-result-count hide-for-medium">
                        Hiển thị tất cả 9 kết quả
                    </p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                            <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                            <option value="rating">Thứ tự theo điểm đánh giá</option>
                            <option value="date">Mới nhất</option>
                            <option value="price" selected="selected">Thứ tự theo giá: thấp đến cao</option>
                            <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                        </select>
                        <input type="hidden" name="paged" value="1">
                    </form>
                </div>
            </div>
        </div>
        
        <main id="main" class="">
            <div class="row category-page-row">
                <div class="col large-3 hide-for-medium ">
                    <div id="shop-sidebar" class="sidebar-inner col-inner">
                        <aside id="yith-woo-ajax-navigation-list-price-filter-2" class="widget yith-wcan-list-price-filter yith-woocommerce-ajax-product-filter">
                            <span class="widget-title shop-sidebar">Giá bán<span class="widget-dropdown" data-toggle="open"></span></span>
                            <div class="is-divider small"></div>
                            <ul class="yith-wcan-list-price-filter">
                                <li class="price-item">
                                    <a class="yith-wcan-price-link yith-wcan-price-filter-list-link" href="{{route('website.filterBanChay',['range'=>07])}}">
                                    Từ: <span class="woocommerce-Price-amount amount"><bdi>0<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> đến: <span class="woocommerce-Price-amount amount"><bdi>7,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>                </a>
                                </li>
                                <li class="price-item">
                                    <a class="yith-wcan-price-link yith-wcan-price-filter-list-link" href="{{route('website.filterBanChay',['range'=>710])}}">
                                    Từ: <span class="woocommerce-Price-amount amount"><bdi>7,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> đến: <span class="woocommerce-Price-amount amount"><bdi>10,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>                </a>
                                </li>
                                <li class="price-item">
                                    <a class="yith-wcan-price-link yith-wcan-price-filter-list-link" href="{{route('website.filterBanChay',['range'=>1012])}}">
                                    Từ: <span class="woocommerce-Price-amount amount"><bdi>10,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> đến: <span class="woocommerce-Price-amount amount"><bdi>12,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>                </a>
                                </li>
                                <li class="price-item">
                                    <a class="yith-wcan-price-link yith-wcan-price-filter-list-link" href="{{route('website.filterBanChay',['range'=>1215])}}">
                                    Từ: <span class="woocommerce-Price-amount amount"><bdi>12,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> đến: <span class="woocommerce-Price-amount amount"><bdi>15,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>                </a>
                                </li>
                                <li class="price-item">
                                    <a class="yith-wcan-price-link yith-wcan-price-filter-list-link" href="{{route('website.filterBanChay',['range'=>1525])}}">
                                    Từ: <span class="woocommerce-Price-amount amount"><bdi>15,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span> đến: <span class="woocommerce-Price-amount amount"><bdi>25,000,000<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>                </a>
                                </li>
                            </ul>
                        </aside>
                        <aside id="woocommerce_products-3" class="widget woocommerce widget_products">
                            <span class="widget-title shop-sidebar">Sản phẩm hot</span>
                            <div class="is-divider small"></div>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="{{route('website.detailProduct',['tensanpham' => $spbanchaynhat->tensanpham])}}">
                                    <img width="350" height="350" src="{{asset('images/sanpham/'.$spbanchaynhat->hinhanhsanpham)}}" sizes="(max-width: 350px) 100vw, 350px">		
                                    <span class="product-title">{{$spbanchaynhat->tensanpham}}</span>
                                    </a>
                                    <div class="" title="Rated 5 out of 5">
                                        @php
                                        $star=$spbanchaynhat->danhgia;
                                        $i=1;
                                        do
                                        {
                                            echo "<i class='fa fa-star' style='color:#FAB703;'></i>";
                                            $i++;
                                        }
                                        while($i<=$star);
                                    @endphp
                                    </div>
                                    <span class="woocommerce-Price-amount amount"><bdi style="font-weight:800;color:Red">{{number_format($spbanchaynhat->giasanpham)}}<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col large-9">
                    <div class="shop-container">
                        <div class="">
                            <div class="CollectionToolbar__Group content ">
                                <div id="collection-sort-popover" class="Popover Popover--positionBottom Popover--alignRight" aria-hidden="true">
                                    <div class="Popover__Content">
                                            <div class="Popover__ValueList" data-scrollable="">
                                                <span class="sxt">Sắp xếp theo: </span>
                                                <a href="{{route('website.filterBanChay',['range' => 'macdinh'])}}" style="background-color:white;"  rel="menu_order">
                                                    Thứ tự mặc định
                                                </a> <span> | </span>
                                                
                                                <a href="{{route('website.filterBanChay',['range' => 'moinhat'])}}" style="background-color:white;"  rel="menu_order">
                                                    Mới nhất
                                                </a> <span> | </span>
                                                <a href="{{route('website.filterBanChay',[ 'range' => 'thapcao'])}}" style="background-color:white;"  rel="menu_order">
                                                    GIÁ - thấp tới cao
                                                </a> <span> | </span>
                                                <a href="{{route('website.filterBanChay',[ 'range' => 'caothap'])}}" style="background-color:white;"  rel="menu_order">
                                                    GIÁ - cao tới thấp
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="yit-wcan-container">
                            <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">
                                @foreach($product_category as $item)
                                <div class="product-small col has-hover product type-product post-243 status-publish first instock product_cat-gia-tren-5-trieu product_cat-khoa-cua-thong-minh product_cat-khoa-cua-van-tay product_cat-khoa-van-tay-cho-cua-nha-biet-thu product_cat-mo-bang-van-tay-ma-so-the-tu-chia-co product_cat-san-pham-ban-chay product_cat-san-pham-moi-nhat product_tag-khoavantaybietthu product_tag-khoa-thong-minh-danh-cho-biet-thu has-post-thumbnail downloadable shipping-taxable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-fade_in_back">
                                                    <a href="{{route('website.detailProduct',['tensanpham' => $item->tensanpham])}}">
                                                    <img width="350" height="350" src="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" >
                                                    <img width="350" height="350" src="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" class="show-on-hover absolute fill hide-for-small back-image" alt="khoa van tay osn3362" decoding="async" loading="lazy" srcset="{{asset('images/sanpham/'.$item->hinhanhsanpham)}}" >				</a>
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
                                                    <p class="name product-title"><a href="{{route('website.detailProduct',['tensanpham' => $item->tensanpham])}}">{{$item->tensanpham}}</a></p>
                                                </div>
                                                <div class="thuong-hieu-wrapper"></div>
                                                <div class="price-wrapper">
                                                    <div class="" title="Rated 5 out of 5">
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
                                                    <span class="price">Giá: @php echo number_format($item->giasanpham) @endphp₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- row -->				
                    </div>
                    <!-- shop container -->		
                </div>
            </div>
        </main>
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col large-12 col-title">
                        <div class="title">Sản phẩm bán chạy</div>
                    </div>
                </div>
                <div class="spc row">
                    @foreach($spbanchay as $sp)
                    <div class="col large-3">
                        <div class="item-product">
                            <a href="{{route('website.detailProduct',['tensanpham' => $sp->tensanpham])}}">
                            <img width="1193" height="1193" src="{{asset('images/sanpham/'.$sp->hinhanhsanpham)}}" class="thumnail wp-post-image" alt="" decoding="async" srcset="{{asset('images/sanpham/'.$sp->hinhanhsanpham)}}" sizes="(max-width: 1193px) 100vw, 1193px">						</a>
                            <div class="ct-bc">
                                <h4 class="title-sp"><a href="{{route('website.detailProduct', ['tensanpham' => $sp->tensanpham])}}">{{$sp->tensanpham}}</a></h4>
                                <div class="price-product" style="font-weight:700">Giá: <strong style="color:black">@php echo number_format($sp->giasanpham)@endphp đ</strong></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('website.partials.diachishowroom')
        @include('website.partials.footer')
    </div>
    @include('website.partials.script')
</body>"