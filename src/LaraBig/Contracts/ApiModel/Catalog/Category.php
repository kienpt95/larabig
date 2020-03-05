<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category\Image;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category\Metafield;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category\Tree;

/**
 * Interface Category
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog
 * @property Tree tree
 * @property Image image
 * @property Metafield metafield
 */
interface Category
{
    const PREFIX = "categories";
    const VERSION = "v3";

    /**
     * Get  a list of Categories
     * GET /catalog/categories
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategories
     * @return mixed
     */
    public function all();

    /**
     * Get a single Category.
     * GET /catalog/categories/{category_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategorybyid
     * @param $category_id
     * @return mixed
     */
    public function get($category_id);

    /**
     * Create a Category
     * POST /catalog/categories
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/createcategory
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Category.
     * PUT /catalog/categories/{category_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/updatecategory
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function update($category_id, $data);

    /**
     * Delete a category
     * DELETE /catalog/categories/{category_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/deletecategorybyid
     * @param $category_id
     * @return mixed
     */
    public function delete($category_id);
}
