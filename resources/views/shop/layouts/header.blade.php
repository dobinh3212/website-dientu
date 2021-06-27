<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> {{ $settings->phone }}
                </li>
                <li>
                    <i class="fa fa-envelope"></i> {{ $settings->email }}
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
                <a href="index.html">
                    <img src="/frontend/img/logo.png" alt="AllStore - MultiConcept eCommerce Template">
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
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Cart</span>
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
                            <a href="catalog-list.html">
                                {{ $category->name }}
                            </a>

                            <ul>
                                @foreach($categories as $key => $child)
                                    @if($child->parent_id !=0 && $child->parent_id == $category->id)
                                    <li>
                                    <a href="catalog-list.html">
                                        {{$child->name}}
                                    </a>

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
                    <li class="menu-item-has-children">
                        <a href="catalog-list.html">
                            Catalog <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="catalog-list.html">
                                    Catalog List - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-list-2.html">
                                    Catalog List - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery.html">
                                    Catalog Gallery - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery-2.html">
                                    Catalog Gallery - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-table.html">
                                    Catalog Table
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="product.html">
                            Product <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="product.html">
                                    Product - Style 1 (Slider)
                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">
                                    Product - Style 2 (Scroll)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('shop.contact') }}">
                            Liên Hệ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">
                            Blog <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog.html">
                                    Blog - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="blog-2.html">
                                    Blog - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="post.html">
                                    Single Post
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Pages <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="contacts.html">
                                    Contacts
                                </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    Cart
                                </a>
                            </li>
                            <li>
                                <a href="auth.html">
                                    Authorization
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    Compare
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    Wishlist
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    Error 404
                                </a>
                            </li>
                        </ul>
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

