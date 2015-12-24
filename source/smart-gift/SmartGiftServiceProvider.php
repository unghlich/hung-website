<?php

namespace SmartGift;

use Illuminate\Support\ServiceProvider;
use SmartGift\Contracts\CategoryRepository;
use SmartGift\Contracts\ProductRepository;
use SmartGift\Product\Category;
use SmartGift\Product\Product;

class SmartGiftServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CategoryRepository::class, Category::class);
        $this->app->singleton(ProductRepository::class, Product::class);
    }
}