@extends('shop.layouts.main')

@section('content')
    <style>
        .section-cont {
            padding: 40px;
            width: 100%;
            border: 1px solid #dad7d7;
        }
        .title-search {
            padding: 0 0 20px 0;
        }

        .holas2 a {
            border: none;
            color: black;
        }
        .holas2 a:hover {
            text-decoration: none;
            border: none;
            color: red;
        }

        .title-search h1 {

        }
    </style>
    <main>
        <section class="container stylization maincont">


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
        <div class="holas">
            <div class="section-cont">

                <div class="prod-items section-items">
                    @foreach($products as $product)
                        <div class="prod-i">
                            <div class="prod-i-top">
                                <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="prod-i-img" title="{{ $product->name }}"><!-- NO SPACE --><img src="{{ asset($product->image) }}" alt="{{ $product->name }}"><!-- NO SPACE --></a>
                            </div>
                            <h3>
                                <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>{{ number_format($product->sale,0,",",".") }}đ</b>
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination - start -->
                {{ $products->appends(['tu-khoa'=>$keyword])->links()  }}
                <!-- Pagination - end -->
                @else
                    <div style="text-align: center;">
                        <img src="https://1.bp.blogspot.com/-Xxtk6JuGBq8/X4AOyY4UH6I/AAAAAAAAATM/Y9Hw_X_nbBEYX-kzeuLpwYXWRKsII3lgQCLcBGAsYHQ/s600/Tai-sao-ban-hang-online-khong-ai-mua.jpg" alt="No result" width="400px" height="200px">
                    </div>
                    <h3 class="text-center">Không có kết quả phù hợp với từ khóa "{{ $keyword }}"</h3>
                    <h5 class="text-center holas2"><a href="/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Về Trang Chủ</a></h5>
                @endif
            </div>
        </div>

            <!-- Catalog Items | Gallery V1 - end -->
        </section>
    </main>
@endsection

