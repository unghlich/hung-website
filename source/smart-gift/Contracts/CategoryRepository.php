<?php

namespace SmartGift\Contracts;

interface CategoryRepository
{
    /**
     * @return Category[]
     */
    public function getAll();

    public function getById($id);
}