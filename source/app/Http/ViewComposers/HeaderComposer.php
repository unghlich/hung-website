<?php

namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;
use SmartGift\Contracts\CategoryRepository;

class HeaderComposer
{
    /**
     *
     * @var CategoryRepository
     */
    protected $category;

    /**
     * Create a new HeaderComposer.
     *
     * @param CategoryRepository $category
     */
    public function __construct(CategoryRepository $category)
    {
        // Dependencies automatically resolved by service container...
        $this->category = $category;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->category->getAll());
    }

}