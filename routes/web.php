<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']); //Trang chủ
Route::get('/san-pham',[ProductController::class,'index']); //Tất cả sản phẩm
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail']); //Chi tiết sản phẩm
Route::get('/lien-he',[ContactController::class,'index']); //Liên hệ


