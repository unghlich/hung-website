<?php
/**
 * Created by PhpStorm.
 * User: tienvm
 * Date: 12/24/15
 * Time: 10:53 AM
 */

namespace SmartGift\Contracts;


interface Product
{
    public function name();
    public function price();
    public function thumbnai();
    public function image1();
    public function image2();
    public function image3();
    public function descriptionTitle();
    public function descriptionContent();
    public function categoryId();

}