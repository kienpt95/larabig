<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Image
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category
 */
interface Image
{

    /**
     * Create a Category Image.
     * POST /catalog/categories/{category_id}/image
     * @example $category_id = 1; $data = [
                                            "data"=> [
                                            "image_url"=> "https://cdn11.bigcommerce.com/s-{store_hash}/product_images/k/group_1545334669__76009.png"
                                            ],
                                            "meta": []
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-images/createcategoryimage
     * @throws GuzzleException
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function create($category_id, $data);

    /**
     * Deletes a Cateogory Image.
     * DELETE /catalog/categories/{category_id}/image
     * @example $category_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-images/deletecategoryimage
     * @throws GuzzleException
     * @param $category_id
     * @return mixed
     */
    public function delete($category_id);
}
