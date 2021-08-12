@extends('shop.layouts.main')

@section('content')
    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="/">
                        Trang Chủ
                    </a>
                </li>
                <li>
                    <span>Giỏ Hàng</span>
                </li>
            </ul>
            <!-- Cart Items - start -->

            @if(count($listProducts))
                <h1 class="main-ttl"><span>Danh Sách Sản Phẩm Trong Giỏ Hàng</span></h1>
                <div class="cart-items-wrap">
                    <table class="cart-items table-bordered table-hover">
                        <thead style="background: #373d54;color: white;">
                        <tr>
                            <td class="cart-image" style="text-align: center; width: 200px">Ảnh Sản Phẩm</td>
                            <td class="cart-ttl" style="text-align: center">Tên Sản Phẩm</td>
                            <td class="cart-price" style="text-align: center;width: 200px">Giá Tiền</td>
                            <td class="cart-quantity" style="width: 100px">Số Lượng</td>
                            <td class="cart-summ" style="text-align: center">Thành Tiền</td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listProducts as $product)
                        <tr>
                            <td class="cart-image">
                                <a href="product.html">
                                    <img src="{{ asset($product->options->image) }}" alt="Similique delectus totam">
                                </a>
                            </td>
                            <td class="cart-ttl" style="text-align: center">
                                <a href="product.html">{{ $product->name }}</a>
                            </td>
                            <td class="cart-price" style="text-align: center">
                                <b>{{ number_format($product->price, 0,",",".") }} đ</b>
                            </td>
                            <td class="cart-quantity">
                                <div class="cart-qnt">
                                    <input class="cart-plus-minus" type="text" name="qtybutton" value="{{ $product->qty }}">
                                </div>
                                <button data-id="{{ $product->rowId }}" type="button" class="cart-update-btn btnUpdateQty">Cập nhật</button>
                            </td>
                            <td class="cart-summ" style="text-align: center">
                                <b>{{ number_format( $product->qty * $product->price, 0,",",".") }} đ</b>
                            </td>
                            <td class="cart-del">
                                <a href="{{ route('shop.removeProductToCart',['rowId'=> $product->rowId ]) }}"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <ul class="cart-total">
                    <li class="cart-summ" style="padding: 0 65px">Tổng Tiền: <b style="padding: 0 0px 0 25px; color: red">{{ $totalPrice }} đ</b></li>
                </ul>
                <div class="cart-submit">
                    <a href="{{ route('shop.cancelCart') }}" class="cart-submit-btn">Huỷ Đơn Hàng</a>
                    <a href="{{ route('shop.order') }}" class="cart-submit-btn">Tiến Hành Đặt Hàng</a>
                    <a href="/" class="cart-clear pull-left"> Tiếp Tục mua hàng</a>
                </div>
            @else
                <div style="text-align: center">
                    <img src="https://sovaco.vn/image/empty_cart.jpg" alt="giỏ hàng trống" width="300px" height="300px">
                </div>
                <h3 class="text-center">Không có sản phẩm trong giỏ hàng!</h3>
            @endif
            <!-- Cart Items - end -->

        </section>
    </main>
@endsection

@section('main_js')
    <script>
        $(document).ready(function(){
            $(".cart-qnt").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
            $(".qtybutton").on("click", function() {
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
                if ($button.text() == "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find("input").val(newVal);
            });

        });
    </script>
@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {

            // đính kèm token vào mỗi request ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // suAbidEneUPjfI5mHvWdFbSQ1PsM4OYSm73vF7kZ
                }
            });

            $('.btnUpdateQty').click(function () {

                var qty = $(this).closest('.cart-quantity').find('.cart-plus-minus').val();
                var rowId = $(this).attr('data-id'); // attr : lấy giá trị của thuộc tính của thẻ HTML

                window.location.href = '/cap-nhat-so-luong/'+rowId+'/'+qty;
            });
        });
    </script>
@endsection
