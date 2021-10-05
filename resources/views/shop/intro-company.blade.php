@extends('shop.layouts.main')

@section('content')
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

                <h4>I. Lịch sử hình thành&nbsp;</h4>
                <p><strong>{{ $settings->company }}</strong>&nbsp;là hệ thống kinh doanh nhượng quyền bán lẻ Smartphone, Phụ kiện chính hãng và sửa chữa dịch vụ, là đối tác của các hãng điện thoại chính hãng lớn tại Việt Nam như: Apple, Samsung, Oppo, Realme,&nbsp;Xiaomi,…</p>
                <p>Hệ thống bán lẻ {{ $settings->company }} hiện có trụ sở chính tại địa chỉ:&nbsp;<strong>{{ $settings->address }}</strong>&nbsp;và chi nhánh tại&nbsp;<strong>{{ $settings->address2 }}</strong></p>
                <p><strong>Thành lập từ năm 2012</strong>, trải qua gần <strong>11 năm phát triển</strong>, {{ $settings->company }} đã trở thành điểm đến quen thuộc của khách hàng yêu công nghệ trên toàn quốc với các sản phẩm điện thoại, máy tính bảng, Smartphone chính hãng uy tín chất lượng. Thời điểm hiện tại hệ thống đã có&nbsp;<strong>20 cửa hàng nhượng quyền</strong>&nbsp;+&nbsp;<strong>4 trung tâm bảo hành</strong>&nbsp;trải dài khắp toàn quốc tạo sự thuận tiện cho khách hàng.</p>
                <div class="facts-wrap">
                    <div class="row facts-list">
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            Lên tới<p data-num="5000" class="facts-i-num">5000</p>
                            <h3 class="facts-i-ttl">Nhân Viên</h3>
                        </div>
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            Bao gồm<p data-num="24" class="facts-i-num">24</p>
                            <h3 class="facts-i-ttl">Chuỗi cửa hàng và TTBH</h3>
                        </div>
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            Có tới<p data-num="200" class="facts-i-num">200</p>
                            <h3 class="facts-i-ttl">Mặt hàng các loại</h3>
                        </div>
                        <div class="cf-xs-6 cf-sm-4 cf-md-4 cf-lg-3 col-xs-6 col-sm-4 col-lg-3 facts-i">
                            Được hơn<p data-num="1000" class="facts-i-num">1000</p>
                            <h3 class="facts-i-ttl">Khách hàng tin dùng</h3>
                        </div>
                    </div>
                </div>
                <p><em><strong>Quyền lợi khi được tham gia nhượng quyền:</strong></em></p>
                <ul>
                    <li>Ít rủi ro bởi các sản phẩm, dịch vụ của {{ $settings->company }} đều đã khẳng định được chất lượng, uy tín</li>
                    <li>Được chuyển giao và đảm bảo các vấn đề xây dựng chiến lược quảng bá, tiếp thị, đào tạo, tận dụng nguồn nhân lực có sẵn 1 cách tối đa. Các quy trình vận hành đều sẽ được {{ $settings->company }} hỗ trợ và chuyển giao. Cửa hàng nhượng quyền chỉ cần tập trung cho việc bán hàng.</li>
                    <li>Được sử dụng thương hiệu uy tín của {{ $settings->company }} trong lĩnh vực bán lẻ điện thoại chính hãng đã được khẳng định qua hơn 7 năm phát triển và được khách hàng tin tưởng.</li>
                </ul>

                <h4>II. Người sáng lập</h4>
                <div class="team-wrap">
                    <div class="row team-list">
                        <div class="col-sm-4 team-i">
                            <p class="team-i-img">
                                <img src="https://vcdn-kinhdoanh.vnecdn.net/2019/10/13/thegioididong-bloom-6249-15288-3074-5157-1570943698.jpg" alt="NDT">
                            </p>
                            <h3 class="team-i-ttl">Nguyễn Đức Tài</h3>
                            <p class="team-i-post">Director</p>
                            "Muốn có được những điều mới mẻ cần phải chấp nhận thất bại. Nếu sợ thất bại sẽ không thể làm được gì, lúc đó chỉ lên núi gõ mõ là an toàn nhất".
                        </div>
                        <div class="col-sm-4 team-i">
                            <p class="team-i-img">
                                <img src="https://media.ex-cdn.com/EXP/media.nhadautu.vn/files/news/2020/09/18/shark-dzung-day-la-thoi-diem-san-sinh-nhung-doanh-nghiep-tro-thanh-diem-sang-hau-covid-19-162009.png" alt="NMD">
                            </p>
                            <h3 class="team-i-ttl">Nguyễn Mạnh Dũng</h3>
                            <p class="team-i-post">Investor</p>
                            "Startup nên có tham vọng lớn nhưng phải thực tế và bắt đầu từ những việc nhỏ nhất ,bình thường nhất".
                        </div>
                        <div class="col-sm-4 team-i">
                            <p class="team-i-img">
                                <img src="http://hellolaptrinh.com/template/hellolaptrinh.com/upload/images/lap-trinh-vien-hoat-dong-ban-dem-1.jpg" alt="TCD">
                            </p>
                            <h3 class="team-i-ttl">Trương Chí Đức</h3>
                            <p class="team-i-post">Developer</p>
                            "Muốn thành công trong công việc ta phải cố gắng hết sức mình, nếu lười biếng ta phải trả giá bằng cái kết tồi tệ nhất".
                        </div>
                    </div>
                </div>

                <h4>III. Tầm nhìn – sứ mệnh</h4>
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
