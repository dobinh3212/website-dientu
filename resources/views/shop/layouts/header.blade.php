<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <marquee width="100%" direction="right" style="color: #3a89cf">Chào mừng quý khách hàng đã đến cửa hàng của chúng tôi</marquee>
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="/">
                    <img src="/frontend/img/logo2.png" alt="Cửa Hàng Điện Thoại">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="wishlist.html">
                            <i class="fa fa-heart"></i>
                            <span class="shop-menu-ttl">Wishlist</span>
                            (<span id="topbar-favorites">1</span>)
                        </a>
                    </li>

                    <li>
                        <a href="compare.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="shop-menu-ttl">Compare</span> (5)
                        </a>
                    </li>

                    <li class="topauth">
                        <a href="auth.html">
                            <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Registration</span>
                        </a>
                        <a href="auth.html">
                            <span class="shop-menu-ttl">Login</span>
                        </a>
                    </li>

                    <li>
                        <div class="h-cart">
                            <a href="{{ route('shop.cart') }}">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Giỏ Hàng</span>
                                (<b>0</b>)
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-list.html"><span>Tất cả</span> Danh Mục</a>
                    <ul class="topcatalog-list">
                        @if(!empty($categories))
                            @foreach($categories as $category)
                                @if($category->parent_id == 0)
                                    <li>
                                        <a href="{{ route('shop.listProducts',['slug' => $category->slug]) }}">
                                            {{ $category->name }}
                                        </a>

                                        <ul>
                                            @foreach($categories as $key => $child)
                                                @if($child->parent_id == $category->id)
                                                <li>
                                                <a href="{{ route('shop.listProducts',['slug' => $child->slug]) }}">
                                                    {{$child->name}}
                                                </a>
                                                    @foreach($categories as $key => $child2)
                                                        @if($child2->parent_id == $child->id)
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('shop.listProducts',['slug' => $child2->slug]) }}">
                                                                        {{$child2->name}}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        @endif
                                                    @endforeach
                                                </li>



                                                @endif
                                            @endforeach
                                        </ul>

                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="/" class="active">
                            Trang Chủ
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('shop.listArticles') }}">
                            Tin Tức
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shop.contact') }}">
                            Liên Hệ
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Giới Thiệu
                        </a>
                    </li>

                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>

