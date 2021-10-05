@extends('shop.layouts.main')

@section('content')
    <style>
        .form-group label {
            margin: 0 0 10px 0;
            text-align: center;
        }
        h3.contact-page-title {
            font-size: 32px;
            line-height: 32px;
            color: #363f4d;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .single-contact-block {
            padding-bottom: 8px;
            margin-bottom: 17px;
            border-bottom: 1px solid #e1e1e1;
        }
        .contact-page-side-content {
            background-color: #F2F2F2;
            padding: 25px 30px 11px;
        }
        .contact-form label {
            font-size: 15px;
            line-height: 29px;
            font-weight: 400;
            color: #888888;
            margin-bottom: 20px;
        }
        .single-contact-block.last-child {
            border-bottom: none;
        }
        .contact-form input {
            background-color: #ffffff;
            width: 100%;
            height: 50px;
            line-height: 50px;
            outline: none;
            border: 1px solid #e0e0e0;
            padding-left: 20px;
        }
        .map-responsive{
            overflow:hidden;
            padding-bottom:25%;
            position:relative;
            height:400px;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
    <main>
        <section class="container stylization maincont">
            <ul class="b-crumbs">
                <li>
                    <a href="index.html">
                        Trang Chủ
                    </a>
                </li>
                <li>
                    <span>Liên Hệ</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Dịch vụ chăm sóc khách hàng</span></h1>
            <!-- Contacts - start -->
            <div class="contact-all-us">
                <div class="row">
                    <div class="col-lg-6 col-md-12 contact1">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Liên hệ chúng tôi</h3>
                            <p class="contact-page-message mb-25">
                                Bạn gặp vấn đề khó khăn hãy để lại tin nhắn cùng tên,số điện thoại và email. <br>
                                Chúng tôi sẽ sớm liên hệ với bạn để giải quyết vấn đề này.
                            </p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Địa Chỉ:</h4>
                                <p>{{ $settings->address }}</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Số điện thoại:</h4>
                                <p>Mobile: {{ $settings->phone }}</p>
                                <p>Hotline: {{ $settings->hotline }}</p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> Hòm Thư:</h4>
                                <p>{{ $settings->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="padding-top: 25px">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Thông tin liên lạc</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="{{route('shop.postContact')}}" method="post">
                                    @csrf
                                    <div class="form-group primary-form-group">
                                        <label>Họ tên của bạn:</label>
                                        <input type="text" class="form-control input-feild" id="name" name="name" value="" required>
                                    </div>
                                    <div class="form-group primary-form-group">
                                        <label>Email của bạn:</label>
                                        <input type="text" class="form-control input-feild" id="email" name="email" value="" required>
                                    </div>
                                    <div class="form-group primary-form-group">
                                        <label>Số Điện Thoại:</label>
                                        <input type="text" class="form-control input-feild" minlength="10" id="phone" name="phone" value="" required>
                                    </div>
                                    <div class="form-group primary-form-group">
                                        <label>Tin nhắn để lại:</label>
                                        <textarea class="contact-text" name="content" ></textarea>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit" id="sendMessage" class="send-message main-btn" style="margin:auto;display:block">Gửi <i class="fa fa-chevron-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4779034510298!2d105.80913811472435!3d21.013555593673466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab438bbafeeb%3A0xb97ca6f7e88ba308!2sDevmaster!5e0!3m2!1svi!2s!4v1633085471471!5m2!1svi!2s" width="600" height="400" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!-- Contacts Info - end -->
        </section>
    </main>
@endsection

