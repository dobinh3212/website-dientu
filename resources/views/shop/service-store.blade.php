@extends('shop.layouts.main')

@section('content')
<style>
    .service-wrap {
        margin-top: 25px;
    }

    .content-service {
        padding: 25px 50px 0 50px;
        text-align: justify;
    }

    .content-service p {
        font-size: 14px;
    }

    .content-head1 {
        text-align: center;
    }

    .image-service1 img {
        width: 100%;
        height: 310px;
        border-radius: 10px;
    }
</style>
<main>
    <section class="container stylization">
        <ul class="b-crumbs">
            <li>
                <a href="/">
                    Trang Chủ
                </a>
            </li>
            <li>
                <span>Dịch Vụ</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Một số dịch vụ của cửa hàng</span></h1>
    </section>
</main>
@endsection