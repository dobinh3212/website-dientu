@extends('shop.layouts.main')

@section('content')
    <style>
        .section-cont{
            padding: 40px;
            margin: 0 0 40px 0;
            width: 100%;
            border: 1px solid #373d54;
        }
        .title-search{
            padding: 0 0 20px 0;
        }

        .title-search h1{

        }
    </style>
    <main>
        <section class="container">


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

            <div class="title-search">
                <h1><span>Tìm thấy ( {{ $totalResult }} ) kết quả với từ khóa "{{ $keyword }}"</span></h1>
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
            </div>
        </div>

            <!-- Catalog Items | Gallery V1 - end -->
        </section>
    </main>
@endsection

