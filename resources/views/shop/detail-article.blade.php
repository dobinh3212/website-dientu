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
                    <span>Bài viết</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>{{ $article->title }}</span></h1>
            <!-- Blog Post - start -->
            <div class="post-wrap stylization">
                <p><i class="glyphicon glyphicon-calendar"></i> Viết ngày: {{date('d/m/Y', strtotime($article->updated_at)) }} <span style="font-size: 15px; margin: 10px">•</span> <i class="fa fa-user"></i> Tác Giả: Trương Chí Đức</p>
                <br>
                <img class="post-img" src="{{ asset($article->image) }}" alt="">
                {!! $article->description !!}

                <!-- Share Links -->
                <div class="post-share-wrap">
                    <ul class="post-share">
                        <li>
                            <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=http://allstore-html.real-web.pro','sharer', 'toolbar=0,status=0,width=620,height=280');" data-toggle="tooltip" title="Share on Facebook" href="javascript:">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a onclick="popUp=window.open('http://twitter.com/home?status=Post with Shortcodes http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" data-toggle="tooltip" title="Share on Twitter" href="javascript:;">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a onclick="popUp=window.open('http://vk.com/share.php?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" data-toggle="tooltip" title="Share on VK" href="javascript:;">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Pinterest" onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=http://allstore-html.real-web.pro&amp;description=AllStore HTML Template&amp;media=http://discover.real-web.pro/wp-content/uploads/2016/09/insect-1130497_1920.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Google +1" href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Linkedin" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=http://allstore-html.real-web.pro&amp;title=AllStore HTML Template','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Tumblr" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=http://allstore-html.real-web.pro&amp;name=AllStore HTML Template&amp;description=Aliquam%2C+consequuntur+laboriosam+minima+neque+nesciunt+quod+repudiandae+rerum+sint.+Accusantium+adipisci+aliquid+architecto+blanditiis+dolorum+excepturi+harum+ipsa%2C+ipsam%2C...','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                <i class="fa fa-tumblr"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="post-info">
                        <li><p>Tác Giả: Trương Chí Đức</p></li>
                        <li><a href="{{ route('shop.listArticles') }}" class="blog-i-categ">Danh Sách Tin Tức</a></li>
                        <li>Comments: <a href="#">3</a></li>
                    </ul>
                </div>

                <!-- Related Posts -->

            </div>
            <!-- Blog Post - end -->

            <!-- Related Products - start -->
            <div class="prod-related">
                <h2><span>Tin Tức Liên Quan</span></h2>
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

