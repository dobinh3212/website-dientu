<footer class="footer-wrap">
    <div>
        <div class="container f-menu-list">
            <div class="row">
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Trang của cửa hàng</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="/">Trang Chủ</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Liên Hệ</a></li>
                        <li><a href="">Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Danh mục cửa hàng</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="">Điện thoại</a></li>
                        <li><a href="">Table</a></li>
                        <li><a href="">Laptop</a></li>
                        <li><a href="">Phụ Kiện</a></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Thông tin cửa hàng</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><i class="fa fa-phone"><a href="tel:{{$settings->phone}}">{{ $settings->phone }}</a></i></li>
                        <li><i class="fa fa-envelope"><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></i></li>
                        <li><i class="fa fa-map-marker"><a href="https://www.google.com/maps/place/VI%E1%BB%86N+C%C3%94NG+NGH%E1%BB%86+V%C3%80+%C4%90%C3%80O+T%E1%BA%A0O+DEVMASTER/@21.0134782,105.8091871,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab7aba3cad95:0x7abbb4b806e8073d!8m2!3d21.0134782!4d105.8113758?hl=vi-VN">{{ $settings->address }}</a></i></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Kết nối với chúng tôi</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><i class="fa fa-facebook-square"><a href="">Facebook</a></i></li>
                        <li><i class="fa fa-twitter-square"><a href="blog.html">Twitter</a></i></li>
                        <li><i class="fa fa-google-plus-square"><a href="">Google</a></i></li>
                        <li><i class="fa fa-instagram"><a href="">Instagram</a></i></li>
                    </ul>
                </div>
                <div class="companyinfo">
                    <a href="index.html">
                        <img src="/frontend/img/logo-c.png" alt="AllStore - MultiConcept eCommerce Responsive HTML5 Template">
                        {{ $settings->summary }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">

                <div class="footer-copyright">
                    <i><a href="https://themeforest.net/user/real-web?ref=real-web"></a></i> © Copyright 2021 Shop Mobile - được thiết kế bởi Trương Chí Đức
                </div>
            </div>
        </div>
    </div>

</footer>

