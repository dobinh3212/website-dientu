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

        .image-service1 img{
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

            <div class="row service-wrap">
                <div class="col-md-6">
                    <div class="image-service1">
                        <img src="https://list.vn/wp-content/uploads/2020/10/Nh%E1%BB%AFng-m%E1%BA%ABu-qu%E1%BA%A3ng-c%C3%A1o-s%E1%BB%ADa-ch%E1%BB%AFa-%C4%91i%E1%BB%87n-tho%E1%BA%A1i-c%E1%BB%B1c-ch%E1%BA%A5t-m%C3%A0-b%E1%BA%A1n-n%C3%AAn-tham-kh%E1%BA%A3o.jpg" alt="dịch vụ 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-service">
                        <h3 class="content-head1"> ⓵ SỬA CHỮA, VỆ SINH LẤY NGAY</h3>
                        <p>
                            - Chỉ cần nhấc máy lên và đặt lịch bạn sẽ có thể giải quyết mọi vấn đề trên sản phẩm của bạn với chi phí phải chăng.
                        </p>
                        <p>
                            - Thậm chí quý khách có thể xem tận mắt quá trình sửa chữa và vệ sinh để đảm bảo sự uy tín của nhân viên trong mắt khách hàng.
                        </p>
                        <p>
                            - Đặc biệt là bạn có thể nhận lại sản phẩm ngay lập tức sau khi chúng được sửa chữa và thử ngay tại chỗ đảm bảo quý khách sẽ hài lòng.
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row service-wrap">
                <div class="col-md-6">
                    <div class="image-service1">
                        <img src="https://www.semtek.com.vn/wp-content/uploads/2020/05/nhan-vien-tu-van-ban-hang-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-service">
                        <h3 class="content-head1"> ⓶ TƯ VẤN SẢN PHẨM ONLINE </h3>
                        <p>
                            - Khách hàng lo lắng không biết lựa chọn sản phẩm nào là phù hợp với nhu cầu bản thân.
                        </p>
                        <p>
                            - Thay vì phải ra tận cửa hàng để nghe nhân viên tư vấn về sản phẩm vừa phải đi lại vừa mất thời gian lại không vừa ý.
                        </p>
                        <p>
                            - Dịch vụ này mở ra với đội ngũ tư vấn chuyên nghiệp giúp bạn lựa chọn sản phẩm tốt nhất, chi phí phải chăng nhất, thuận tiện nhất.
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row service-wrap">
                <div class="col-md-6">
                    <div class="image-service1">
                        <img src="https://cdn.tgdd.vn/Files/2016/03/02/795660/tgdd-chinhsach1doi1-800-300.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-service">
                        <h3 class="content-head1"> ⓷ LỖI 1 ĐỔI 1 TRONG 1 THÁNG</h3>
                        <p>
                            - Từ lâu sản phẩm lỗi là 1 nỗi ám ảnh đối với những người mua hàng công nghệ.
                        </p>
                        <p>
                            - Khách hàng thấy không an tâm khi mua hàng vì lỗi lo mua phải một sản phẩm bị lỗi và không biết phải làm thế nào.
                        </p>
                        <p>
                            - Đừng lo chúng tôi cung cấp dịch vụ 1 đổi 1 giúp giải tỏa lo nghĩ của bạn, bạn sẽ được đổi 1 sản phẩm tương tự cho bất kỳ lỗi nào do NSX.
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                Đang cập nhật thêm ......
            </p>
        </section>
    </main>
@endsection
