@extends('shop.layouts.main')

@section('content')
    <main>
        <section class="container">


            <!-- Banner web -->
            <div class="fr-slider-wrap">
                <div class="fr-slider">
                    @foreach($banners as $key => $banner)
                    <ul class="slides">
                        <li>
                            <img src="{{ asset($banner->image) }}" alt="" >
{{--                            <div class="fr-slider-cont">--}}
{{--                                <h3>{{ $banner->title }}</h3>--}}
{{--                                <p class="fr-slider-more-wrap">--}}
{{--                                    <a class="fr-slider-more" href="{{ $banner->url }}">Xem Thêm</a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
                        </li>

                    </ul>
                    @endforeach
                </div>
            </div>


            <!-- danh sách sản phẩm -->
            <div class="fr-pop-wrap">
                @foreach($data as $item)
                    <h3 class="component-ttl"><span>⊰{{ $item['category']->name }}⊱</span></h3>

                    <div class="fr-pop-tab-cont">

                        <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">
                            @foreach($item['products'] as $product)
                                <ul class="slides">

                                    <li class="prod-i">
                                        <div class="prod-i-top">
                                            <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="prod-i-img"><img src="{{ asset($product->image) }}" alt="Aspernatur excepturi rem"></a>
{{--                                            <p class="prod-i-info">--}}
{{--                                                <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>--}}
{{--                                                <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>--}}
{{--                                                <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>--}}
{{--                                            </p>--}}
                                            <p class="prod-i-addwrap">
                                                <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="prod-i-detail">Chi tiết</a>
                                                <a href="{{ route('shop.addToCart', ['id' => $product->id]) }}" class="prod-i-add">Thêm Vào Giỏ</a>
                                            </p>
                                        </div>
                                        @if($product->is_hot == 1)
                                            <div class="prod-sticker">
                                                <p class="prod-sticker-1">HOT</p>
                                            </div>
                                        @endif
                                        <h3>
                                            <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </h3>
                                        <p class="prod-i-price">
                                            <del>{{ number_format($product->price, 0,",",".") }} đ</del>
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

            <!-- Tin Tức Mới nhất -->
            <div class="posts-wrap">
                <h3 class="component-ttl"><span>⊰Tin mới nhất⊱</span></h3>
                <div class="posts-list">
                    @foreach($articlesNew as $arcNew)
                    <div class="posts-i">
                        <a class="posts-i-img" href="{{ route('shop.detailArticle', ['slug' => $arcNew->slug]) }}">
                            <span style="background: url({{ asset($arcNew->image) }})"></span>
                        </a>
                        <time class="posts-i-date" datetime="2016-11-09 00:00:00">{{date('d/m/Y', strtotime($arcNew->updated_at)) }}</time>
                        <div class="posts-i-info">
                            <a href="{{ route('shop.detailArticle', ['slug' => $arcNew->slug]) }}" class="posts-i-ctg">
                                @if($arcNew->type == 1)
                                    <span class="artic-post1">Tin thường ngày</span>
                                @elseif($arcNew->type == 2)
                                    <span class="artic-post2">Tin khuyến mại</span>
                                @else($article->type == 3)
                                    <span class="artic-post3">Tin nổi bật</span>
                                @endif
                            </a>
                            <h3 class="posts-i-ttl">
                                <a href="{{ route('shop.detailArticle', ['slug' => $arcNew->slug]) }}">{{ $arcNew->title }}</a>
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Tin tức mới nhất hết -->
            <div class="brands-wrap">
                <h3 class="component-ttl"><span>⊰Thương Hiệu⊱</span></h3>
                <div class="flexslider brands-list">
                    <ul class="slides">
                        @foreach($brandsNew as $brandN)
                        <li>
                            <a href="{{ $brandN->website }}">
                                <img src="{{ asset($brandN->image) }}" alt="thương hiệu nổi tiếng">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </section>
    </main>
@endsection

