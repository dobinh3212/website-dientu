@extends('shop.layouts.main')

@section('content')
    <style>
        .panel-group .panel{
            background-color: #fff;
            border:none;
            box-shadow:none;
            border-radius: 10px;
            margin-bottom:11px;
        }
        .panel .panel-heading{
            padding: 0;
            border: none;
        }

        .panel-default>.panel-heading {
            background-color: #fff;
        }

        .panel-heading a{
            display: block;
            border:none;
            padding:15px 35px 15px;
            font-size: 14px;
            background-color: #373d54;
            font-weight:400;
            position: relative;
            color:#FFF;
            box-shadow:none;
            transition:all 0.1s ease 0s;
            border-radius: 25px;
        }
        .panel-heading a:after, .panel-heading a.collapsed:after{
            content: "\f068";
            font-family: fontawesome;
            text-align: center;
            position: absolute;
            right: 6px;
            top: 5px;
            color:#fff;
            background-color:#373d54;
            border: 5px solid #fff;
            font-size: 14px;
            width: 40px;
            height:40px;
            line-height: 30px;
            border-radius: 50%;
            transition:all 0.3s ease 0s;

        }
        .panel-heading:hover a:after,
        .panel-heading:hover a.collapsed:after{
            transform:rotate(360deg);
        }
        .panel-heading a.collapsed:after{
            content: "\f067";
        }

        #accordion .panel-body{
            background-color:#Fff;
            color:rgb(0, 0, 0);
            line-height: 25px;
            padding: 15px 25px 5px 35px ;
            border-top:none;
            font-size:14px;
            position: relative;
        }

        .updateAsked {
            padding: 5px 35px;
        }

        @media only screen and (max-width:720px) {
            .panel-heading a:after, .panel-heading a.collapsed:after {
                /*top: 14px;*/
                /*width: 35px;*/
                /*height: 35px;*/
                /*line-height: 25px;*/
                opacity: 0;
            }

            .panel-heading a {
                border-radius: 45px;
            }
        }
    </style>
    <main>
        <section class="container">
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

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Câu hỏi 1: Tại sao mặt hàng của Shop Mobile lại rẻ hơn so với các đại lý khác ?
                                        <span> </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        <strong>Trả Lời: </strong>
                                        Do chúng tôi lấy lợi nhuận thấp và sẽ cập nhật giá liên tục theo giờ với phương châm giá luôn phải tốt nhất trên thị trường.
                                        Chúng tôi luôn mong muốn khách hàng có được những sản phẩm chất lượng tốt nhất với giá rẻ nhất.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu hỏi 2: Thời gian Shop Mobile duyệt đơn hàng và giao hàng sẽ mất bao lâu?
                                        <span> </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>
                                        <strong>Trả lời: </strong>
                                        Các đơn hàng sẽ được duyệt sau 30 phút kể từ lúc khách đặt hàng trong các ngày trong tuần. Trường hợp khách hàng muốn thay đổi hoặc hủy đơn hàng có thể liên hệ qua hotline.
                                        Thời gian giao hàng bao lâu sẽ tùy theo khu vực của khách hàng. Nếu đơn hàng trong tỉnh mất 1-2 ngày , còn đơn hàng ngoài tỉnh sẽ mất 3-5 ngày.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Câu hỏi 3: Nếu trường hợp sản phẩm khách hàng đặt mua gặp vấn đề sẽ giải quyết như thế nào?
                                        <span> </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>
                                        <strong>Trả lời: </strong>
                                        Chúng tôi sau khi nhận được phản hồi của khách hàng về vấn đề hàng hóa bị gặp vấn đề sẽ thông báo với khách hàng thời gian làm việc.
                                        Sau đó khách hàng đem sản phẩm đến và chúng tôi sẽ đổi cho khách hàng sản phẩm mới, còn các lỗi nhỏ trung tâm bảo hành sẽ giải quyết.
                                        Trường hợp khách hàng không thể đem tới do ở nơi xa, khách hàng có thể đăng ký đổi bằng phương thức giao hàng tuy nhiên sẽ phải chịu 5% phí
                                        giao và đổi sản phẩm.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Câu hỏi 4: Trường hợp khách hàng không nhận được email sau khi đặt hàng ?
                                        <span> </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>
                                        <strong>Trả lời: </strong>
                                        Khách hàng hãy liên hệ qua hotline hoặc nhắn tin qua boxchat của Mobile Shop. Chúng tôi sẽ nhận thông tin của quý khách và
                                        gửi lại thông tin đơn hàng của bạn qua email mà bạn đã đăng ký bao gồm thông tin người và sản phẩm của khách hàng sớm nhất có
                                        thể.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="updateAsked">
                <p>Còn cập nhật thêm .......</p>
                <br>
                <p>Chúng tôi xin chân thành cảm ơn tất cả các khách hàng đã, đang và sẽ ủng hộ chúng tôi.</p>
            </div>
            <br>

        </section>
    </main>
@endsection
