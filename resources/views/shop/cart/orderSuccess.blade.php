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
        <h1 class="main-ttl"><span>Thông báo đến khách hàng</span></h1>

        <div class="row">
            <h2 class="text-center" style="color: royalblue; margin: 0;font-size: 25px;text-transform: uppercase">Đặt hàng thành công</h2>
            <div class="img-welcome" style="text-align: center">
                <img src="https://hieumobile.com/wp-content/uploads/tich-xanh.png" alt="cam-on-quy-khach" width="50px" height="50px">
            </div>
            <h3 style="text-align: center;font-size: 20px">
                Cảm ơn quý khách đã mua hàng trên hệ thống điện tử Duc Sport
                <br>
                Chúng tôi sẽ gửi thông tin đơn hàng qua mail của bạn
                <br>
                <i class="fa fa-phone" aria-hidden="true"> </i> Tư vấn bán hàng:
                <span style="color: red">
                    <a href="tel:{{ $settings->hotline }}">{{ $settings->hotline }}</a>
                </span>
                (8:00 - 22:00)
            </h3>
            <h5 class="order-complete text-center holas2" style="margin: 10px">
                <a href="/"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Về trang chủ</a>
            </h5>
        </div>
    </section>
</main>
@endsection