<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category;

/**
 * Interface Image
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category
 */
interface Image
{

    /**
     * Create a Category Image.
     * POST /catalog/categories/{category_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-images/createcategoryimage
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function create($category_id, $data);

    /**
     * Deletes a Cateogory Image.
     * DELETE /catalog/categories/{category_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-images/deletecategoryimage
     * @param $category_id
     * @return mixed
     */
    public function delete($category_id);
}
