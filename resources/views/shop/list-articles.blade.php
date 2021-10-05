@extends('shop.layouts.main')

@section('content')
    <style>
        .artic-post1 {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 2px;
            background: dodgerblue;
            color: #fff;
            padding: 3px 10px;
            margin-right: 15px;
        }
        .artic-post2{
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 2px;
            background: purple;
            color: #fff;
            padding: 3px 10px;
            margin-right: 15px;
        }
        .artic-post3 {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 2px;
            background: red;
            color: #fff;
            padding: 3px 10px;
            margin-right: 15px;
        }
    </style>
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="/">
                        Trang Chủ
                    </a>
                </li>
                <li>
                    <span>Tin Tức</span>
                </li>
            </ul>
            <h1 class="main-ttl main-ttl-categs"><span>Tin Tức Chung</span></h1>
            <!-- Blog Categories -->


            <!-- Blog Posts - start -->
            <div class="posts-list blog-page">
                @foreach($articles as $article)
                <div class="cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 posts2-i">
                    <a class="posts-i-img" href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}"><span style="background: url({{ asset($article->image) }})"></span></a>
                    <span>
                        @if($article->type == 1)
                                <span class="artic-post1">Tin thường ngày</span>
                            @elseif($article->type == 2)
                                <span class="artic-post2">Tin khuyến mại</span>
                            @else($article->type == 3)
                                <span class="artic-post3">Tin nổi bật</span>
                        @endif
                        Ngày Đăng: {{date('d/m/Y', strtotime($article->updated_at)) }}</span>
                    <hr style="margin-top: 5px; margin-bottom: 16px; border-top: 0">
                    <h3 class="posts-i-ttl"><a href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}">{{ $article->title }}</a></h3>
                    {!! $article->summary !!}
{{--                    <a href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}" class="posts-i-more"><i class="fa fa-angle-double-right"></i> Xem Thêm</a>--}}
                </div>
                @endforeach
            </div>
            <!-- Blog Posts - end -->

            <!-- Pagination - start -->
            <ul class="pagi">
                <li>{{ $articles->links() }}</li>
            </ul>
            <!-- Pagination - end -->
        </section>
    </main>
@endsection

