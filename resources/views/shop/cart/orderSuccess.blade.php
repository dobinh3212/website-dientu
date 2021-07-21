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
                <h3 style="text-align: center">Quý khách đã đặt hàng thành công</h3>
                <div class="img-welcome" style="text-align: center">
                    <img src="https://traicaynhapkhausach.vn/upload/images/thankyou.jpg" alt="cam-on-quy-khach" width="500px" height="500px">
                </div>
            </div>
        </section>
    </main>
@endsection
