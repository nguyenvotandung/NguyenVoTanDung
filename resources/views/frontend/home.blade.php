@extends('layouts.site')
@section('title','Trang chủ')
@section('content')
<div>
    <div class="div py-5">
        <header1>
            <h1 style="text-indent: 50px;">Môn thể thao bạn yêu thích</h1>
        </header1>
    </div>        
    
    <main>
        <section class="categories">
            <div class="category">
                <img src="{{ asset('images/image_cate_1.webp') }}" alt="Chạy bộ">
                <h2>Chạy bộ</h2>
                <p>9 sản phẩm</p>
            </div>
            <div class="category">
                <img src="{{ asset('images/image_cate_2.webp') }}" alt="Tennis">
                <h2>Tennis</h2>
                <p>11 sản phẩm</p>
            </div>
            <div class="category">
                <img src="{{ asset('images/image_cate_3.webp') }}" alt="Hiking & Trekking">
                <h2>Hiking & Trekking</h2>
                <p>7 sản phẩm</p>
            </div>
            <div class="category">
                <img src="{{ asset('images/image_cate_4.webp') }}" alt="Đi bộ">
                <h2>Đi bộ</h2>
                <p>8 sản phẩm</p>
            </div>
            <div class="category">
                <img src="{{ asset('images/image_cate_5.webp') }}" alt="Đạp Xe">
                <h2>Đạp Xe</h2>
                <p>7 sản phẩm</p>
            </div>
            <div class="category">
                <img src="{{ asset('images/image_cate_6.webp') }}" alt="Bóng Đá & Futsal ">
                <h2>Bóng Đá & Futsal</h2>
                <p>11 sản phẩm</p>
            </div>
            <div class="category">
                <img src="{{ asset('images/image_cate_7.webp') }}" alt="Bóng bàn">
                <h2>Bóng bàn</h2>
                <p>11 sản phẩm</p>
            </div>
        </section>
    </main>

    <!-- Phần banner thêm -->
    <section>
        <div class="col-md-10">
            <img src="{{ asset('images/section_big_banner.webp') }}" alt=""  style="width: 120%; height: auto;">
        </div>
    </section>
    
    <!-- Phần sản phẩm bán chạy -->
    <div class="div py-5">
        <header1>
            <h1 style="text-indent: 50px;">Top sản phẩm bán chạy</h1>
        </header1>
    </div>   
    <main>
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
            <div class="view-all-button container">
                <button class="btnd text-white" style="margin-bottom: 90px;">Xem tất cả</button>
            </div>
</div>
@endsection