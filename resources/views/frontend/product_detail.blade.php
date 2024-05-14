@extends('layouts.site')
@section('title','Chi tiết sản phẩm')
@section('content')
<section>
    <div class="div py-2 text-secondary bg-body-tertiary">
        <header1>
            <h2 style="text-indent: 50px;">Chi tiết sản phẩm</h2>
        </header1>
    </div>       
    <div class="containerd">
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-left: 40px;">
                <img src="{{ asset('images/p431620.webp') }}" width=99% alt="">
                <div class="row">
                    <div class="py-1">
                    </div>
                </div>
                <div>
                    <span class="hinh2 mr-3 text-dark border" style="float: left;"><img src="{{ asset('images/p431620.webp') }}" width=115px alt=""></span>
                    <span class="hinh2 mr-3 text-dark border" style="float: left;"><img src="{{ asset('images/p431625.webp') }}" width=115px alt=""></span>
                    <span class="hinh2 mr-3 text-dark border" style="float: left;"><img src="{{ asset('images/p431629.webp') }}" width=115px alt=""></span>                     
                    <span class="hinh2 mr-3 text-dark border" style="float: left;"><img src="{{ asset('images/p431633.webp') }}" width=115px alt=""></span>                   
                </div>
            </div>
            <div class="col-md">
                <div class="col-md">
                    <div class="col-md m-1 mdh"><h3>Áo thun ngắn tay leo núi dã ngoại TechFRESH 50 cho nam</h3></div>
                    <div class="row">
                        <div class="col-md-10 m-1 mdh">Mã: Đang cập nhật</div>
                        <div class="col-md m-1 text-right mdh"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="col-md m-1 mdh">Thương hiệu: QUECHUA   |   Tình trạng: Còn hàng</div>
                    <hr>
                    <div class="row bg-body-tertiary">
                        <div class="col-md-3 m-1 mdh text-danger"><h2>175.000đ</h2></div>
                        <div class="col-md-7 m-1 mdp"><h6 style="margin-top: 15px;">Giá gốc: 195.000đ</h6></div>
                        <div class="col-md m-1 text-right text-center mdh"><img src="{{ asset('images/percent.png') }}" width=30px style="margin-top: 7px;" alt="" ></div>
                    </div>
                    <div class="col-md m-1 mdh">Kích thước: S</div>
                    <div>
                        <span class="hinh1 mr-3 text-white border-dark">S</span>
                        <span class="hinh mr-3 text-dark border">M</span>
                        <span class="hinh mr-3 text-dark border">L</span>                       
                        <span class="hinh mr-3 text-dark border">XL</span>
                        <span class="hinh mr-3 text-dark border">2XL</span>
                        <span class="hinh mr-3 text-dark border">3XL</span>
                    </div>
                    <div class="col-md m-1 pt-3 mdh">Số lượng: <i class="fa-solid fa-minus hinh border" style="margin-right: 7px;"></i> 1 <i class="fa-solid fa-plus hinh border" style="margin-left: 7px;"></i></div>
                    <div class="row pt-2">
                        <div class="col-md-6 m-1 py-2 mdh1"><b>Thêm vào giỏ hàng</b></div>
                        <div class="col-md m-1 mdh2" style="padding-top: 7px;"><b>Mua ngay</b></div>
                    </div>
                </div>
                
            </div>
            <div class="col-md">
                <div class="row" style="margin-left: 60px;">
                    <div class="col-md-9 border text-dark p-3 m-3 smd"><i class="fa-solid fa-shield" style="margin-right: 7px;"></i>Cam kết chính hãng 100%</div>
                    <div class="col-md-9 border text-dark p-3 m-3 smd"><i class="fa-solid fa-award" style="margin-right: 7px;"></i>Bảo hành 12 tháng</div>
                    <div class="col-md-9 border text-dark p-3 m-3 smd"><i class="fa-solid fa-comments-dollar" style="margin-right: 7px"></i>Đổi trả hàng trong 7 ngày</div>
                    <div class="col-md-9 border text-dark p-3 m-3 smd"><i class="fa-solid fa-truck" style="margin-right: 7px;"></i>Giao hàng nhanh toàn quốc</div>
                </div>
                <div class="col-md m-1 mdh"><img src="{{ asset('images/product_banner.webp') }}" alt=""></div>
            </div>
            </div>
        </div>
    </div>


    <!-- Phần sản phẩm -->
    <div class="div py-5">
        <header1>
            <h3 style="text-indent: 50px;">Thường mua cùng sản phẩm</h3>
        </header1>
    </div>   
    <section class="top-products">
        <div class="product-list">
            <div class="product">
                <img src="{{ asset('images/p2154429.webp') }}" alt="Quả bóng rổ BT100">
                <h3>Quả bóng rổ BT100 cô 7 cho nam từ 13 tuổi trở lên</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="old-price">500.000₫</span>
                        <span class="new-price">449.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/p2132063.webp') }}" alt="Quần short bơi 100 cho nam">
                <h3>Quần short bơi dành cho 100 nam sớm nhất</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">145.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/p1714553.webp') }}" alt="Áo khoác nữ leo núi MH520">
                <h3>Áo khoác nữ chuyên cho leo núi MH520</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">175.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/p708204.webp') }}" alt="Túi đựng giày Light 15 Lit">
                <h3>Túi đựng giày Light 15 Lit màu xanh cam</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">69.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/p1640075.webp') }}" alt="Balô leo núi dã ngoại Arpenaz 7L cho trẻ em">
                <h3>Balô leo núi dã ngoại Arpenaz 7L cho trẻ em</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">79.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="product">
                <img src="{{ asset('images/p2153171-5c5c3c0e-8280-4e5c-99d9-7187c77e5424.webp') }}" alt="Giày chạy bộ Ultraboost 23 Prime PK">
                <h3>Giày chạy bộ Ultraboost 23 Prime PK</h3>
                <div class="product-info">
                    <div class="price">
                        <span class="new-price">7.499.000₫</span>
                    </div>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
        </div>   
    </header>
    </section>
    <div class="row">
        <div class="col-md m-1"></div>
        <div class="col-md-7 m-1 pt-1 bg-mota ">
            <div class="bg-secondary mota py-1"><h5 style="margin-left: 20px;">MÔ TẢ SẢN PHẨM   |    CHÍNH SÁCH BẢO MẬT</h5></div>
            <div class="aaa"><p>GIỚI TÍNH: NAM<br>
                TẦN SUẤT: Thỉnh thoảng<br>
                TRÌNH ĐỘ LUYỆN TẬP: Mới bắt đầu<br>
                ĐIỀU KIỆN THỜI TIẾT: Thời tiết ấm, Thời tiết ôn hòa, Thời tiết khô<br>
                ĐỊA ĐIỂM TẬP LUYỆN: Núi<br>
                PHOM DÁNG: Bình thường<br>
                LOẠI CỔ ÁO: Cổ tròn<br>
                CHẤT LIỆU CHÍNH: Tổng hợp<br>
                CHỐNG THẤM NƯỚC: Không chống thấm nước<br>
                TÚI: Không có túi<br>
                PHONG CÁCH: Trơn<br>
                CHIỀU DÀI TAY ÁO: Ngắn tay<br>
                CHỐNG TIA UV: Không chống tia UV<br>
                CHIỀU DÀI ÁO: Tiêu chuẩn<br>
                PHOM DÁNG &amp; CÁCH CHỌN CỠ: Mẫu áo thun này có phom thể thao, vừa vặn.Chọn cỡ thông thường hoặc lớn hơn một cỡ nếu thích mặc thoải mái hơn.<br>
                THOÁT MỒ HÔI: Vải tổng hợp có khả năng thoát ẩm ra ngoài sợi vải rất tốt (4 trên 5 sao theo kiểm nghiệm tiêu chuẩn trong phòng thí nghiệm), nhờ đó ngăn mồ hôi đọng lại trên da.<br>
                KHÔ NHANH: Thời gian khô: đo khả năng khô nhanh của vải sau khi bị ướt theo quy chuẩn.<br>
                THIẾT KẾ SẢN PHẨM: CHUYÊN MÔN CỦA CHÚNG TÔI<br>
                Trung tâm thiết kế toàn cầu Quechua có trụ sở tại Passy ở chân núi Mont Blanc, Haute Savoie. Đội ngũ thiết kế (nhà thiết kế, quản lý sản phẩm, kỹ sư, v.v.) là những người đam mê thể thao ngoài trời và có kinh nghiệm trong việc thiết kế sản phẩm. Tất cả sản phẩm leo núi dã ngoại đều được thiết kế và kiểm nghiệm bởi đội ngũ có kinh nghiệm của chúng tôi.<br>
                POLYESTER TÁI CHẾ<br>
                Nhờ tái chế chai nhựa hoặc vải đã qua sử dụng để sản xuất polyester, chúng tôi giảm sử dụng nguyên liệu từ dầu mỏ, đồng thời giữ nguyên chất lượng và hiệu năng của chất liệu trong các chuyến leo núi.<br>
                XUẤT XỨ SẢN PHẨM<br>
                Sản phẩm được thiết kế tại trung tâm quốc tế của Decathlon dưới chân núi Mont Blanc, Pháp, sau đó đưa tới các nhà cung cấp tại Sri Lanka, Việt Nam và Ai Cập để sản xuất và hoàn thiện. Chúng tôi xây dựng mối quan hệ hợp tác chặt chẽ với các đối tác có chuyên môn sâu rộng trong lĩnh vực sản xuất áo thun. Nhờ mối quan hệ tin cậy đó, chúng tôi có thể tạo ra các sản phẩm kỹ thuật chất lượng cao.<br>
                ĐIỀU KIỆN LÀM VIỆC TẠI CÁC NHÀ MÁY SẢN XUẤT CỦA CHÚNG TÔI<br>
                Chúng tôi đảm bảo nhà cung cấp tuân thủ bộ quy tắc ứng xử của chúng tôi. Chúng tôi thường lựa chọn nhà cung cấp tại các quốc gia đang phát triển, nơi mà sự hiện diện của chúng tôi sẽ giúp tạo thêm việc làm. Bằng cách tiến hành đánh giá và giám sát thực tế, chúng tôi đảm bảo môi trường làm việc của nhân viên đáp ứng các tiêu chuẩn chất lượng về tôn trọng con người, hoàn thiện cá nhân và bảo vệ môi trường.<br>
                BẢO HÀNH: 2<br>
                ĐƯỢC KIỂM TRA BỞI<br>
                Để đáp ứng các yêu cầu của bạn, sản phẩm Quechua được kiểm nghiệm trên núi trong các điều kiện mà bạn sẽ gặp phải trong chuyến dã ngoại. Đội ngũ của chúng tôi cùng nhóm kiểm nghiệm viên (gồm đối tác, đại sứ và khách hàng) kiểm nghiệm sản phẩm trong suốt quá trình phát triển đến khi đưa ra thị trường.<br>
                THÀNH PHẦN: Vải chính: 100.0% Polyethylen Terephtalat,Tấm đệm vai: 23.0% Spandex, 77.0% Polyamit</p>
            </div>
        </div>
        <div class="col-md-4 m-1 text-right ">
            <div class="col-md-7 pt-1 bg-mota ">
                <div class="bg-secondary mota py-1"><h5 style="margin-left: 20px;">CÓ THỂ BẠN THÍCH</h5></div>
                <img class="card-img-top" src="assets/images/image_cate_4.webp" alt="Card image" style="width:50%">
                <div class="card-body">
                  <h4 class="card-title">Giày chạy bộ DOMYOS</h4>
                  <strong><p class="card-text text-danger">Giá chỉ: 495.000đ</p></strong>
                  <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                </div>
                <img class="card-img-top" src="assets/images/p1640075.webp" alt="Card image" style="width:50%">
                <div class="card-body">
                <h4 class="card-title">Ba lo phong cách nữ</h4>
                <strong><p class="card-text text-danger">Giá chỉ: 175.000đ</p></strong>
                <a href="#" class="btn btn-primary text-center" style="margin-left: 20px;"><i class="fa-solid fa-money-bill-wave" style="margin-right: 7px;"></i>Mua ngay</a>
                </div>
                <img class="card-img-top" src="assets/images/image_cate_6.webp" alt="Card image" style="width:50%">
                <div class="card-body">
                <h4 class="card-title">Giày đá banh nam</h4>
                <strong><p class="card-text text-danger">Giá chỉ: 355.000đ</p></strong>
                <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                </div>
                <img class="card-img-top" src="assets/images/p2155510.webp" alt="Card image" style="width:50%">
                <div class="card-body">
                <h4 class="card-title">Giày chạy bộ</h4>
                <strong><p class="card-text text-danger">Giá: 1.175.000đ</p></strong>
                <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                </div>
        </div>

    </div>
</section>
@endsection