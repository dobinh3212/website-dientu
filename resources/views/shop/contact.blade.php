@extends('shop.layouts.main')

@section('content')
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
            <br>
            <div class="iconbox-wrap">
                <div class="row iconbox-list">
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="http://placehold.it/43x90" alt=""><!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">{{ $settings->phone }}</h3>
                        Nếu bạn cần hãy gọi cho tôi
                        <span class="iconbox-i-margin"></span>
                    </div>
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="http://placehold.it/47x90" alt=""><!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">Địa chỉ của chúng tôi</h3>
                        {{ $settings->address }}
                        <span class="iconbox-i-margin"></span>
                    </div>
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="http://placehold.it/58x90" alt=""><!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">Schedule</h3>
                        Mon-Fri 07:00-22:00<br>
                        Sat-Sun closed
                        <span class="iconbox-i-margin"></span>
                    </div>
                </div>
            </div>

            <!-- Contacts Info - end -->
            <div class="social-wrap">
                <div class="social-list">
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://facebook.com/">
                            <p class="social-i-img">
                                <i class="fa fa-facebook"></i>
                            </p>
                            <p class="social-i-ttl">Facebook</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://google.com/">
                            <p class="social-i-img">
                                <i class="fa fa-google-plus"></i>
                            </p>
                            <p class="social-i-ttl">Google +</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://twitter.com/">
                            <p class="social-i-img">
                                <i class="fa fa-twitter"></i>
                            </p>
                            <p class="social-i-ttl">Twitter</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://vk.com/">
                            <p class="social-i-img">
                                <i class="fa fa-vk"></i>
                            </p>
                            <p class="social-i-ttl">Vkontakte</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://instagram.com/">
                            <p class="social-i-img">
                                <i class="fa fa-instagram"></i>
                            </p>
                            <p class="social-i-ttl">Instagram</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://youtube.com/">
                            <p class="social-i-img">
                                <i class="fa fa-youtube"></i>
                            </p>
                            <p class="social-i-ttl">Youtube</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CONTACT-US-FORM START -->
            <div class="contact-us-form">
                <div class="contact-form-center">
                    <!-- CONTACT-FORM START -->
                    <form class="contact-form" id="contactForm" method="post" action="{{route('shop.postContact')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="form-group primary-form-group">
                                    <label>Họ Tên</label>
                                    <input type="text" class="form-control input-feild" id="name" name="name" value="">
                                </div>
                                <div class="form-group primary-form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control input-feild" id="email" name="email" value="">
                                </div>
                                <div class="form-group primary-form-group">
                                    <label>Điện Thoại</label>
                                    <input type="text" class="form-control input-feild" id="phone" name="phone" value="">
                                </div>
                                <br>
                                <button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Gửi <i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                <div class="type-of-text">
                                    <div class="form-group primary-form-group">
                                        <label>Message</label>
                                        <textarea class="contact-text" name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- CONTACT-FORM END -->
                </div>
            </div>
            <!-- CONTACT-US-FORM END -->

        </section>
    </main>
@endsection

