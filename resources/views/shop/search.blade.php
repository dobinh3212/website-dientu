@extends('shop.layouts.main')

@section('content')
    <style>
        /*.section-cont {*/
        /*    padding: 40px 40px 0 40px;*/
        /*    width: 100%;*/
        /*    border: 1px solid #dad7d7;*/
        /*}*/
        /*.section-cont .section-items .prod-i {*/
        /*    margin: 0 2% 20px 0;*/
        /*}*/
        .title-search {
            padding: 0 0 20px 0;
        }

        .holas2 a {
            border: none;
            color: #333;
        }
        .holas2 a:hover {
            text-decoration: none;
            border: none;
            color: royalblue;
        }

        #wrapper {
            max-width: 1170px;
            margin: 0 auto;
        }
        .head {
            text-align: center;
            padding: 20px 0;
        }
        ul.products {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        ul.products li {
            flex-basis: 25%;
            padding: 0 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }
        ul.products li img {
            max-width: 100%;
            height: auto;
        }
        ul.products li .product-top {
            position: relative;
            overflow: hidden;
        }
        ul.products li .product-top .product-thumb {
            display: block;
        }
        ul.products li:hover .product-top .product-thumb img {
            filter: opacity(80%);
        }
        ul.products li .product-top .product-thumb img {
            display: block;
        }
        ul.products li .product-top a.buy-now {
            text-transform: uppercase;
            text-align: center;
            text-decoration: none;
            display: block;
            background-color: #373d54;
            color: #fff;
            padding: 10px 0;
            position: absolute;
            width: 100%;
            bottom: -41px;
            transition: 0.25s ease-in-out;
            opacity: 0.85;
        }
        ul.products li:hover a.buy-now {
            bottom: 0;
        }
        ul.products li .product-info {
            padding: 10px 0;
        }
        ul.products li .product-info a {
            display: block;
            text-decoration: none;
        }
        ul.products li .product-info a.product-name {
            color: #373d54;
            padding: 3px 0;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            height: 40px;
        }
        ul.products li .product-info a.product-price {
            color: #111;
            padding: 3px 0;
            font-weight: 600;
        }

        @media only screen and (max-width: 600px) {
            ul.products {
                flex-direction: column;
            }
        }
    </style>
    <main>
        <section class="container maincont">
            <ul class="b-crumbs">
                <li>
                    <a href="/">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>Tìm Kiếm</span>
                </li>
            </ul>

            <!-- Catalog Items | Gallery V1 - start -->
            @if($totalResult >0)
                <div class="title-search">
                    <h5><span>Tìm thấy ( {{ $totalResult }} ) kết quả với từ khóa "{{ $keyword }}"</span></h5>
                </div>
                <br>
                <div id="wrapper">
                    <ul class="products">
                    @foreach($products as $product)
                        <!-- Mỗi li là 1 cái item chứa các sản phẩm khác nhau -->
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="product-thumb">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" alt="">
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="product-name">{{ $product->name }}</a>
                                    <!-- giá sản phẩm  -->
                                    <div class="product-price" style="text-align: center">{{ number_format($product->sale,0,",",".") }}đ</div>
                                </div>
                            </li>
                        @endforeach
                    <!-- Pagination - end -->
                        @else
                            <div style="text-align: center;">
                                <img src="https://1.bp.blogspot.com/-Xxtk6JuGBq8/X4AOyY4UH6I/AAAAAAAAATM/Y9Hw_X_nbBEYX-kzeuLpwYXWRKsII3lgQCLcBGAsYHQ/s600/Tai-sao-ban-hang-online-khong-ai-mua.jpg" alt="No result" width="250px" height="250px">
                            </div>
                            <h3 class="text-center" style="font-size: 25px;margin: 0 0 30px">Không có kết quả phù hợp với từ khóa "{{ $keyword }}"</h3>
                            <h5 class="text-center holas2"><a href="/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Về Trang Chủ</a></h5>
                        @endif
                    </ul>
                </div>
                @if(count($products)>1)
                    <div class="pagi text-center">
                        {{ $products->appends(request()->all())->links() }}
                    </div>
                @else
                    <div class="pagi text-center">

                    </div>
                @endif

            <!-- Catalog Items | Gallery V1 - end -->
        </section>
    </main>
@endsection

