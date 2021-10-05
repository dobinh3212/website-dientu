@extends('shop.layouts.main')

@section('content')
    <style>
        .asked-quest h5 {
            margin: 0 0 20px;
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
                    <span>F.A.Q</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Một số câu hỏi thường gặp</span></h1>

            <!-- Fluent Asked Question Begin -->
            <div class="asked-quest">
                <h5>Câu hỏi 1: Tại sao mặt hàng của Shop Mobile lại rẻ hơn so với các đại lý khác ?</h5>
                <p>
                    <strong>Trả Lời: </strong>
                    Do chúng tôi lấy lợi nhuận thấp và sẽ cập nhật giá liên tục theo giờ với phương châm giá luôn phải tốt nhất trên thị trường.
                    Chúng tôi luôn mong muốn khách hàng có được những sản phẩm chất lượng tốt nhất với giá rẻ nhất.
                </p>
                <hr>
                <h5>Câu hỏi 2: Thời gian Shop Mobile duyệt đơn hàng và giao hàng sẽ mất bao lâu? </h5>
                <p>
                    <strong>Trả lời: </strong>
                    Các đơn hàng sẽ được duyệt sau 30 phút kể từ lúc khách đặt hàng trong các ngày trong tuần. Trường hợp khách hàng muốn thay đổi hoặc hủy đơn hàng có thể liên hệ qua hotline.
                    Thời gian giao hàng bao lâu sẽ tùy theo khu vực của khách hàng. Nếu đơn hàng trong tỉnh mất 1-2 ngày , còn đơn hàng ngoài tỉnh sẽ mất 3-5 ngày.
                </p>
                <hr>
                <h5>Câu hỏi 3: Nếu trường hợp sản phẩm khách hàng đặt mua gặp vấn đề sẽ giải quyết như thế nào? </h5>
                <p>
                    <strong>Trả lời: </strong>
                    Chúng tôi sau khi nhận được phản hồi của khách hàng về vấn đề hàng hóa bị gặp vấn đề sẽ thông báo với khách hàng thời gian làm việc.
                    Sau đó khách hàng đem sản phẩm đến và chúng tôi sẽ đổi cho khách hàng sản phẩm mới, còn các lỗi nhỏ trung tâm bảo hành sẽ giải quyết.
                    Trường hợp khách hàng không thể đem tới do ở nơi xa, khách hàng có thể đăng ký đổi bằng phương thức giao hàng tuy nhiên sẽ phải chịu 5% phí
                    giao và đổi sản phẩm.
                </p>
                <hr>
                <p>Update .....</p>
                <p>Chúng tôi xin chân thành cảm ơn tất cả các khách hàng đã, đang và sẽ ủng hộ chúng tôi.</p>
            </div>
            <!-- Fluent Asked Question End -->
        </section>
    </main>
@endsection
