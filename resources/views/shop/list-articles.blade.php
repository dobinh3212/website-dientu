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

        /*.well {*/
        /*    margin: 35px;*/
        /*}*/

        /*.media-object {*/
        /*    width: 350px;*/
        /*    height: 220px;*/
        /*}*/

        /*.media-heading {*/
        /*    font-size: 20px;*/
        /*}*/

        /*@media only screen and (max-width: 550px){*/
        /*    body .pagi {*/
        /*        padding: 13px 0px 13px;*/
        /*    }*/
        /*}*/

        /*.readmore {*/
        /*    border: 1px solid #cccccc;*/
        /*    padding-left: 0;*/
        /*    padding-right: 10px;*/
        /*    padding-top: 5px;*/
        /*    padding-bottom: 5px;*/
        /*    background: #373d54;*/
        /*    color: #fff;*/
        /*}*/

        /*.readmore > a {*/
        /*    color: #fff;*/
        /*}*/

        /*.readmore > a:hover {*/
        /*    opacity: 90%;*/
        /*    color: #fff;*/
        /*}*/
    </style>
    <main>
        <div class="container">

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
            <h1 class="main-ttl"><span>Tin Tức Chung</span></h1>

            <div class="posts-list blog-page">
                @foreach($articles as $article)
                    <div class="cf-sm-6 cf-lg-4 col-xs-12 col-sm-6 col-md-4 posts2-i">
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

{{--            @foreach($articles as $article)--}}
{{--            <div class="well">--}}
{{--                <div class="media">--}}
{{--                    <a class="pull-left" href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}">--}}
{{--                        <img class="media-object" src="{{ asset($article->image) }}">--}}
{{--                    </a>--}}
{{--                    <div class="media-body">--}}
{{--                        <h4 class="media-heading">{{ $article->title }}</h4>--}}
{{--                        <ul class="list-inline list-unstyled" style="margin-bottom: 5px">--}}
{{--                            <li><span><i class="glyphicon glyphicon-calendar"></i> {{date('d/m/Y', strtotime($article->updated_at)) }} </span></li>--}}
{{--                            <li>|</li>--}}
{{--                            <span>--}}
{{--                                @if($article->type == 1)--}}
{{--                                    <span style="color: dodgerblue">Tin thường ngày</span>--}}
{{--                                @elseif($article->type == 2)--}}
{{--                                    <span style="color: #dd13f0">Tin khuyến mại</span>--}}
{{--                                @else($article->type == 3)--}}
{{--                                    <span style="color: #eb0909">Tin nổi bật</span>--}}
{{--                                @endif--}}
{{--                            </span>--}}
{{--                            <li>|</li>--}}
{{--                            <li>--}}
{{--                                <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->--}}
{{--                                <span><i class="fa fa-facebook-square"></i></span>--}}
{{--                                <span><i class="fa fa-twitter-square"></i></span>--}}
{{--                                <span><i class="fa fa-google-plus-square"></i></span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <p>--}}
{{--                            {!! $article->summary !!}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="readmore pull-right">--}}
{{--                        <a href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}">Xem Thêm</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--            <ul class="pagi text-center">--}}
{{--                <li>{{ $articles->links() }}</li>--}}
{{--            </ul>--}}
        </div>
    </main>
@endsection

