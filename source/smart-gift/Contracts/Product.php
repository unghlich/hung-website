<?php
/**
 * Created by PhpStorm.
 * User: tienvm
 * Date: 12/24/15
 * Time: 10:53 AM
 */

namespace SmartGift\Contracts;


/**
 * Interface Product
 * @package SmartGift\Contracts
 */
interface Product
{
    /**
     * Get the product's id
     *
     * @return int
     */
    public function identity();

    /**
     * @return mixed
     */
    public function name();

    /**
     * @return mixed
     */
    public function price();

    /**
     * @return mixed
     */
    public function thumbnail();

    /**
     * @return mixed
     */
    public function images();

    /**
     * @return mixed
     */
    public function descriptionTitle();

    /**
     * @return mixed
     */
    public function descriptionContent();

    /**
     * @return mixed
     */
    public function categoryId();


}