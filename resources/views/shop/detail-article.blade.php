@extends('shop.layouts.main')

@section('content')
    <style>
        .post-share-wrap .post-info li a:hover {
            text-decoration: none;
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
                    <span>Bài viết</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>{{ $article->title }}</span></h1>
            <!-- Blog Post - start -->
            <div class="post-wrap stylization">
                <p><i class="glyphicon glyphicon-calendar"></i> Viết ngày: {{date('d/m/Y', strtotime($article->updated_at)) }} <span style="font-size: 15px; margin: 10px">•</span> <i class="fa fa-user"></i> Tác Giả: Trương Chí Đức
                @if($article->type == 1)
                        <span style="font-size: 15px; margin: 10px">•</span><i class="fa fa-tag"></i> Loại:Tin thường ngày
                @elseif($article->type == 2)
                        <span style="font-size: 15px; margin: 10px">•</span><i class="fa fa-tag"></i> Loại:Tin khuyến mại
                @else($article->type == 3)
                        <span style="font-size: 15px; margin: 10px">•</span><i class="fa fa-tag"></i> Loại:Tin nổi bật
                @endif
                </p>
                <br>
                <img class="post-img" src="{{ asset($article->image) }}" alt="ảnh đẹp" style="width: 879px;height: auto">
                <div class="post-artic">
                    {!! $article->description !!}
                </div>

                <!-- Share Links -->
                <div class="post-share-wrap">
                    <ul class="post-info">
                        <li><a href="{{ route('shop.listArticles') }}" ><i class="fa fa-chevron-circle-left"> Quay lại Danh Sách Tin Tức</i></a></li>
                    </ul>
                </div>

                <!-- Related Posts -->

            </div>
            <!-- Blog Post - end -->

            <!-- Related Products - start -->
            <div class="prod-related">
                <h2><span>༺ Tin Tức Liên Quan ༻</span></h2>
                <div class="prod-related-car" id="prod-related-car">
                    <ul class="slides">
                        <li class="prod-rel-wrap">
                            @foreach($relatedArticle as $arc)
                            <div class="prod-rel">
                                <a href="{{ route('shop.detailArticle', ['slug' => $arc->slug]) }}" class="prod-rel-img">
                                    <img src="{{ asset($arc->image) }}" alt="Adipisci aperiam commodi">
                                </a>
                                <div class="prod-rel-cont">
                                    <h3><a href="{{ route('shop.detailArticle', ['slug' => $arc->slug]) }}">{{ $arc->title }}</a></h3>
                                </div>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
                <ul class="pagi">
                    <li >{{ $relatedArticle->links() }}</li>
                </ul>
            </div>
            <!-- Related Products - end -->

            <!-- Comments - start -->

            <!-- Comments - end -->

            <!-- Comment Form - start -->

            <!-- Comment Form - end -->

        </section>
    </main>
@endsection

