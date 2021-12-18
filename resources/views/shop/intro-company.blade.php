@extends('shop.layouts.main')

@section('content')
    <style>
        .team-wrap {
            margin-bottom: 0;
        }
        .team-list .team-i {
            margin-bottom: 25px;
        }

        .facts-list .facts-i:after {
            display: none;
        }

        .facts-wrap {
            margin: 0;
        }

        .facts-i .icon{
            padding: 10px;
            font-size: 36px;
            color: #373d54;
        }
        .facts-list .facts-i {
            margin-bottom: 30px;
            padding-bottom: 0;
        }

        .team-area {
            padding-bottom: 50px;
        }

        .team-member {
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            -o-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .team-member .team-thumb img {
            width: 100%;
        }
        .team-member .team-content {
            padding: 15px;
            border: 1px solid #eeeeee;
        }
        .team-member .team-content h3 {
            color: #292825;
            font-size: 20px;
            line-height: 28px;
            text-transform: capitalize;
        }
        .team-member .team-content p {
            color: #666666;
            line-height: 20px;
        }
        .team-member .team-content a {
            color: #666666;
            line-height: 20px;
        }
        .team-member .team-content a:hover {
            color: #3a89cf;
        }
        .team-member .team-content .team-social {
            margin-top: 15px;
        }
        .team-member .team-content .team-social a {
            color: #292825;
            width: 34px;
            height: 34px;
            display: inline-block;
            text-align: center;
            line-height: 34px;
            border: 1px solid #292825;
            border-radius: 50%;
            margin-right: 5px;
        }
        .team-member .team-content .team-social a:hover {
            color: #ffffff;
            background-color: #3a89cf;
            border-color: #fed700;
        }
        .team-member:hover {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .stylization a {
            border-bottom: none;
        }

        @media only screen and (max-width: 600px) {
            .team-member {
                margin-bottom: 30px;
            }
        }

        .li-section-title {
            border-bottom: 1px solid #e1e1e1;
            width: 100%;
            display: inline-block;
            position: relative;
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
                    <span>Giới Thiệu</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Giới Thiệu về cửa hàng</span></h1>
            <!-- About Start -->
            <div class="content-page rte">
                <div class="show1">
                    <h4>I. Lịch sử hình thành:</h4>
                    <p><strong>{{ $settings->company }}</strong>&nbsp;là hệ thống kinh doanh nhượng quyền bán lẻ Smartphone, Phụ kiện chính hãng và sửa chữa dịch vụ, là đối tác của các hãng điện thoại chính hãng lớn tại Việt Nam như: Apple, Samsung, Oppo, Realme,&nbsp;Xiaomi,…</p>
                    <p>Hệ thống bán lẻ {{ $settings->company }} hiện có trụ sở chính tại địa chỉ:&nbsp;<strong>{{ $settings->address }}</strong>&nbsp;và chi nhánh tại&nbsp;<strong>{{ $settings->address2 }}</strong></p>
                    <p><strong>Thành lập từ năm 2012</strong>, trải qua gần <strong>11 năm phát triển</strong>, {{ $settings->company }} đã trở thành điểm đến quen thuộc của khách hàng yêu công nghệ trên toàn quốc với các sản phẩm điện thoại, máy tính bảng, Smartphone chính hãng uy tín chất lượng. Thời điểm hiện tại hệ thống đã có&nbsp;<strong>20 cửa hàng nhượng quyền</strong>&nbsp;+&nbsp;<strong>4 trung tâm bảo hành</strong>&nbsp;trải dài khắp toàn quốc tạo sự thuận tiện cho khách hàng.</p>
                </div>

                <div class="facts-wrap">
                    <div class="row facts-list">
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            <div class="icon">
                                <i class="fa fa-history" aria-hidden="true"></i>
                            </div>
                            <p data-num="690" class="facts-i-num">690</p>
                            <h3 class="facts-i-ttl">Thời Gian Làm Việc</h3>
                        </div>
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            <div class="icon">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            </div>
                            <p data-num="100" class="facts-i-num">100</p>
                            <h3 class="facts-i-ttl">Project Đã Hoàn Thành</h3>
                        </div>
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <p data-num="250" class="facts-i-num">250</p>
                            <h3 class="facts-i-ttl">Đánh Giá Tốt Từ Khách Hàng</h3>
                        </div>
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            <div class="icon">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </div>
                            <p data-num="50" class="facts-i-num">50</p>
                            <h3 class="facts-i-ttl">Giải Thưởng Đã Nhận</h3>
                        </div>
                    </div>
                </div>

                <h4>II. Đội Ngũ Của Tôi:</h4>
                <div class="team-area">
                    <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                                    <div class="team-thumb">
                                        <img src="/frontend/img/team/1.png" alt="Our Team Member">
                                    </div>
                                    <div class="team-content text-center">
                                        <h3>Jonathan Adam</h3>
                                        <p>IT Expert</p>
                                        <a href="#">info@example.com</a>
                                        <div class="team-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end single team member -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                                    <div class="team-thumb">
                                        <img src="/frontend/img/team/2.png" alt="Our Team Member">
                                    </div>
                                    <div class="team-content text-center">
                                        <h3>Oliver Bastin</h3>
                                        <p>Web Designer</p>
                                        <a href="#">info@example.com</a>
                                        <div class="team-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end single team member -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="team-member mb-30 mb-sm-60">
                                    <div class="team-thumb">
                                        <img src="/frontend/img/team/3.png" alt="Our Team Member">
                                    </div>
                                    <div class="team-content text-center">
                                        <h3>Erik Jonson</h3>
                                        <p>Web Developer</p>
                                        <a href="#">info@example.com</a>
                                        <div class="team-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end single team member -->
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="team-member mb-30 mb-sm-60 mb-xs-60">
                                    <div class="team-thumb">
                                        <img src="/frontend/img/team/4.png" alt="Our Team Member">
                                    </div>
                                    <div class="team-content text-center">
                                        <h3>Maria Mandy</h3>
                                        <p>Marketing officer</p>
                                        <a href="#">info@example.com</a>
                                        <div class="team-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end single team member -->
                        </div>
                </div>

                <h4>III. Tầm nhìn – sứ mệnh:</h4>
                <p><em><strong>&gt;&gt; Sứ mệnh:</strong></em></p>
                <p>Chúng tôi lấy khách hàng làm trung tâm, lấy tổ chức chức chuyên nghiệp làm sức mạnh cạnh tranh, không ngừng nỗ lực cung cấp những sản phẩm, dịch vụ giá trị mới, chất lượng cao với giá hợp lý để đóng góp vào mục tiêu nâng cao chất lượng cuộc sống thông tin.</p>
                <p><em><strong>&gt;&gt; Tầm nhìn:</strong></em></p>
                <p>Trở thành một công ty hàng đầu cung cấp sản phẩm, dịch vụ các thế hệ Di Động Thông Minh trong đó lấy chất lượng phục vụ khách hàng làm sự phát triển bền vững.</p>
                <p id="gtcl"><strong>III. Những Giá Trị Cốt Lõi&nbsp;</strong></p>
                <p>Giá trị cốt lõi của {{ $settings->company }}&nbsp; là các giá trị bền vững làm nên thành công,&nbsp; là tôn chỉ toàn bộ hành động của công ty , được hình thành qua những ngày tháng gian khổ đầu tiên của công ty, được xây dựng từ những kinh nghiệm và học hỏi, tôi luyện qua những thử thách trong suốt quá trình phát triển.</p>

                <p><em><strong>1. Tư duy hệ thống xã hội hóa:&nbsp;</strong></em></p>
                <p>Cửa hàng được tổ chức như một hệ thống với những nhiệm vụ sứ mệnh rõ ràng, được tổ chức toàn vẹn và hiệu quả, không ngừng nâng cấp để thay đổi về tầm ảnh hưởng, hệ thống sẽ được Xã Hội Hóa theo hướng là tài sản chung của toàn bộ cán bộ, nhân viên {{ $settings->company }} và đóng góp để trở thành 1 phần hữu cơ của Xã Hội.</p>
                <p><em><strong>2. Thành công của con người là thành công của tổ chức.&nbsp;</strong></em></p>
                <p>Cửa hàng {{ $settings->company }} xây dựng đội ngũ nhân viên như những người đồng đội trên cùng một chiến thuyền, mỗi cá nhân được đánh thức nhân sinh quan và hướng dẫn cách nhận định, phấn đấu vì mục tiêu sống, thành công của mỗi nhân viên là thành công của tổ chức. Hội tụ càng nhiều thành công này, tổ chức đạt được mục tiêu. Trên cùng một chiến thuyền, giữa biển khơi bao la…đòi hỏi một tập thể phải biết tối ưu ở mọi cấp độ, đoàn kết và tin tưởng vào mục tiêu của tổ chức. Hệ thống đòi hỏi những con người phải biết thành công và dám thành công.</p>
                <p><em><strong>3. Giá trị doanh nghiệp nằm ở khách hàng&nbsp;</strong></em></p>
                <p>Giá trị doanh nghiệp nằm ở khách hàng, kết nối khách hàng thành một xã hội và phục vụ xã hội này với những năng lực, tư duy luôn đổi mới. Mỗi khách hàng là một hạt nhân quan trọng trên bước đường cóp nhặt thành công của cửa hàng. Toàn thể từ lãnh đạo đến nhân viên trước khách hàng luôn phải thể hiện trong vai trò người phục vụ: tận tụy, lắng nghe và đưa ra giải pháp tốt nhất.</p>

            </div>
            <!-- About End-->
        </section>
    </main>
@endsection
