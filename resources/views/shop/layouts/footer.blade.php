<footer class="footer-wrap">
    <div class="container">
        <div class="f-menu-list">
            <div style="margin-right: -388px;" class="row">
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Thông tin chung</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="/">Trang Chủ</a></li>
                        <li><a href="{{ route('shop.listArticles') }}">Tin tức</a></li>
                        <li><a href="{{ route('shop.contact') }}">Liên Hệ</a></li>
                        <li><a href="{{ route('shop.intro') }}">Giới thiệu</a></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Thông tin khác </span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{ route('shop.policy') }}">Chính sách bảo mật</a></li>
                        <li><a href="{{ route('shop.warranty') }}">Chính sách bảo hành</a></li>
                        <li><a href="{{ route('shop.backup') }}">Quy định sao lưu dữ liệu</a></li>
                        <li><a href="{{ route('shop.question') }}">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Kết nối với chúng tôi</span>
                    </h3>
                    <ul class="nav nav-pills nav-stacked">
                        <li><i class="fa fa-facebook-square" style="font-size: 20px;"><a href="https://www.facebook.com/MobileShop12082021/">Facebook</a></i></li>
                        <li><i class="fa fa-twitter-square" style="font-size: 20px;"><a href="https://twitter.com/Duc97228440">Twitter</a></i></li>
                        <li><i class="fa fa-github-square" style="font-size: 20px;"><a href="https://github.com/ducchi1998">Github</a></i></li>
                        <li><i class="fa fa-instagram" style="font-size: 20px;"><a href="https://www.instagram.com/hackerVN1st/">Instagram</a></i></li>
                        <li><i class="fa fa-youtube-square" style="font-size: 20px;"><a href="https://www.youtube.com/channel/UC-BHUfCvpXBZaYDiAPz9gGQ">Youtube</a></i></li>
                    </ul>
                </div>
                <div class="f-menu">
                    <h3 class="linebottom">
                        <span>Thông tin liên hệ</span>
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
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">

                <div class="footer-copyright">
                    <p>
                        © 2021. Công ty CP Đức Sport. GPDKKD: 0303217354 do sở KH ĐT TP.HN cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.<br>
                    </p>
                    <h2 class="text-center">Designed By: Tran Anh Đức</h2>
                </div>
            </div>
        </div>
    </div>
    {{-- <a class="btn-top" href="javascript:void(0);" title="Top" style="display: none; border: 1px solid #373d54"></a>--}}
    <a class="scrollUp" href="javascript:void(0)" title="Top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-double-up"></i></a>
</footer>