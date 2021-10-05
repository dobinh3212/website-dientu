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
                    {{ $category->name }}
                </li>
            </ul>
            <h1 class="main-ttl"><span>{{ $category->name }}</span></h1>
            <!-- Catalog Sidebar - start -->
            <div class="section-sb">

                <!-- Catalog Categories - start -->

                <!-- Catalog Categories - end -->

                <!-- Filter - start -->
                <div class="section-filter">
                    <button id="section-filter-toggle" class="section-filter-toggle" data-close="Hide Filter" data-open="Show Filter">
                        <span>Show Filter</span> <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="section-filter-cont">
                        <div class="section-filter-item opened">
                            <p class="section-filter-ttl">Giá sản phẩm</p>
                            <div class="section-filter-fields">
                                <p class="section-filter-field">
                                    <input {{ ($filter_price == '' ? 'checked' : '') }} class="filter-price" value="tat-ca" type="radio" name="availability" id="section-filter-radio1-1" >
                                    <label class="section-filter-radio" for="section-filter-radio1-1"><a href="javascript:void(0)">Tất cả</a></label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-2" {{ ($filter_price == '1-2000000' ? 'checked' : '') }} class="filter-price" type="radio" name="price" value="1-2000000">
                                    <label class="section-filter-radio" for="section-filter-radio1-2"><a href="#">Dưới 2 triệu</a></label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-3" {{ ($filter_price == '2000000-4000000' ? 'checked' : '') }} class="filter-price" type="radio" name="price" value="2000000-4000000">
                                    <label class="section-filter-radio" for="section-filter-radio1-3"><a href="#">Từ 2 - 4 triệu</a></label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-4" {{ ($filter_price == '4000000-7000000' ? 'checked' : '') }} class="filter-price" type="radio" name="price" value="4000000-7000000">
                                    <label class="section-filter-radio" for="section-filter-radio1-4"><a href="#">Từ 4 - 7 triệu</a></label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-5" {{ ($filter_price == '7000000-13000000' ? 'checked' : '') }} class="filter-price" type="radio" name="price" value="7000000-13000000">
                                    <label class="section-filter-radio" for="section-filter-radio1-5"><a href="#">Từ 7 - 13 triệu</a></label>
                                </p>
                                <p class="section-filter-field">
                                    <input id="section-filter-radio1-6" {{ ($filter_price == '13000000-' ? 'checked' : '') }} class="filter-price" type="radio" name="price" value="13000000-">
                                    <label class="section-filter-radio" for="section-filter-radio1-6"><a href="#">Trên 13 triệu</a></label>
                                </p>
                            </div>
                        </div>
                        <div class="section-filter-item opened">
                            <p class="section-filter-ttl">Thương Hiệu</p>
                            <div class="section-filter-fields">
                                <p class="section-filter-field">
                                    <input class="filter_category" id="section-filter-checkbox2-1" data-text="tat-ca" type="checkbox" name="category_id" value="" checked>
                                    <label class="section-filter-checkbox" for="section-filter-checkbox2-1"><a href="javascript:void(0)">Tất cả</a></label>
                                </p>
                                @foreach($branchs as $child)
                                <p class="section-filter-field">
                                    <input class="filter_category" data-text="{{ $child->slug }}" type="checkbox" name="category_id" value="{{ $child->id }}"id="section-filter-checkbox2-{{ $child->id }}" >
                                    <label class="section-filter-checkbox" for="section-filter-checkbox2-{{ $child->id }}"><a href="javascript:void(0)">{{ $child->name }}</a></label>
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filter - end -->

            </div>
            <!-- Catalog Sidebar - end -->
            <!-- Catalog Items | Gallery V1 - start -->
            <div class="section-cont">

                <!-- Catalog Topbar - start -->
                <div class="section-top">
                    <!-- Sorting -->

                    <div class="section-sortby">
                        <label style="font-size: 16px; margin-right: 10px; color: #373d54;"> Sắp Xếp </label>
                        <select name="sortby" id="productShort" class="filter_sort">
                            <option value="tat-ca">--- Tất cả sản phẩm ---</option>
                            <option {{ ($filter_sort == 'noi-bat' ? 'selected' : '') }} value="noi-bat">Nổi bật</option>
                            <option {{ ($filter_sort == 'gia-thap-den-cao' ? 'selected' : '') }} value="gia-thap-den-cao">Giá từ thấp đến cao</option>
                            <option {{ ($filter_sort == 'gia-cao-den-thap' ? 'selected' : '') }} value="gia-cao-den-thap">Giá từ cao đến thấp</option>
                        </select>
                        <label style="font-size: 16px; margin-left: 10px; color: #373d54;"> <a href="{{ route('shop.listProducts',['slug' => $category->slug]) }}">Xóa bộ lọc</a> </label>
                    </div>

                    <!-- Count per page -->
{{--                    <div class="section-count">--}}
{{--                        <p>12</p>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">12</a></li>--}}
{{--                            <li><a href="#">24</a></li>--}}
{{--                            <li><a href="#">48</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                </div>
                <!-- Catalog Topbar - end -->
                <div class="prod-items section-items">
                    @foreach($products as $product)
                    <div class="prod-i">
                        <div class="prod-i-top">
                            <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}" class="prod-i-img"><!-- NO SPACE --><img src="{{ asset($product->image) }}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
{{--                            <p class="prod-i-info">--}}
{{--                                <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>--}}
{{--                                <a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>--}}
{{--                                <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>--}}
{{--                            </p>--}}
{{--                            <a href="#" class="prod-i-buy">Thêm Vào Giỏ</a>--}}
{{--                            <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>--}}

                            @if($product->is_hot == 1)
                                <div class="prod-sticker">
                                    <p class="prod-sticker-1">HOT</p>
                                </div>
                            @endif
                        </div>
                        <h3>
                            <a href="{{ route('shop.detailProduct',['slug' => $product->slug]) }}">{{ $product->name }}</a>
                        </h3>
                        <p class="prod-i-price">
                            <del>{{ number_format($product->price, 0,",",".") }} đ</del>
                            <br>
                            <b>{{ number_format($product->sale, 0,",",".") }} đ</b>
                        </p>
{{--                        <div class="prod-i-skuwrapcolor">--}}
{{--                            <ul class="prod-i-skucolor">--}}
{{--                                <li class="bx_active"><img src="/frontend/img/color/red.jpg" alt="Red"></li>--}}
{{--                                <li><img src="/frontend/img/color/blue.jpg" alt="Blue"></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    @endforeach

                </div>

                <!-- Pagination - start -->
                <ul class="pagi">
                    <li>{{ $products->links() }}</li>
                </ul>
                <!-- Pagination - end -->
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

            <!-- Quick View Product - start -->

            <!-- Quick View Product - end -->
        </section>
    </main>
@endsection

@section('my_javascript')
    <script type="text/javascript">

        var pathname = window.location.pathname; // danh-muc/dien-thoai , /danh-muc/tablet
        var urlParams = new URLSearchParams(window.location.search); // khoi tao

        $(document).on('click', '.filter_category', function () {
            var slug = $(this).data('text');

            // check nếu là tất cả
            if (slug === 'tat-ca') {
                urlParams.delete('thuong-hieu');
            } else {
                var inputCategories = $('.filter_category');
                var str_slug = '';

                // vòng lặp từ 1, để loại bỏ tất-cả
                for(var i = 1; inputCategories[i]; ++i) {
                    if (inputCategories[i].checked) {
                        str_slug += inputCategories[i].getAttribute('data-text') + ',';
                    }
                } // xiaomi,dell,

                // Xóa ký tự "," cuối cùng sau khi nối chuỗi ở trên
                if(str_slug && str_slug.slice(-1) === ',') {
                    var indexPath = str_slug.lastIndexOf(',');
                    str_slug = str_slug.substring(0, indexPath);
                }

                urlParams.set('thuong-hieu', str_slug);
            }

            // chuyển hướng trang
            window.location.href = pathname + "?" + decodeURIComponent(urlParams.toString());
        });

        $(document).on('click', '.filter-price', function () {
            var price = $(this).val(); // 20000000 - 40000000

            if (price === 'tat-ca') {
                urlParams.delete('gia'); // xóa param trên url
            } else {
                urlParams.set('gia', price); // &gia=20000000-40000000
            }

            // chuyển hướng trang
            window.location.href = pathname + "?"+decodeURIComponent(urlParams.toString());
        });

        $(document).on('change', '.filter_sort', function () {
            var sort = $(this).val();

            if (sort === 'tat-ca') {
                urlParams.delete('sap-sep');
            } else {
                urlParams.set('sap-sep', sort);
            }

            // chuyển hướng trang
            window.location.href = pathname + "?"+decodeURIComponent(urlParams.toString());
        });

        $( document ).ready(function() {

            // SET Checked cho thuong hieu
            var arr_filter_brands = {{ $arr_filter_brands }};

            if (arr_filter_brands && arr_filter_brands.length) {
                var inputCategories = $('.filter_category');

                for(var i=0; inputCategories[i]; ++i) {
                    // remove checked
                    inputCategories[i].removeAttribute('checked');

                    var valueInput = inputCategories[i].getAttribute('value');
                    valueInput = parseInt(valueInput);
                    if(arr_filter_brands.indexOf(valueInput) >= 0) {
                        inputCategories[i].setAttribute('checked', 'checked');
                    }
                }
            }

        });

    </script>
@endsection

