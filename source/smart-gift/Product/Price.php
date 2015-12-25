<?php

namespace SmartGift\Product;

class Price
{

    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        if ($this->value < 0)
        {
            return 'Liên hệ';
        }
        else
        {
            return number_format($this->value, 0, '.', ' ');
        }
    }
}