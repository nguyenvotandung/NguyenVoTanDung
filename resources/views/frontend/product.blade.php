@extends('layouts.site')
@section('title','Sản phẩm')
@section('content')
<div class="div py-2 text-secondary bg-body-tertiary">
    <header1>
        <h2 style="text-indent: 90px;">Sản phẩm</h2>
    </header1>
</div>      
<div class="div">
    <header2> 
        <img src="{{ asset('images/collection_banner.webp') }}" alt="">
    </header2>
</div>   

<div class="containerd">
    <div class="carousel-inner">
        <div class="row">
            <div class="bc text-white py-4 "></div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-3" style="margin-left: 40px;">
            <ul class="list-group">
                <li class="list-group-item bg-dark text-white" ><i class="fa-solid fa-filter" style="margin-right: 10px;"></i>BỘ LỌC SẢN PHẨM</li>
                <strong><li class="list-group-item text-secondary bg-body-tertiary">Chọn mức giá</li></strong>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Dưới 2tr</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Từ 2tr đến 6tr</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Từ 6tr đến 15tr</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Từ 15tr đến 20tr</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Trên 20tr</li>
              </ul>
              <ul class="list-group">
                <strong><li class="list-group-item text-secondary bg-body-tertiary">Loại sản phẩm</li></strong>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Áo thể thao</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Quần thể thao</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Dụng cụ thể thao</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Giày thể thao</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>Giày Bata</li>
              </ul>
              <ul class="list-group">
                <strong><li class="list-group-item text-secondary bg-body-tertiary">Thương hiệu</li></strong>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>DOMYOS</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>GEOLOGIC</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>KALENJI</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>NEWFEEL</li>
                <li class="list-group-item"><i class="fa-regular fa-square" style="margin-right: 10px;"></i>PREFLY</li>
              </ul>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md border text-secondary bg-body-tertiary p-2 m-2 smd text-center">Chạy Bộ</div>
                <div class="col-md border text-secondary bg-body-tertiary p-2 m-2 smd text-center">Chạy Địa Hình</div>
                <div class="col-md border text-secondary bg-body-tertiary p-2 m-2 smd text-center">Đi Bộ</div>
                <div class="col-md border text-secondary bg-body-tertiary p-2 m-2 smd text-center">Triathlon</div>
                <div class="col-md-5 border text-secondary bg-body-tertiary p-2 m-2 smd text-end" ><i class="fa-solid fa-arrow-down-a-z" style="margin-right: 5px;"></i>Sắp xếp theo<i class="fa-solid fa-angle-down" style="margin-left: 5px;"></i></div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/p2155703.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Giày đi bộ nữ</h4>
                        <strong><p class="card-text text-danger">Giá: 425.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/p2569200.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Bộ bắn cung</h4>
                        <strong><p class="card-text text-danger">Giá: 550.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/p2155510.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Giày chạy bộ</h4>
                        <strong><p class="card-text text-danger">Giá: 1.175.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/p937759.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Bóng tập Gym</h4>
                        <strong><p class="card-text text-danger">Giá: 350.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                      </div>
                  </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border .linkcuatoi p-2 m-2 text-secondary bg-body-tertiary text-center"><h4>Hàng Đại Hạ Giá</h4></div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/p1811319.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Giày chạy bộ nữ</h4>
                        <strong><p class="card-text text-danger">Giá chỉ: 295.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center" style="margin-left: 20px;"><i class="fa-solid fa-money-bill-wave" style="margin-right: 7px;"></i>Mua ngay</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/image_cate_6.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Giày đá banh nam</h4>
                        <strong><p class="card-text text-danger">Giá chỉ: 355.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/image_cate_4.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Giày chạy bộ DOMYOS</h4>
                        <strong><p class="card-text text-danger">Giá chỉ: 495.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-sm-3"><div class="container mt-3">
                    <div class="card" style="width:200px">
                      <img class="card-img-top" src="{{ asset('images/p1640075.webp') }}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">Ba lo phong cách nữ</h4>
                        <strong><p class="card-text text-danger">Giá chỉ: 175.000đ</p></strong>
                        <a href="#" class="btn btn-primary text-center" style="margin-left: 20px;"><i class="fa-solid fa-money-bill-wave" style="margin-right: 7px;"></i>Mua ngay</a>
                      </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

