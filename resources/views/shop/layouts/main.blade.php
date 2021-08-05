<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->company }}</title>
    <link rel="icon" href="/frontend/img/favicon.png" sizes="16x16" type="image/png">

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

        .fr-slider .flex-control-paging li a{
            height: 7px;
        }

        .topmenu .mainmenu {
            padding: 0 10px 0 10px;
        }

        .f-menu-list {
            margin-bottom: 15px;
        }
        .customer-cart{
            border: 2px solid #373d54;
            border-radius: 15px;
            padding: 30px;

        }

        .footer-copyright{
            margin: 10px 0 10px 0;
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

        button.cart-update-btn {
            font-size: 12px;
            padding: 0;
            margin: 5px 0 0 5px;
            background: #fff;
            color: #333;
            text-transform: none;
        }

        button.cart-update-btn:hover {
            background: none;
            text-decoration: underline;
        }

        .prod-items .prod-i h3 {

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
</body>
</html>

