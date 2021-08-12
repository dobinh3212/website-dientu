@extends('shop.layouts.main')

@section('content')
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
{{--                    <time class="posts-i-date" datetime="2017-01-01 12:00">{{ $article->updated_at }}</time>--}}
                    <span><i class="glyphicon glyphicon-calendar"></i> Cập nhật ngày: {{date('d/m/Y', strtotime($article->updated_at)) }}</span>
                    <hr>
                    <h3 class="posts-i-ttl"><a href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}">{{ $article->title }}</a></h3>
                    {!! $article->summary !!}
                    <a href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}" class="posts-i-more"><i class="fa fa-angle-double-right"></i> Xem Thêm</a>
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

