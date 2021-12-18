@extends('shop.layouts.main')

@section('content')
    <style>
        .post-share-wrap .post-info li a:hover {
            border: none;
            color: #3a89cf;
        }
        .post-share-wrap .post-info li a {
            color: #373d54;
            border: none;
            font-size: 16px;
            text-transform: none;
            transition: all 0.2s;
        }

        .post-share-wrap .post-share {
            font-size: 16px;
        }

        .post-share-wrap .post-share li a .fa-facebook:hover {
            opacity: 75%;
        }

        /*.stylization h2 {*/
        /*    padding: 0 41px;*/
        /*}*/

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
                <img class="post-img" src="{{ asset($article->image) }}" alt="ảnh đẹp" style="width: 100%">
{{--                margin: 0 auto 30px;--}}
                <div class="post-artic">
                    {!! $article->description !!}
                </div>

                <!-- Share Links -->
                <div class="post-share-wrap">
                    <ul class="post-share">
                        <li style="background: #373d54">
                            <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=http://webdev.local:8888/chi-tiet-tin-tuc/{{ $article->slug }}','sharer', 'toolbar=0,status=0,width=620,height=280');" data-toggle="tooltip" title="Share on Facebook" href="javascript:">
                                <i class="fa fa-facebook" style="padding: 6px;color: #fff"> Chia sẻ</i>
                            </a>
                        </li>
                    </ul>
                    <ul class="post-share post-info pull-right">
                        <li><a href="{{ route('shop.listArticles') }}" ><i class="fa fa-chevron-circle-left"> Trở lại </i></a></li>
                    </ul>
                </div>

                <!-- Related Posts -->

            </div>
            <!-- Blog Post - end -->

            <!-- Related Products - start -->
            <div class="prod-related">
                <h2><span>༺ Bài Viết Liên Quan ༻</span></h2>
                <div class="prod-related-car" id="prod-related-car">
                    <ul class="slides">
                        <li class="prod-rel-wrap">
                            @foreach($relatedArticle as $arc)
                            <div class="prod-rel">
                                <a href="{{ route('shop.detailArticle', ['slug' => $arc->slug]) }}" class="prod-rel-img">
                                    <img src="{{ asset($arc->image) }}" alt="bài viết liên quan">
                                </a>
                                <div class="prod-rel-cont">
                                    <h3><a href="{{ route('shop.detailArticle', ['slug' => $arc->slug]) }}">{{ $arc->title }}</a></h3>
                                </div>
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
                @if(count($relatedArticle) > 1)
                <ul class="pagi">
                    <li >{{ $relatedArticle->links() }}</li>
                </ul>
                @else
                     {{-- đếm số bài viết liên quan nhỏ hơn 2 thì không hiển thị phân trang
                      và xóa bỏ những pagi dư thừa khiến trang web không đẹp --}}
                @endif
            </div>
            <!-- Related Products - end -->
            <hr>
            <!-- Comments - start -->

            <!-- Comments - end -->

            <!-- Comment Form - start -->

            <!-- Comment Form - end -->

        </section>
    </main>
@endsection

