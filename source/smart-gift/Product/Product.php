<?php

namespace SmartGift\Product;


use Illuminate\Database\Eloquent\Model;
use SmartGift\Contracts\Product as ProductInterface;
use SmartGift\Contracts\ProductRepository;
use SmartGift\Contracts\SEOSlug;

/**
 * Class Product
 * @property string name
 * @property Price price
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
 * @property mixed id
 */
class Product extends Model implements ProductInterface, ProductRepository, SEOSlug
{

    public function getSEOSlug()
    {
        return str_slug($this->name());
    }

    public function identity()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }

    public function price()
    {
        return new Price($this->price);
    }

    public function thumbnail()
    {
        return $this->thumbnail;
    }

    public function images()
    {
        $images = [];

        if ($this->image1)
        {
            array_push($images, $this->image1);
        }

        if ($this->image2)
        {
            array_push($images, $this->image2);
        }

        if ($this->image3)
        {
            array_push($images, $this->image3);
        }

        return $images;
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
        return $this->find($productId);
    }

    public function getAvgRate()
    {
        return round($this->ratePoints / $this->rateTimes);
    }

    public function renderRateStars()
    {
        return \View::make('partial.star', ['point' => $this->getAvgRate()]);
    }

    /**
     * @param $id
     * @return \SmartGift\Contracts\Product[]|void
     */
    public function findRelate($id, $cateId)
    {
        return $this->where('categoryId', $cateId)->where('id','<>',$id)->get();
    }
}
