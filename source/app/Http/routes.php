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
    return view('home');
});
Route::get('/product', function (Product $product) {

    return view('product',['productList' => $product->all()]);
});
Route::get('/product/{id}', function (Product $product, $id) {
    return view('product-detail',['product'=> $product->all()[$id]]);
});