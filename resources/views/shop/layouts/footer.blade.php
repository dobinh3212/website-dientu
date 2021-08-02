<footer class="footer-wrap">
    <div class="container">
        <div class="f-menu-list">
            <div class="row">
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Trang của cửa hàng</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="/">Trang Chủ</a></li>
                        <li><a href="{{ route('shop.listArticles') }}">Tin tức</a></li>
                        <li><a href="{{ route('shop.contact') }}">Liên Hệ</a></li>
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
                        <span>Kết nối với chúng tôi</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><i class="fa fa-facebook-square"><a href="https://www.facebook.com/truongchi.duc/">Facebook</a></i></li>
                        <li><i class="fa fa-twitter-square"><a href="https://twitter.com/Duc97228440">Twitter</a></i></li>
                        <li><i class="fa fa-github-square"><a href="https://github.com/ducchi1998">Github</a></i></li>
                        <li><i class="fa fa-instagram"><a href="https://www.instagram.com/hackerVN1st/">Instagram</a></i></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Thông tin cửa hàng</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <i class="fa fa-envelope">
                                Thư Điện tử:
                            </i>
                            <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker">
                                Địa chỉ:
                            </i>
                            <a href="https://www.google.com/maps/place/VI%E1%BB%86N+C%C3%94NG+NGH%E1%BB%86+V%C3%80+%C4%90%C3%80O+T%E1%BA%A0O+DEVMASTER/@21.0134782,105.8091871,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab7aba3cad95:0x7abbb4b806e8073d!8m2!3d21.0134782!4d105.8113758?hl=vi-VN">{{ $settings->address }}</a>
                        </li>
                    </ul>
                </div>
                <div class="companyinfo pull-right">
                    <a href="/">
                        <img src="/frontend/img/mbs2.png" alt="Mobile Shop khách hàng là thượng đế">
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
                    <i><a href="https://themeforest.net/user/real-web?ref=real-web"></a></i>© 2021.Công ty CP Thần Long.GPDKKD: 0303217354 do sở KH & ĐT HN cấp ngày 28/01/2021.GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2021.
                    <h2 class="text-center">Chịu trách nhiệm nội dung: Trương Chí Đức.</h2>
                </div>
            </div>
        </div>
    </div>

</footer>

