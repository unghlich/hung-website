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

use SmartGift\Contracts\CategoryRepository;
use SmartGift\Contracts\ProductRepository;
use SmartGift\Product\Product;

Route::get('/', function (CategoryRepository $category)
{
    return view('home')->with('categories', $category->getAll());
})->name('home');

Route::get('/{cateId}/{slug}', function (CategoryRepository $category, ProductRepository $product, $cateId)
{
//    dd($product->getByCategoryId($cateId));
    return view('product',[
        'productList' => $product->getByCategoryId($cateId)->paginate(15),
        'category' => $category->getById($cateId)
    ]);
})->name('category-detail');

Route::get('/san-pham/{id}/{slug}', function (Product $product, $id)
{
    $productDetail = $product->findById($id);
    return view('product-detail',
        [
            'product'=> $productDetail,
            'relatedProduct'=> $product->findRelate($id,$productDetail->categoryId())
        ]);
})->name('product-detail');
