<?php

namespace SmartGift\Product;


use Illuminate\Database\Eloquent\Model;
use SmartGift\Contracts\Product as ProductInterface;
use SmartGift\Contracts\ProductRepository;

/**
 * Class Product
 * @property string name
 * @property float price
 * @package SmartGift\Product
 * @property string thumbnail
 * @property  string image1
 * @property  string image2
 * @property  string image3
 * @property  string descriptionTitle
 * @property  string descriptionContent
 * @property  string categoryId
 * @property int rateTimes
 * @property int ratePoints
 */
class Product extends Model implements ProductInterface, ProductRepository
{

    public function name()
    {
        return $this->name;
    }

    public function price()
    {
        return $this->price;
    }

    public function thumbnai()
    {
        return $this->thumbnail;
    }

    public function image1()
    {
        return $this->image1;
    }

    public function image2()
    {
        return $this->image2;
    }

    public function image3()
    {
        return $this->image3;
    }

    public function descriptionTitle()
    {
        return $this->descriptionTitle;
    }

    public function descriptionContent()
    {
        return $this->descriptionContent;
    }

    public function categoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param $categoryId
     * @return mixed
     */
    public function getByCategoryId($categoryId)
    {
        return $this->where('categoryId', $categoryId);
    }

    /**
     * @param $productId
     * @return ProductInterface
     */
    public function findById($productId)
    {
        // TODO: Implement findById() method.
    }

    public function getAvgRate()
    {
        return round($this->ratePoints / $this->rateTimes);
    }

    public function renderRateStars()
    {
        return \View::make('partial.star', ['point' => $this->getAvgRate()]);
    }
}
