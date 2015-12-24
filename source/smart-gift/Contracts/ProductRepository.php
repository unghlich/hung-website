<?php

namespace SmartGift\Contracts;


interface ProductRepository
{
    /**
     *
     * @param $categoryId
     * @return mixed
     */
    public function getByCategoryId($categoryId);

    /**
     *
     * @param $productId
     * @return Product
     */
    public function findById($productId);

    /**
     * @param $id
     * @param $cateId
     * @return Product[]
     */
    public function findRelate($id, $cateId);
}