<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->company }}</title>
    <link rel="icon" href="/frontend/img/logoMS1.png" sizes="16x16" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/frontend/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="/frontend/css/jquery.bxslider.css">
    <link rel="stylesheet" href="/frontend/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/frontend/css/flexslider.css">
    <link rel="stylesheet" href="/frontend/css/swiper.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/media.css">
    <style>
        .fr-pop-tab-cont {height: 430px !important;}

        .header-middle {
            padding: 0;
        }

        .header_top {
            background: #373d54;
        }

        /*bố cục giữa*/

        .maincont {
            margin-bottom: 30px;
            padding-bottom: 30px;
        }

        .fr-slider .flex-control-paging li a{
            height: 7px;
        }

        .topmenu .mainmenu {
            padding: 0 10px 0 10px;
        }

        /*sửa phần tin tức*/
        .post-wrap {
            padding-bottom: 0;
        }

        .post-share-wrap {
            margin-bottom: 50px;
        }

        .post-artic img {
            width: 879px !important;
            height: auto !important;
        }

        .post-wrap p {
            margin-bottom: 10px;
        }
        /*sửa phần tin tức end*/

        .f-menu-list {
            margin-bottom: 15px;
        }

        .customer-cart{
            border: 2px solid #373d54;
            border-radius: 15px;
            padding: 30px;

        }
        /*Thay đổi viền danh sách sản phẩm*/

        .section-top {
            border: 1px solid  rgb(224, 228, 246);;
        }

        .section-cont .section-sortby {
            margin: 10px 10px 10px 9px;
        }

        .filter_sort {
            padding: 5px 0 5px 0;
            color: #373d54;
        }

        /*Bỏ phần thừa sb*/
        .section-sb .section-filter .section-filter-cont {
            padding-top: 0;
        }

        /*Thay đổi nút giỏ hàng*/

        .h-cart:hover {
            opacity: 90%;
        }


        /*Thay đổi nút chi tiết sản phẩm*/
        .prod-items .prod-i-detail {
            padding: 8px 3px;
            display: block;
            margin-bottom: 15px;
            width: 100%;
            background: rgba(255,255,255,0.9);
            transition: all 0.3s;
            color: #373d54;
        }

        .prod-items .prod-i .prod-i-detail:hover {
            background: #373d54;
            color: #fff;
        }

        /*Thông tin trang web*/
        .contactinfo li .fa {
            color: #fff;
        }

        .contactinfo li {
            color: #fff;
        }

        .social-icons li a i {
            color: #fff;
        }

        .footer-bottom {
            background: #373d54;
        }
        .footer-copyright{
            margin: 20px 0 20px 0;
            color: #fff;
        }
        .footer-copyright p {
            color: #fff;
        }

        /*Thanh phân trang*/
        .pagi {
            margin: 0;
        }

        /*sticker*/
        .prod-sticker .prod-sticker-1 {
            background: #373d54;
        }

        .prod-cont .prod-priced {
            top: 0;
            right: 0;
            font-size: 14px;
            display: block;
            margin: 5px 0 15px 0;
            text-align: left;
        }

        .prod-cont .prod-priced b{
            font-weight: 500;
            font-size: 20px;
        }

        .companyinfo{
            margin-top: 0;
            padding-left: 0;
        }

        h3 .banner-i-ttl{
            color: #fff;
        }

        body .component-ttl {
            text-align: center;
        }

        body .component-ttl span:after {
            width: 100%;
        }

        .f-menu i a{
            margin: 0 5px;
        }
        .linebottom span {
            position: relative;
            display: inline-block;
            padding: 0 0 8px;
        }

        .linebottom span:after{
            display: block;
            position: absolute;
            content: "";
            bottom: 0;
            height: 2px;
            left: 0;
            width: 60px;
            background: #373d54;
        }

        .dec {
            float: left;
            font-size: 28px;
            line-height: 19px;
            position: relative;
        }


        .dec:before {
            position: absolute;
            content: "-";
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            font-family: arial;
        }

        .inc {
            float: right;
            position: relative;
        }

        .inc:before {
            position: absolute;
            content: "+";
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            font-family: arial;
        }

        .cart-items-wrap .cart-items .cart-qnt input[type=text] {
            width: 100%;
        }

        .qtybutton {
            background: #fbfbfb;
            border: 1px solid #ccc;
            color: #c0c0c0;
            cursor: pointer;
            display: block;
            font-size: 24px;
            height: 26px;
            line-height: 24px;
            margin-top: 3px;
            padding: 0;
            vertical-align: middle;
            width: 26px;
            text-align: center;
        }
        .qtybutton:hover{
            color: #0a0a0a;
        }

        .holas2 a {
            border: none;
            color: #333;
        }

        .holas2 a:hover {
            text-decoration: none;
            border: none;
            color: royalblue;
        }

        button.cart-update-btn {
            font-size: 12px;
            padding: 5px 6px 5px 5px;
            margin: 20px 0 0 0;
            background: #FFF;
            color: #373d54;
            text-transform: none;
            border: 1px solid #373d54;
            border-radius: 10px;
        }

        button.cart-update-btn:hover {
            background: #373d54;
            color: #fff;
            text-decoration: none;
            opacity: 99%;
        }

        .prod-items .prod-i h3 {

        }

        .topsearch .topsearch-form input[type=text] {
            border-radius: 50px;
        }

        .topsearch .topsearch-form button[type=submit] {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }
    </style>
</head>
<body>
<!-- Header - start -->
@include('shop.layouts.header')
<!-- Header - end -->


<!-- Main Content - start -->
@yield('content')
<!-- Main Content - end -->


<!-- Footer - start -->
@include('shop.layouts.footer')
<!-- Footer - end -->


<!-- jQuery plugins/scripts - start -->
<script src="/frontend/js/jquery-2.1.1.min.js"></script>
<script src="/frontend/js/jquery.bxslider.min.js"></script>
<script src="/frontend/js/fancybox/fancybox.js"></script>
<script src="/frontend/js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script src="/frontend/js/jquery.flexslider-min.js"></script>
<script src="/frontend/js/swiper.jquery.min.js"></script>
<script src="/frontend/js/jquery.waypoints.min.js"></script>
<script src="/frontend/js/progressbar.min.js"></script>
<script src="/frontend/js/ion.rangeSlider.min.js"></script>
<script src="/frontend/js/chosen.jquery.min.js"></script>
<script src="/frontend/js/jQuery.Brazzers-Carousel.js"></script>
<script src="/frontend/js/plugins.js"></script>
<script src="/frontend/js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
<script src="/frontend/js/gmap.js"></script>
<!-- jQuery plugins/scripts - end -->

@yield('main_js')
@yield('sub_js')
@yield('my_js')
@yield('my_javascript')
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "100728365658445");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>

