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
                            <a href="{{ $banner->url }}">
                                <img src="{{ asset($banner->image) }}" alt="" >
                            </a>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>


            <!-- danh sách sản phẩm -->
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
                <h3 class="component-ttl"><span>Tin mới nhất</span></h3>
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
            <!-- Tin Tức mới hết -->

            <!-- Thương hiệu Slider -->
            <div class="brand-wrap">
                <h3 class="component-ttl"><span>Thương Hiệu</span></h3>
                <section class="brands-logo slider">
                    @foreach($brandsNew as $brandN)
                        <div class="slide">
                            <a href="{{ $brandN->website }}">
                                <img src="{{ asset($brandN->image) }}" alt="thương hiệu nổi tiếng">
                            </a>
                        </div>
                    @endforeach
                </section>
            </div>
            <!-- Thương hiệu Slider -->
        </section>
    </main>
@endsection

