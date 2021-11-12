@extends('shop.layouts.main')

@section('content')
    <style>
        #cart-summary tbody td.cart-product img { border: 0px }
        .returne-continue-shop .procedtocheckout {
            color: #fff;
            display: block;
            float: right;
            font-size: 20px;
            line-height: 50px;
            padding: 0 16px;
            transition: all 500ms ease 0s;
        }
        .contact-form label {
            display: block;
            margin: 14px 0;
        }
        .stylization a:hover {
            border-color: #fff;
            text-decoration: none;
            opacity: 99%;
        }
        a.continueshoping{
            color: #373d54;
            padding-top: 20px;
        }
        .sum-product {
            font-size: 20px;
            color: #fff;
        }
        .form-group > input[type=text]:hover, .form-group > textarea:hover {
            border-bottom: 3px solid #373d54;
        }
    </style>
    <main>
        <section class="container stylization maincont">
            <ul class="b-crumbs">
                <li>
                    <a href="/">
                        Trang Chủ
                    </a>
                </li>
                <li>
                    <span>Thanh Toán</span>
                </li>
            </ul>

            <div class="row">
            @if(session('cart'))
                <!-- Thông Tin Cá Nhân -->
                    <form method="post" action="{{ route('shop.postOrder') }}">
                        @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- CONTACT-US-FORM START -->
                            <div class="contact-us-form">
                                <div class="contact-form-center">
                                    <!-- CONTACT-FORM START -->
                                    <div class="contact-form" id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <h3 style="padding: 30px 30px 0 30px; text-align: center"><i class="fa fa-shopping-basket"> Giỏ hàng </i></h3>
                                                <table class="table table-hover">
                                                    <thead style="background: #373d54;color: white;">
                                                    <tr>
                                                        <td width="58px" style="text-align: center">Ảnh</td>
                                                        <td width="145px" style="text-align: center">Tên Sản Phẩm</td>
                                                        <td width="60px" style="text-align: center">Số lượng</td>
                                                        <td width="85px" style="text-align: center">Thành Tiền</td>
                                                    </tr>
                                                    </thead>
                                                    @foreach($listProducts as $item)
                                                        <tbody>
                                                        <tr>
                                                            <td style="text-align: center"><img src="{{ asset($item->options->image) }}" alt="ảnh sản phẩm" width="55px"></td>
                                                            <td>{{ $item->name }}</td>
                                                            <td style="text-align: center">{{ $item->qty }}</td>
                                                            <td style="text-align: center">{{ number_format($item->price, 0,",",".") }} đ</td>
                                                        </tr>
                                                        </tbody>
                                                    @endforeach
                                                    <tfoot>
                                                    <tr style="background: #373d54">
                                                        <td class="sum-product" colspan="3" style="text-align: center">Tổng tiền:</td>
                                                        <td style="text-align: center; color: #fff">{{$totalPrice}} đ</td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 customer-cart">
                                                <h3 class="text-center">⊰ Thông tin khách hàng ⊱</h3>
                                                <div class="form-group primary-form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" class="form-control input-feild" id="fullname" name="fullname" value="">
                                                    @if ($errors->has('fullname'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('fullname') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group primary-form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control input-feild" id="contactEmail" name="email" value="">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group primary-form-group">
                                                    <label>Số Điện Thoại</label>
                                                    <input type="text" class="form-control input-feild" id="contactEmail" name="phone" value="">
                                                    @if ($errors->has('phone'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                                <div class="type-of-text">
                                                    <div class="form-group primary-form-group">
                                                        <label>Địa chỉ nhận hàng</label>
                                                        <textarea style="height: auto" class="contact-text" name="address"></textarea>
                                                        @if ($errors->has('address'))
                                                            <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('address') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="type-of-text">
                                                    <div class="form-group primary-form-group">
                                                        <label>Ghi chú</label>
                                                        <textarea style="height: 70px" class="contact-text" name="note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONTACT-FORM END -->
                                </div>
                            </div>
                            <!-- CONTACT-US-FORM END -->
                        </div>

                        <div style="margin-top: 20px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- RETURNE-CONTINUE-SHOP START -->
                            <div class="returne-continue-shop">
                                <a href="{{ route('shop.cart') }}" class="continueshoping"><i class="fa fa-chevron-left"></i> Quay lại Giỏ Hàng</a>
                                <button type="submit" class="procedtocheckout pull-right">Gửi Thông Tin <i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </section>
    </main>
@endsection
