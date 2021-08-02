@extends('shop.layouts.main')

@section('content')
    <main>
        <section class="container">


            <!-- Slider -->
            <div class="fr-slider-wrap">
                <div class="fr-slider">
                    @foreach($banners as $key => $banner)
                    <ul class="slides">
                        <li>
                            <a href="{{ $banner->url }}" target="_blank">
                                <img src="{{ asset($banner->image) }}" alt="" >
                            </a>
{{--                            <div class="fr-slider-cont">--}}
{{--                                <h3>{{ $banner->title }}</h3>--}}
{{--                                <p class="fr-slider-more-wrap">--}}
{{--                                    <a class="fr-slider-more" href="#">Xem Thêm</a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
                        </li>

                    </ul>
                    @endforeach
                </div>
            </div>


            <!-- Popular Products -->
            <div class="fr-pop-wrap">
                @foreach($data as $item)
                    <h3 class="component-ttl"><span>{{ $item['category']->name }}</span></h3>

                    <div class="fr-pop-tab-cont">

                        <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">
                            @foreach($item['products'] as $product)
                                <ul class="slides">

                                    <li class="prod-i">
                                        <div class="prod-i-top">
                                            <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="prod-i-img"><img src="{{ asset($product->image) }}" alt="Aspernatur excepturi rem"></a>
                                            <p class="prod-i-info">
                                                <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                                <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                                <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                            </p>
                                            <p class="prod-i-addwrap">
                                                <a href="{{ route('shop.addToCart', ['id' => $product->id]) }}" class="prod-i-add">Thêm Vào Giỏ</a>
                                            </p>
                                        </div>
                                        @if($product->is_hot == 1)
                                            <div class="prod-sticker">
                                                <p class="prod-sticker-1">HOT</p>
                                            </div>
                                        @endif
                                        <h3>
                                            <a href="product.html">{{ $product->name }}</a>
                                        </h3>
                                        <p class="prod-i-price">
                                            <strike>{{ number_format($product->price, 0,",",".") }} đ</strike>
                                            <br>
                                            <b>{{ number_format($product->sale, 0,",",".") }} đ</b>
                                        </p>

                                    </li>



                                </ul>
                            @endforeach
                        </div>




                    </div><!-- .fr-pop-tab-cont -->

                @endforeach
            </div>
            <!-- .fr-pop-wrap -->


            <!-- Banners -->
{{--            <div class="banners-wrap">--}}
{{--                <div class="banners-list">--}}
{{--                    @foreach($leftBanners as $key => $banner1)--}}
{{--                        <div class="banner-i style_11">--}}

{{--                            <span class="banner-i-bg" style="background: url({{ asset($banner1->image) }});"></span>--}}
{{--                            <div class="banner-i-cont">--}}
{{--                                <h3 class="banner-i-ttl">{{ $banner1->title }}</h3>--}}
{{--                                <p class="banner-i-link"><a href="section.html">Xem thêm</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                    <div class="banner-i style_22">--}}
{{--                        <span class="banner-i-bg" style="background: url(https://icdn.dantri.com.vn/thumb_w/640/2019/11/11/xiaomimi-9-lite-1573415336440.jpg);"></span>--}}
{{--                        <div class="banner-i-cont">--}}
{{--                            <h3 class="banner-i-ttl">ĐIỆN THOẠI <br> ĐƯỢC GIẢM GIÁ <br>năm 2021</h3>--}}
{{--                            <p class="banner-i-link"><a href="section.html">Xem thêm</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="banner-i style_21">--}}
{{--                        <span class="banner-i-bg" style="background: url(https://cdn.tgdd.vn/Files/2019/08/22/1190454/laptop-vien-man-hinh-mong-co-nhung-uu-va-nhuoc-diem-gi--4.jpg);"></span>--}}
{{--                        <div class="banner-i-cont">--}}
{{--                            <h3 class="banner-i-ttl">LAPTOP <br> ĐƯỢC ƯA THÍCH NĂM 2021</h3>--}}
{{--                            <p class="banner-i-link"><a href="section.html">Đến mục lục</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Special offer -->



            <!-- Latests news -->



            <!-- Testimonials -->



            <!-- Quick View Product - start -->
            <div class="qview-modal">
                <div class="prod-wrap">
                    <a href="product.html">
                        <h1 class="main-ttl">
                            <span>Reprehenderit adipisci</span>
                        </h1>
                    </a>
                    <div class="prod-slider-wrap">
                        <div class="prod-slider">
                            <ul class="prod-slider-car">
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                        <img src="http://placehold.it/500x591" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="prod-thumbs">
                            <ul class="prod-thumbs-car">
                                <li>
                                    <a data-slide-index="0" href="#">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <img src="http://placehold.it/500x591" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <img src="http://placehold.it/500x525" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="5" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="6" href="#">
                                        <img src="http://placehold.it/500x722" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="prod-cont">
                        <p class="prod-actions">
                            <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
                            <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                        </p>
                        <div class="prod-skuwrap">
                            <p class="prod-skuttl">Color</p>
                            <ul class="prod-skucolor">
                                <li class="active">
                                    <img src="/frontend/img/color/blue.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/frontend/img/color/red.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/frontend/img/color/green.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/frontend/img/color/yellow.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/frontend/img/color/purple.jpg" alt="">
                                </li>
                            </ul>
                            <p class="prod-skuttl">Sizes</p>
                            <div class="offer-props-select">
                                <p>XL</p>
                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li class="active"><a href="#">XL</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">4XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="prod-info">
                            <p class="prod-price">
                                <b class="item_current_price">$238</b>
                            </p>
                            <p class="prod-qnt">
                                <input type="text" value="1">
                                <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                                <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                            </p>
                            <p class="prod-addwrap">
                                <a href="#" class="prod-add">Add to cart</a>
                            </p>
                        </div>
                        <ul class="prod-i-props">
                            <li>
                                <b>SKU</b> 05464207
                            </li>
                            <li>
                                <b>Manufacturer</b> Mayoral
                            </li>
                            <li>
                                <b>Material</b> Cotton
                            </li>
                            <li>
                                <b>Pattern Type</b> Print
                            </li>
                            <li>
                                <b>Wash</b> Colored
                            </li>
                            <li>
                                <b>Style</b> Cute
                            </li>
                            <li>
                                <b>Color</b> Blue, Red
                            </li>
                            <li><a href="#" class="prod-showprops">All Features</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Quick View Product - end -->
        </section>
    </main>
@endsection

