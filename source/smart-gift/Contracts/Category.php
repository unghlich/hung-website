<?php

namespace SmartGift\Contracts;

interface Category
{
    public function name();

    public function description();

    public function image();

    public function identity();
}