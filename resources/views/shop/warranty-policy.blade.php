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
                    <span>Chính sách bảo hành</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Chính sách bảo hành</span></h1>
            <!-- Warranty start-->
            <div class="tab-pane">
                <p><span id="docs-internal-guid-50932c38-7fff-3af3-c968-ffd847f1ca94" style="font-size: medium;"><strong><strong>I.<span> </span>Đổi mới 30 ngày miễn phí</strong></strong></span></p>
                <p><span style="font-size: small;">Khi mua sản phẩm tại  Mobile Shop, khách hàng có quyền hoàn toàn yên tâm với sản phẩm chính hãng, được bảo hành chính thức tại hãng và ngoài ra có thêm chính sách đổi mới miễn phí lên tới 30 ngày tại  Mobile Shop</span></p>
                <table class="table table-bordered">
                    <thead>
                    <tr class="success"><th style="text-align: center;"><span style="font-size: small;"><strong>Loại sản phẩm</strong></span></th><th style="text-align: center;"><span style="font-size: small;"><strong>Đổi mới miễn phí (*)</strong></span></th><th style="text-align: center;"><span style="font-size: small;"><strong>Quy định nhập lại, trả lại</strong></span></th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Điện thoại/ Máy tính bảng/ Macbook/ Apple watch</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                        <td style="text-align: left;"><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 30 ngày nhập lại máy theo giá thoả thuận</span></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Samsung Watch</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                        <td style="text-align: left;"><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 30% trên giá hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 30 ngày nhập lại máy theo giá thoả thuận</span></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Laptop</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">30 ngày</span></td>
                        <td style="text-align: left;"><span style="font-size: small;">- Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Không áp dụng nhập lại sau 30 ngày</span></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Phụ kiện &lt; 1 triệu</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">1 năm(Sản phẩm mua mới)</span><br><span style="font-size: small;">1 tháng(Sản phẩm mua cũ)</span></td>
                        <td style="text-align: left;"><span style="font-size: small;">Không áp dụng nhập lại</span></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Phụ kiện &gt; 1 triệu</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">15 ngày</span></td>
                        <td style="text-align: left;">
                            <p><span style="font-size: small;">Không áp dụng nhập lại.</span><br><span style="font-size: small;">Riêng Airpod:</span><br><span style="font-size: small;">- Trong 15 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại (hoặc giá mua nếu giá mua thấp hơn giá hiện tại)</span><br><span style="font-size: small;">- Sau 15 ngày nhập lại máy theo giá thoả thuận</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Nhà thông minh</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">15 ngày</span></td>
                        <td style="text-align: left;"><span style="font-size: small;">Không áp dụng nhập lại</span></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;"><span style="font-size: small;">Bảo hành mở rộng</span></td>
                        <td style="text-align: center;"><span style="font-size: small;">15 ngày</span></td>
                        <td style="text-align: left;"><span style="font-size: small;">Trong 7 ngày đầu, máy không lỗi, khách hàng trả lại gói BHMR</span><br><span style="font-size: small;">&gt; Nhập lại trừ phí 50% gói BHMR</span></td>
                    </tr>
                    </tbody>
                </table>
                <p><span style="font-size: small;">(*): Lỗi phần cứng từ phía nhà sản xuất</span></p>
                <p class="mb-2"><span style="text-decoration: underline;"><em><strong><span style="font-size: small;">Điều kiện đổi trả:</span></strong></em></span></p>
                <ul style="list-style: none;">
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Máy: Như mới, không xước xát, không dán decal, hình trang trí</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Máy cũ: có tình trạng sản phẩm như lúc mới mua</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Hộp: Như mới, không móp méo, rách, vỡ, bị viết, vẽ, quấn băng dính, keo; có Serial/IMEI trên hộp trùng với thân máy.</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Phụ kiện và quà tặng: Còn đầy đủ, nguyên vẹn, không móp méo xước xát hoặc bị hư hại trong quá trình sử dụng.</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Tài khoản: Máy đã đã được đăng xuất khỏi tất cả các tài khoản như: iCloud, Google Account, Mi Account…</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">(*) Lỗi từ phía Nhà sản xuất là các lỗi bao gồm: Lỗi nguồn, lỗi trên mainboard, ổ cứng, màn hình và các linh kiện phần cứng bên trong</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Ví dụ: Sọc màn hình, tràn màu, loa rè, màn hình có từ 3 điểm chết trở lên hoặc 1 điểm chết có kích thước lớn hơn 1mm</span></span></li>
                </ul>                    <p><span id="docs-internal-guid-50932c38-7fff-3af3-c968-ffd847f1ca94" style="font-size: medium;"><strong><strong>II.Bảo hành tiêu chuẩn</strong></strong></span></p>
                <p><span style="text-decoration: underline;"><strong><span style="font-size: small;">1. Điện Thoại, LapTop:</span></strong></span></p>
                <p><span style="font-size: small;">Các sản phẩm chính hãng, Quý khách có thể tới các TTBH chính hãng hoặc trực tiếp tới các cửa hàng  Mobile Shop để được tiếp nhận gửi máy bảo hành chính hãng.</span></p>
                <p><span style="font-size: small;">Yêu cầu tiếp nhận bảo hành tùy theo quy định của từng hãng, chi tiết có trong bảng sau:</span></p>
                <table class="table table-bordered">
                    <thead>
                    <tr class="success"><th style="text-align: center;"><strong>Sản phẩm</strong></th><th style="text-align: center;"><strong>Thời gian bảo hành</strong></th><th style="text-align: center;"><strong>Quyền lợi bảo hành</strong></th><th style="text-align: center;"><strong>Địa chỉ bảo hành</strong></th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: left;">Máy mới</td>
                        <td style="text-align: left;">12 tháng(hoặc dài hơn theo quy định của hãng)</td>
                        <td style="text-align: left;">Quyền lợi bảo hành của hãng</td>
                        <td style="text-align: left;">TTBH chính hãng</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Máy đã kích hoạt bảo hành chính hãng</td>
                        <td style="text-align: left;">12 tháng = Thời gian bảo hành còn lại tại hãng + Bảo hành tại  Mobile Shop</td>
                        <td style="text-align: left;">- Theo quyền lợi bảo hành của hãng trong thời gian được hãng bảo hành<br>- Sửa chữa, thay thế linh kiện trong thời gian bảo hành còn lại tại  Mobile Shop</td>
                        <td style="text-align: left;">TTBH chính hãng &amp;  Mobile Shop  </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Máy cũ</td>
                        <td style="text-align: left;">6 tháng</td>
                        <td style="text-align: left;">Sửa chữa, thay thế linh kiện</td>
                        <td style="text-align: left;"> Mobile Shop  </td>
                    </tr>
                    </tbody>
                </table>
                <ul style="list-style: none;">

                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Trong thời gian đợi bảo hành - sửa chữa, khách hàng sẽ được hỗ trợ miễn phí một điện thoại khác để sử dụng.</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;">Khách hàng trả lại máy đã mượn sau khi nhận lại máy của mình.</span></span></li>
                </ul>
                <p><strong><span style="font-size: small;">* Quy định bảo hành phụ kiện theo kèm máy:</span></strong></p>
                <ul style="list-style: none;">
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;"><strong>Vsmart</strong>: 6 tháng.</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;"><strong>Asus</strong>: 6 tháng.</span></span></li>
                    <li><span style="font-size: small;"><span style="font-size: small; line-height: 2;"><strong>Nokia</strong>: 6 tháng.</span></span></li>
                </ul>
                <p><em><span style="font-size: small;">Quyền lợi bảo hành (lỗi từ phía nhà sx): 1 đổi tất cả các lỗi</span></em></p>
                <div class="content-sao-luu-du-lieu">
                    <p style="margin: 15px 0 5px 0;"><strong><em><span style="text-decoration: underline;">Lưu ý về dữ liệu trên các thiết bị:</span></em></strong></p>
                    <p style="margin: 5px 0 5px 0;">Quý khách hàng vui lòng chủ động tự sao lưu dữ liệu.
                    <p>Chúng tôi hoàn toàn ý thức được tầm quan trọng của dữ liệu của khách hàng và luôn cố gắng hết sức để <strong>hỗ trợ - hướng dẫn</strong> khách hàng trong việc sao lưu dữ liệu. Tuy nhiên, cửa hàng <strong>không chịu trách nhiệm về việc mất bất cứ dữ liệu</strong> trong mọi trường hợp.&nbsp;<a href="{{ route('shop.backup') }}">Xem thêm.</a></p>
                </div>
                <p><span style="text-decoration: underline;"><strong><span style="font-size: small;">2. Phụ kiện:</span></strong></span></p>
                <table class="table table-bordered">
                    <thead>
                    <tr class="success"><th style="text-align: center;"><strong>Sản phẩm</strong></th><th style="text-align: center;"><strong>Tình trạng</strong></th><th style="text-align: center;"><strong>Thời gian</strong></th><th style="text-align: center;"><strong>Quyền lợi bảo hành(lỗi từ phía nhà sản xuất)</strong></th><th style="text-align: center;"><strong>Địa điểm</strong></th></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="3" style="text-align: left; vertical-align: middle;">Phụ kiện</td>
                        <td style="text-align: left;">Trên 1 triệu&nbsp;</td>
                        <td style="text-align: center;"><span>12 tháng</span></td>
                        <td style="vertical-align: middle;">Sửa chữa, thay thế linh kiện&nbsp;</td>
                        <td style="text-align: center; vertical-align: middle;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Dưới 1 triệu</td>
                        <td style="text-align: center;">12 tháng</td>
                        <td rowspan="2" style="vertical-align: middle;">1 đổi 1 tất cả các lỗi</td>
                        <td rowspan="9" style="text-align: center; vertical-align: middle;"> Mobile Shop</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Cũ</td>
                        <td style="text-align: center;">30 ngày</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: left;">Phụ kiện khác</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Dán màn hình</td>
                        <td style="text-align: center;">30 ngày</td>
                        <td rowspan="2">- 1 đổi 1 tất cả các lỗi<br>- Dán mới lần 2 được giảm 30%.<br>- Dán PPF chỉ được thực hiện ở cửa hàng.<br>(Không áp dụng bảo hành cho đơn hàng giao tại nhà)</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Dán cường lực</td>
                        <td style="text-align: center;">30 ngày</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Quà tặng (của hãng)</td>
                        <td style="text-align: center;">30 ngày</td>
                        <td rowspan="3" style="vertical-align: middle;">1 đổi 1 tất cả các lỗi</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Thẻ nhớ, USB</td>
                        <td style="text-align: center;">24 tháng</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Phụ kiện đi kèm theo Phụ kiện</td>
                        <td style="text-align: center;">3 tháng</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Tai nghe, Loa, Đồ chơi công nghệ (&gt;1.000.000)</td>
                        <td style="text-align: center;">12 tháng</td>
                        <td>Sửa chữa, thay thế linh kiện</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left;">Bao da, ốp lưng</td>
                        <td colspan="3" style="text-align: center;">Không bảo hành</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align: left;"><strong>Đặc biệt:</strong><br>- Phụ kiện Anker - Pisen: 18 tháng<br>- Phụ kiện Aukey - Energizer - Totolink - Tp-Link: 24 tháng<br>- Sạc cáp Aukey: Đứt gãy do hao mòn, hư hỏng từ phía sản phẩm trong quá trình sử dụng vẫn được bảo hành</td>
                    </tr>
                    </tbody>
                </table>
                <div class="content-sao-luu-du-lieu">
                    <p style="margin: 15px 0 5px 0;"><strong><em><span style="text-decoration: underline;">Lưu ý về dữ liệu trên các thiết bị:</span></em></strong></p>
                    <p style="margin: 5px 0 5px 0;">Quý khách hàng vui lòng chủ động tự sao lưu dữ liệu.
                    <p>Chúng tôi hoàn toàn ý thức được tầm quan trọng của dữ liệu của khách hàng và luôn cố gắng hết sức để <strong>hỗ trợ - hướng dẫn</strong> khách hàng trong việc sao lưu dữ liệu. Tuy nhiên, cửa hàng <strong>không chịu trách nhiệm về việc mất bất cứ dữ liệu</strong> trong mọi trường hợp.&nbsp;<a href="{{ route('shop.backup') }}">Xem thêm.</a></p>
                </div>
                <p><span id="docs-internal-guid-50932c38-7fff-3af3-c968-ffd847f1ca94" style="font-size: medium;"><strong><strong>III. Bảo hành 1 đổi 1 VIP</strong></strong></span></p>
                <p><span style="font-size: small;"><strong>1.&nbsp;</strong><strong>Sản phẩm áp dụng:</strong> Điện thoại, máy tính bảng mới/ cũ; Tai nghe cao cấp mới, Đồng hồ thông minh Apple/ Samsung mới.</span><br><span style="font-size: small;"><strong>2.&nbsp;</strong><strong>Thời gian bảo hành:</strong> 06 tháng/12 tháng</span><br><span style="font-size: small;"><strong>3.&nbsp;</strong><strong>Điều kiện bảo hành:</strong></span></p>
                <p><span style="font-size: small;">Sản phẩm bị lỗi do nhà sản xuất.</span></p>
                <p><span style="font-size: small;">Việc kiểm tra và xác định lỗi do nhà sản xuất được thực hiện bởi Trung Tâm Bảo Hành   – Đối tác sửa chữa các sản phẩm của  Mobile Shop hoặc Trung tâm bảo hành của nhà sản xuất.</span></p>
                <p><span style="font-size: small;"><strong>4.&nbsp;</strong><strong>Quyền lợi bảo hành:</strong></span></p>
                <p><span style="font-size: small;"><strong>4.1&nbsp;Đổi sản phẩm sau khi sản phẩm được kiểm tra và xác định đúng bị lỗi phần cứng phát sinh từ phía nhà sản xuất:</strong></span></p>
                <table class="table table-bordered">
                    <tbody>
                    <tr class="success">
                        <td style="text-align: center;">
                            <p><span style="font-size: small;"><strong>Phạm vi bảo hành</strong></span></p>
                        </td>
                        <td style="text-align: center;">
                            <p><span style="font-size: small;"><strong>Bảo hành tiêu chuẩn</strong></span></p>
                        </td>
                        <td style="text-align: center;">
                            <p><span style="font-size: small;"><strong>BH 1 đổi 1 - VIP</strong></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span style="font-size: small;">Mainboard (lỗi nguồn), ổ cứng</span></p>
                        </td>
                        <td>
                            <p><span style="font-size: small;">-&nbsp;&nbsp;&nbsp; Bảo hành sửa chữa</span></p>
                            <p><span style="font-size: small;">-&nbsp;&nbsp;&nbsp; Riêng iPhone mới: 1 đổi 1 theo quy định</span></p>
                            <p><span style="font-size: small;">-&nbsp;&nbsp;&nbsp; Sản phẩm đổi là sản phẩm tồn kho/chưa, đã kích hoạt/ cũ</span></p>
                        </td>
                        <td>
                            <p><span style="font-size: small;">1 đổi 1</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span style="font-size: small;">Màn hình cảm ứng (&gt;= 3 điểm chết hoặc kích thước điểm chết &gt;= 1mm)</span></p>
                        </td>
                        <td rowspan="2">
                            <p><span style="font-size: small;">Bảo hành sửa chữa</span></p>
                        </td>
                        <td rowspan="2">
                            <p><span style="font-size: small;">1 đổi 1</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span style="font-size: small;">Các lỗi linh kiện: camera (trước/sau), loa (trong/ngoài), chip wifi, mic thoại, đèn flash …</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span style="font-size: small;">Lỗi chân sim, chân khe cắm thẻ nhớ, chân sạc</span></p>
                        </td>
                        <td>
                            <p><span style="font-size: small;">Không bảo hành</span></p>
                        </td>
                        <td>
                            <p><span style="font-size: small;">Bảo hành sửa chữa</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><span style="font-size: small;">Pin và phím bấm vật lý bên ngoài hư hỏng, không hoạt động (âm lượng, phím nguồn…)</span></p>
                        </td>
                        <td>
                            <p><span style="font-size: small;">Bảo hành sửa chữa 3 Tháng</span></p>
                            <p><span style="font-size: small;">(Pin iPhone cũ: 6 tháng)</span></p>
                        </td>
                        <td>
                            <p><span style="font-size: small;">1 đổi 1 trong 12 Tháng</span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p><strong>4.2&nbsp;</strong>Sản phẩm đổi bảo hành (A) là sản phẩm giống với với sản phẩm Khách hàng mua ban đầu tại  Mobile Shop.</p>
                <p>Ví dụ: Khách hàng mua sản phẩm A -&gt; Nếu xảy ra lỗi từ phía nhà sản xuất và sản phẩm A có tham gia gói Bảo hành 1 đổi 1 – VIP -&gt; Khách hàng sẽ được đổi bảo hành sản phẩm là A.</p>
                <p><strong>4.3&nbsp;</strong>Thời gian xử lý:</p>
                <p>-Trong vòng 24h kể từ thời điểm tiếp nhận sản phẩm.</p>
                <p>-Với các trường hợp sản phẩm trong tình trạng không hoạt động, sản phẩm không thể kiểm tra, xác minh được số series, IMEI thì  Mobile Shop cần 05 – 07 ngày làm việc để gửi sản phẩm về hãng sản xuất để xác minh.</p>
                <p><strong>4.4&nbsp;</strong>Trường hợp  Mobile Shop có sản phẩm để đổi cho Khách hàng nhưng Khách hàng muốn đổi sang sản phẩm khác thì phải đổi sang sản phẩm có giá bán cao hơn sản phẩm hiện tại (A) và chịu phí 10% giá trị sản phẩm khi nhập lại:</p>
                <p style="text-align: center;"><strong>Giá nhập lại sản phẩm = Giá bán hiện tại sản phẩm (A) x 90% </strong></p>
                <p style="text-align: center;"><em>(trong đó: giá bán hiện tại sản phẩm (A) nhỏ hơn hoặc bằng giá mua sản phẩm ban đầu, trường&nbsp;&nbsp;&nbsp; hợp giá bán hiện tại sản phẩm (A) lớn hơn giá mua sản phẩm ban đầu thì giá bán hiện tại sản&nbsp; phẩm được tính bằng giá mua ban đầu).</em></p>
                <p><strong>4.5&nbsp;</strong>Trong trường hợp sản phẩm được đổi phát sinh lỗi tiếp (thuộc phạm vi bảo hành),  Mobile Shop&nbsp; vẫn sẽ bảo hành cho sản phẩm theo chế độ 1 đổi 1 trong thời gian bảo hành còn lại.</p>
                <p><strong>4.6&nbsp;</strong>Với các trường hợp không có sản phẩm để đổi ngay,  Mobile Shop cam kết thời gian xử lý đổi sản phẩm tối đa 07 ngày làm việc (trừ 7 + CN).&nbsp;Sau thời gian này, nếu không có sản phẩm đổi cho khách hàng,  Mobile Shop sẽ:</p>
                <p><strong>4.6.1&nbsp;</strong>Đổi cho khách hàng một sản phẩm khác cùng thương hiệu, dòng sản phẩm (ví dụ dòng Note Series, S Series với Samsung hoặc dòng Pro/Pro max với Apple) và có chất lượng tương đương với sản phẩm khách hàng mua ban đầu tại  Mobile Shop, hoặc</p>
                <p><strong>4.6.2&nbsp;</strong>Nhập lại cho khách hàng theo công thức sau để đổi (bù phí) sang sản phẩm khác:</p>
                <p><strong>Giá trị của sản phẩm</strong> <strong>tại thời điểm bảo hành = Giá mua sản phẩm x (100% - 3% x Số tháng sử dụng sản phẩm) </strong></p>
                <p style="text-align: center;">(Số tháng sử dụng = Tháng tại thời điểm đổi sản phẩm &nbsp;– Tháng tại thời điểm mua sản phẩm )</p>
                <p>Trường hợp nhập sản phẩm, khách hàng phải có hộp, phụ kiện. Nếu không đầy đủ hộp &amp; phụ kiện,  Mobile Shop trừ phí 5% giá trị của sản phẩm tại thời điểm bảo hành/món (hộp/phụ kiện)</p>
                <p><strong>4.7&nbsp;</strong>Dịch vụ bảo hành này không áp dụng đối với hộp và phụ kiện kèm theo như: tai nghe, sạc, cáp...</p>
                <p><strong>4.8&nbsp;</strong>Khách hàng có thể chuyển nhượng quyền sở hữu của sản phẩm và gói <strong>Bảo hành 1 đổi 1 VIP</strong> trong thời gian bảo hành.</p>
                <p><strong><span style="text-decoration: underline;">Lưu ý: </span></strong></p>
                <p>- Nếu ngoại hình sản phẩm cấn, móp, cong, nứt, gãy thì Khách hàng không được hưởng quyền lợi của gói bảo hành này.</p>
                <p>- Cơ sở xác định sản phẩm lỗi pin: Có giấy xác nhận lỗi pin từ Trung Tâm Bảo Hành hãng<strong><em> </em></strong>/ Hoặc kiểm tra tại Trung Tâm Bảo Hành   – Đối tác sửa chữa các sản phẩm của  Mobile Shop, cơ sở xác định lỗi pin như sau:<strong><em> </em></strong>&nbsp;&nbsp;</p>
                <ul>
                    <li>Lỗi pin hao nhanh: tiêu hao <strong>&gt; 20%/giờ</strong> khi xem Youtube với: Wifi, mức âm lượng <strong>50%</strong>; mức pin ban đầu <strong>100%</strong>; độ sáng màn hình <strong>50%</strong>.</li>
                    <li>Lỗi pin chai: Mức độ chai pin <strong>&gt;= 30% </strong>đo bằng ứng dụng 3u Tools.</li>
                </ul>
                <p>- Cơ sở xác định sản phẩm lỗi phím bấm vật lý: Thử kiểm tra nhấn phím bấm vật lý trong <strong>10 lần liên tiếp</strong> và phím bấm không hoạt động (không phản hồi).</p>                    <p><span id="docs-internal-guid-50932c38-7fff-3af3-c968-ffd847f1ca94" style="font-size: medium;"><strong><strong>IV.Bảo hành rơi vỡ, ngấm nước (BHRV - NN)</strong></strong></span></p>
                <p><span style="font-size: small;"><strong>1. Sản phẩm áp dụng: </strong>Điện thoại, máy tính bảng mới/ cũ</span><br><span style="font-size: small;"><strong>2. Thời gian bảo hành: </strong>12 tháng</span><br><span style="font-size: small;"><strong>3. Điều kiện bảo hành:</strong></span></p>
                <p><span style="font-size: small;">Sản phẩm bị tác động của ngoại lực gây vỡ hoặc bị ngấm nước, ngấm các chất lỏng khác dẫn đến sản phẩm không hoạt động bình thường.</span></p>
                <p><span style="font-size: small;"><strong>4. Quyền lợi bảo hành:</strong></span></p>
                <p><span style="font-size: small;"><strong>4.1&nbsp;</strong>Trường hợp gặp các vấn đề về lỗi phần cứng (yêu cầu sản phẩm chưa từng qua sửa chữa hư hỏng do rơi vỡ, ngấm nước) phát sinh từ phía nhà sản xuất thì sản phẩm sẽ được bảo hành theo quyền lợi của gói <strong>Bảo hành 1 đổi 1 VIP</strong> (tham khảo quyền lợi bảo hành ở mục I)</span></p>
                <p><span style="font-size: small;"><strong>4.2&nbsp;</strong>Trường hợp gặp các vấn đề <strong>hư hỏng do rơi vỡ, ngấm nước </strong>được Trung Tâm Bảo Hành   – Đối tác sửa chữa các sản phẩm của  Mobile Shop - tiến hành <strong>sửa chữa/ thay thế linh kiện </strong>(hướng xử lý tùy theo mức độ từng trường hợp) cho khách hàng. Thời gian xử lý từ 07 – 14 ngày tùy thuộc vào mức độ hư hỏng của sản phẩm và tình trạng linh kiện.</span></p>
                <p><span style="font-size: small;"><strong>4.3&nbsp;</strong>Dịch vụ sửa chữa được thực hiện bởi Trung Tâm Bảo Hành   – Đối tác sửa chữa các sản phẩm của  Mobile Shop với linh kiện thay thế được bảo hành theo thời hạn còn lại của gói dịch vụ bảo hành.</span></p>
                <p><span style="font-size: small;"><strong>4.4&nbsp;</strong>Với mỗi trường hợp xảy ra hư hỏng do rơi vỡ, ngấm nước</span></p>                    <p><span id="docs-internal-guid-50932c38-7fff-3af3-c968-ffd847f1ca94" style="font-size: medium;"><strong><strong>V.Bảo hành mở rộng S24+ (Bảo hành sản phẩm từ năm thứ 2)</strong></strong></span></p>
                <p><span style="font-size: small;"><strong>1.&nbsp;</strong><strong>Sản phẩm áp dụng: </strong>Phụ kiện cao cấp, Laptop, Macbook, Điện thoại</span><br><span style="font-size: small;"><strong>2.&nbsp;</strong><strong>Thời gian bảo hành:</strong> 24 tháng – 36 tháng (bao gồm 12 tháng bảo hành từ Nhà sản xuất)</span><br><span style="font-size: small;"><strong>3.&nbsp;</strong><strong>Điều kiện bảo hành:</strong></span></p>
                <p><span style="font-size: small;">- Sau khi hết thời hạn bảo hành từ Nhà sản xuất.</span></p>
                <p><span style="font-size: small;">- Sản phẩm bị lỗi từ nhà sản xuất.</span></p>
                <p><span style="font-size: small;"><strong>4.&nbsp;</strong><strong>Quyền lợi bảo hành</strong></span></p>
                <p><span style="font-size: small;"><strong>4.1&nbsp;</strong>Sau khi hết hạn bảo hành từ nhà sản xuất, sản phẩm sẽ được tiếp tục bảo hành các hư hỏng phát sinh do lỗi nhà sản xuất trong 12 tháng hoặc 24 tháng tiếp theo tùy theo thời hạn bảo hành Khách hàng lựa chọn.<strong></strong></span></p>
                <p><span style="font-size: small;"><strong>4.2&nbsp;</strong>Các hư hỏng đến từ người dùng <strong>(do rơi vỡ, do ngấm nước…)</strong> và các vấn đề về <strong>pin</strong>, <strong>phím vật lý</strong> không nằm trong phạm vi bảo hành của S24+.<strong></strong></span></p>
                <p><span style="font-size: small;"><strong>4.3&nbsp;</strong>Nếu sản phẩm gặp phải các hư hỏng do lỗi nhà sản xuất trong thời gian bảo hành, Khách hàng được<strong> miễn </strong>chi phí sửa chữa và thay thế linh kiện. <strong></strong></span></p>
                <p><span style="font-size: small;"><strong>4.4&nbsp;</strong>Thời gian xử lý: từ 07 – 14 ngày làm việc.<strong></strong></span></p>
                <p><span style="font-size: small;">Lưu ý: Đối với Macbook trong thời gian bảo hành của hãng, thời gian xử lý có thể từ 03 tuần – 01 tháng.<strong></strong></span></p>
                <p><span style="font-size: small;"><strong>4.5&nbsp;</strong>Đối với các trường hợp không thể sửa chữa được,  Mobile Shop sẽ xử lý theo hướng:<strong></strong></span></p>
                <p><span style="font-size: small;"><strong>4.5.1&nbsp;</strong>Đổi sản phẩm cũ cùng thương hiệu, dòng sản phẩm (ví dụ dòng Note Series, S series với Samsung hoặc dòng Pro/Pro max với Apple) và có chất lượng tương đương chất lượng sản phẩm của Khách hàng tại thời điểm bảo hành.</span></p>
                <p><span style="font-size: small;"><strong>4.5.2&nbsp;</strong>Nếu không có sản phẩm đổi, sẽ nhập lại sản phẩm bảo hành của khách với mức giá hỗ trợ để khách hàng đổi/ bù phí lên đời các sản phẩm khác hoặc hoàn tiền cho khách hàng theo công thức:<strong></strong></span></p>
                <p style="text-align: center;"><span style="font-size: small;"><strong>Giá trị nhập lại/Mức hoàn tiền = Giá mua sản phẩm x (100 - 3% x Số tháng sử dụng sản phẩm) </strong></span></p>
                <p style="text-align: center;"><span style="font-size: small;">(Số tháng sử dụng = Tháng tại thời điểm đổi sản phẩm &nbsp;– Tháng tại thời điểm mua sản phẩm )</span></p>
                <p><span style="font-size: small;">Ví dụ: Khách hàng mua tai nghe giá trị 4.800.000đ và có sử dụng dịch vụ S24+ với mức phí 300.000đ, sau 15 tháng sử dụng sản phẩm bị lỗi</span></p>
                <p><span style="font-size: small;">1. Khách hàng được sửa chữa miễn phí sản phẩm</span></p>
                <p><span style="font-size: small;">2. Nếu không thể sửa chữa được, hướng xử lý:</span></p>
                <p><span style="font-size: small;">- Đổi tai nghe cũ tình trạng tương đương tình trạng tai nghe bị lỗi (nếu có sản phẩm cũ)</span></p>
                <p><span style="font-size: small;">- Nhập lại tai nghe lỗi với giá trị 2.640.000đ (theo công thức nhập lại). Khách hàng được đổi (bù phí) sang sản phẩm khác theo giá trị nhập lại này</span></p>
                <p><span style="font-size: small;"><strong>4.6&nbsp;</strong>Khách hàng có thể chuyển nhượng quyền sở hữu của sản phẩm và gói bảo hành mở rộng S24+ trong thời gian bảo hành.</span></p>                    <p><span id="docs-internal-guid-50932c38-7fff-3af3-c968-ffd847f1ca94" style="font-size: medium;"><strong><strong>VI. Lưu ý chung khi tiếp nhận sản phẩm bảo hành</strong></strong></span></p>
                <p>- Sản phẩm đã được đăng xuất khỏi tất cả các tài khoản của hãng như iCloud, Samsung Account, MiCloud...</p>
                <p>- Đối với lỗi điểm chết trên màn hình: từ 3 điểm chết màn hình trở lên hoặc 1 điểm chết phải lớn hơn 1mm</p>
                <p>-  Mobile Shop bảo hành dựa vào số IMEI/SERIAL trên thân máy.</p>
                <p>- Các vấn về hình thức bên ngoài (ví dụ: tróc sơn, hở viền) sẽ không thuộc phạm vi bảo hành .</p>
                <p>- Địa điểm tiếp nhận bảo hành: Trung Tâm Bảo Hành   – Đối tác sửa chữa các sản phẩm của  Mobile Shop.</p>
            </div>
            <!-- Warranty End-->
        </section>
    </main>
@endsection
