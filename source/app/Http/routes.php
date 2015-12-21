<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use SmartGift\Product\Product;

Route::get('/', function () {
    return view('home',[
        'categories'=>[
            ['name'=> 'Biểu Trưng Pha Lê','description' => 'Biểu Trưng Pha Lê'],
            ['name'=> 'Biểu-Trưng-đồng','description' => 'Biểu-Trưng-đồng'],
            ['name'=> 'Cúp-Pha-Lê','description' => 'Cúp-Pha-Lê'],
            ['name'=> 'Cốc','description' => 'Cốc'],
            ['name'=> 'Cốc-In-Ảnh','description' => 'Cốc-In-Ảnh'],
            ['name'=> 'Cốc-Thủy-Tinh','description' => 'Cốc-Thuỷ-Tinh'],
            ['name'=> 'In-Đĩa','description' => 'In-Đĩa'],
            ['name'=> 'In-Ảnh-Lên-Pha-Lê','description' => 'In-Ảnh-Lên-Pha-Lê'],
            ['name'=> 'Móc-Khóa','description' => 'Móc-Khóa'],
            ['name'=> 'Thẻ-Tên-Huy-Hiệu-Đồng','description' => 'Thẻ-Tên-Huy-Hiệu-Đồng'],
        ]]);
});
Route::get('/product', function (Product $product) {

    return view('product',['productList' => $product->all()]);
});
Route::get('/product/{id}', function (Product $product, $id) {
    return view('product-detail',['product'=> $product->all()[$id]]);
});