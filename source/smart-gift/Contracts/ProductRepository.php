<?php

namespace SmartGift\Contracts;


interface ProductRepository
{
    /**
     * @return mixed
     */
    public function getByCategoryId($categoryId);

    /**
     * @return Product
     */
    public function findById($productId);

}