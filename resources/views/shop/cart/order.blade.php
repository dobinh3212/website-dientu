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
            <h1 class="main-ttl"><span>Thông tin Khách hàng</span></h1>

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
                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
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
                                                    <label>Số ĐT</label>
                                                    <input type="text" class="form-control input-feild" id="contactEmail" name="phone" value="">
                                                    @if ($errors->has('phone'))
                                                        <span class="invalid-feedback" role="alert" style="color:red;">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
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
                                                        <textarea style="height: 104px" class="contact-text" name="note"></textarea>
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
                                <a href="" class="continueshoping"><i class="fa fa-chevron-left"></i>Hủy đặt hàng</a>
                                <button type="submit" class="procedtocheckout pull-right">Gửi đơn hàng</button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </section>
    </main>
@endsection
