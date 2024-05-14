<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css')}}">
    @yield('header')
</head>
<body>
    <div class="header" py-2>
        <div class="row align-items-center">
            <div class="col-md-1 pt-2 logoimage">
                <i class="fa-solid fa-bars-staggered text-white" style="margin-left: 100px" ></i>
                <strong class="text-white" style="margin-left: 85px">MENU</strong>
            </div>
            <div class="col-md-2 pt-1 logoimages">
                <img src="{{ asset('images/logo.webp')}}" class="img-fluid" style="margin-left: 50px" alt="logo">
            </div>

            <div class="col-md-4">
                <div class="input-group mb-3 pt-3">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" 
                    aria-label="Nhập từ khóa tìm kiếm" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
            <div class="col-md-3 py-3">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-4">
                                <div class="fs-3 ">
                                    <i class="fa-solid fa-phone-volume text-white"></i>
                                </div>
                            </div>
                            <div class="col-8 text-white">SĐT<br>
                                <strong class="text-primary"  style="margin-right: 10px;">0383532457</strong>
                            </div>                                                                                  
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <div class="fs-3">
                                    <i class="fa-solid fa-store text-white"></i>
                                </div>
                            </div>
                            <div class="col-9 text-white">Cửa hàng<br>
                                <strong class="text-white">7</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <div class="fs-3">
                                    <i class="fa-regular fa-user text-white"></i>
                                </div>
                                </div>
                                <div class="col-9 text-white">Thông tin<br>
                                    <strong class="text-white">Tài khoản</strong>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 py-3">
                <div class="row">
                    <div class="col">
                        <a href="#" class="position-relative">
                            <span class="fs-3"><i class="fa-solid fa-cart-shopping"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="position-relative">
                            <span class="fs-3"><i class="fa-regular fa-heart"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="position-relative">
                            <span class="fs-3"><i class="fa-regular fa-envelope"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
    <footer> <div class="row">
        <div class="ab text-white py-1">
        </div>
    </div>
    <!-- Footer -->
    <section class="footer bg-white text-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="">
                        <img src="{{ asset('images/logo_footer.webp') }}" class="img-fluid"   alt="logo">
                    </div>
                    <div class="div">
                        Sudes Sport - Nhà bán lẻ &amp; phân phối thương hiệu các mặt hàng về thể thao như giày chạy bộ, đồ bơi, kính bơi, giày thể thao, đồ tập gym,... với chất lượng hàng đầu tại Việt Nam. 
                    </div>
                    <div>
                        <span class="imgfooter mr-3">
                            <img src="assets/images/facebook_2.svg" alt="">
                        </span>
                        <span class="imgfooter mr-3">
                            <img src="assets/images/instagram_1.svg" alt="">
                        </span>
                        <span class="imgfooter mr-3">
                            <img src="assets/images/shopee.svg" alt="">
                        </span>
                        <span class="imgfooter mr-3">
                            <img src="assets/images/tiktok.svg" alt="">
                        </span>
                      </div>
                </div>
                <div class="col-md-2">
                    <h5 class="fs-5">Liên hệ</h5>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Địa chỉ: </b>
                                
                                Số 70 Lữ Gia, Phường 15, Quận 11, TP. Hồ Chí Minh
                                
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Điện thoại: </b>
                                <a>
                                    1900 6750
                                </a>
                            </span>
                        </div>
                        
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Zalo: </b>
                                <a>
                                    036 1234 567
                                </a>
                            </span>
                        </div>
                        
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <b>Email: </b>
                                <a>
                                    support@sapo.vn
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5 class="fs-5">Chính sách</h5>
                    <ul class="list-menu toggle-mn hidden-mob">
                    
                        <li class="li_menu">
                            <a href="/chinh-sach-mua-hang" title="Chính sách mua hàng">Chính sách mua hàng</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/chinh-sach-thanh-toan" title="Chính sách thanh toán">Chính sách thanh toán</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/chinh-sach-van-chuyen" title="Chính sách vận chuyển">Chính sách vận chuyển</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/cam-ket-cua-hang" title="Cam kết cửa hàng">Cam kết cửa hàng</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/chinh-sach-thanh-vien" title="Chính sách thành viên">Chính sách thành viên</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="fs-5">Hướng dẫn</h5>
                    <ul class="list-menu toggle-mn hidden-mob list-social">
                    
                        <li class="li_menu">
                            <a href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/huong-dan-doi-tra" title="Hướng dẫn đổi trả">Hướng dẫn đổi trả</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/huong-dan-chuyen-khoan" title="Hướng dẫn chuyển khoản">Hướng dẫn chuyển khoản</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/huong-dan-tra-gop" title="Hướng dẫn trả góp">Hướng dẫn trả góp</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/huong-dan-hoan-hang" title="Hướng dẫn hoàn hàng">Hướng dẫn hoàn hàng</a>
                        </li>
                        
                        <li class="li_menu">
                            <a href="/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn hàng</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fs-5">Hỗ trợ thanh toán</h5>
                    <ul class="list-menu">
                        <div>
                            <span class="imglistmenu mr-3 bg-success text-white">
                                <i class="fa-brands fa-google-pay"></i>
                            </span>
                            <span class="imglistmenu mr-3 bg-success text-white">
                                <i class="fa-brands fa-apple-pay"></i>
                            </span>
                            <span class="imglistmenu mr-3 bg-success text-white">
                                <i class="fa-solid fa-credit-card"></i>
                            </span>
                            <span class="imglistmenu mr-3 bg-success text-white">
                                <i class="fa-regular fa-money-bill-1"></i>
                            </span>
                          </div>
                          <div class="block-certifi">
                            <h4 class="title-menu">
                                Được chứng nhận bởi 
                            </h4>
                            <div class="certifi-footer">
                                
                                <a href="#" title="Chứng nhận 1" target="_blank">
                                    <img src="assets/images/certifi_1.webp" width=200px alt="">
                                </a>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
        <hr>
        <div class="title-menu">
            <div class="title-menu">
                <div class="text-center">© 2024. Công Ty Cổ Phần Thương Mại Sport. GPDKKD: 0383532457 do sở KH ĐT TP.HCM cấp ngày 06/12/2004. Giấy phép thiết lập mạng xã hội trên mạng (Số 20/GP-BTTTT) do Bộ Thông Tin Và Truyền Thông cấp ngày 11/01/2021. Trụ sở chính: 17 Đường số 9, P.Tăng Nhơn Phú B, Quận Thử Đức, TP.HCM. Địa chỉ liên hệ: Toà nhà QPT, Đường D1, Khu Công Nghệ Cao, P. Tân Nhơn Phú, TP.Thủ Đức, TP.HCM. Email:lienhe@bachhoaxanh.com SĐT: 0382522458 Chịu trách nhiệm nội dung: Nguyễn Võ Tấn Dũng. Xem chính sách sử dụng web</div>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="footer_footer text-white py-3">
        <span class="wsp">
            
            <span class="mobile">© Bản quyền thuộc về <b>Sudes Team</b>
                <span class="dash"> | </span>
            </span>
            
            <span class="opacity1">Cung cấp bởi</span>
            
            <a>Sapo</a>
            
        </span></div>
    </div>
</footer>
    @yield('footer')
</body>
</html>
