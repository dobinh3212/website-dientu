@extends('shop.layouts.main')

@section('content')
    <style>
        #cart-summary tbody td.cart-product img { border: 0px }
        .returne-continue-shop .procedtocheckout {
            border-radius: 4px;
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
        a.continueshoping{
            color: #373d54;
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
                    <span>Giỏ Hàng</span>
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
                                                <h3 style="padding: 30px 30px 0 30px; text-align: center">Sản phẩm trong giỏ</h3>
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td width="58px">Ảnh</td>
                                                        <td width="145px">Tên Sản Phẩm</td>
                                                        <td width="60px">Số lượng</td>
                                                        <td width="85px">Thành Tiền</td>
                                                    </tr>
                                                    </thead>
                                                    @foreach($listProducts as $item)
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset($item->options->image) }}" alt="" width="55px"></td>
                                                            <td>{{ $item->name }}</td>
                                                            <td style="text-align: center">{{ $item->qty }}</td>
                                                            <td>{{ number_format($item->price, 0,",",".") }} đ</td>
                                                        </tr>
                                                        </tbody>
                                                    @endforeach
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="2" style="color: red">Hãy kiểm tra kỹ sản phẩm trong giỏ hàng của bạn trước khi chuyển sang mục điền thông tin !</td>
                                                        <td>Tổng Tiền:</td>
                                                        <td>{{$totalPrice}} đ</td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 customer-cart">
                                                <h3 class="text-center">Thông tin khách hàng</h3>
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
                                                        <textarea style="height: 90px" class="contact-text" name="note"></textarea>
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
                                <a href="{{ route('shop.cart') }}" class="continueshoping"><i class="fa fa-chevron-left"></i>Quay lại Giỏ Hàng</a>
                                <button type="submit" class="procedtocheckout pull-right">Gửi đơn hàng</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </section>
    </main>
@endsection
