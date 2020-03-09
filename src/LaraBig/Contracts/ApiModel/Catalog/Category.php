<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

use GuzzleHttp\Exception\GuzzleException;
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
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Get a single Category.
     * GET /catalog/categories/{category_id}
     * @example $category_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategorybyid
     * @throws GuzzleException
     * @param $category_id
     * @return mixed
     */
    public function get($category_id);

    /**
     * Create a Category
     * POST /catalog/categories
     * @example $data = [
                            "name" => "Bath",
                            "description" => "<p>We offer a wide variety of products perfect for relaxing</p>",
                            "views" => 1050,
                            "sort_order" => 3,
                            "meta_keywords" => [],
                            "layout_file" => "category.html",
                            "is_visible" => true,
                            "default_product_sort" => "use_store_settings",
                            "image_url" => "https://cdn8.bigcommerce.com/s-123456/product_images/d/fakeimage.png",
                            "custom_url" => [
                            "url" => "/bath/",
                            "is_customized" => false
                            ]
                        ]
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/createcategory
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Category.
     * PUT /catalog/categories/{category_id}
     * @example $category_id = 3; $data = [
                                            "name" => "Bath",
                                            "description" => "<p>We offer a wide variety of products perfect for relaxing</p>",
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/updatecategory
     * @throws GuzzleException
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function update($category_id, $data);

    /**
     * Delete a category
     * DELETE /catalog/categories/{category_id}
     * @example category_id = 4;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/deletecategorybyid
     * @throws GuzzleException
     * @param $category_id
     * @return mixed
     */
    public function delete($category_id);
}
