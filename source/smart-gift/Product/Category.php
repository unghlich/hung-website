<?php

namespace SmartGift\Product;


use Illuminate\Database\Eloquent\Model;
use SmartGift\Contracts\Category as CategoryInterface;
use SmartGift\Contracts\CategoryRepository;
use SmartGift\Contracts\SEOSlug;

/**
 * @property string name
 * @property string image
 * @property string description
 * @property int id
 */
class Category extends Model implements CategoryRepository, CategoryInterface, SEOSlug
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection
     */
    protected $cachedAllCategories = null;

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function image()
    {
        return $this->image;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        if ( ! $this->cachedAllCategories)
        {
            $this->cachedAllCategories = static::all();
        }

        return $this->cachedAllCategories;
    }

    /**
     * @return int
     */
    public function identity()
    {
        return $this->id;
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    /**
     * Get the category slug name
     *
     * @return string
     */
    public function getSEOSlug()
    {
        return str_slug($this->name());
    }
}
