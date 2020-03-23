<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Image
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface Image
{
    const PREFIX = "{product_id}/images";
    const VERSION = "v3";
    /**
     * GET a list of Product Images.
     * GET /catalog/products/{product_id}/images
     * @example  $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimages
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Image
     * GET /catalog/products/{product_id}/images/{image_id}
     * @example  $product_id = 112; $image_id = 376;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimagebyid
     * @throws GuzzleException
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function get($product_id, $image_id);

    /**
     * Creates a Product Image.
     * POST /catalog/products/{product_id}/images
     * @example $product_id = 112; $data = ["is_thumbnail" => true,
                                            "sort_order" => 1,
                                            "description" => "Top View",
                                            "image_url"=> "https://upload.wikimedia.org/wikipedia/commons/7/7f/Anglel_Bless_Legendary_Hills_1_m%C4%9Bs%C3%ADc_st%C3%A1%C5%99%C3%AD.jpg"];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/createproductimage
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Product Image
     * PUT /catalog/products/{product_id}/images/{image_id}
     * @example $product_id = 112; $image_id = 80; $data = ["is_thumbnail" => true,
                                                            "sort_order" => 1,
                                                            "description" => "Top View",
                                                            "image_url"=> "https://upload.wikimedia.org/wikipedia/commons/7/7f/Anglel_Bless_Legendary_Hills_1_m%C4%9Bs%C3%ADc_st%C3%A1%C5%99%C3%AD.jpg"];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/updateproductimage
     * @throws GuzzleException
     * @param $product_id
     * @param $image_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $image_id, $data);

    /**
     * Deletes a Product Image.
     * DELETE /catalog/products/{product_id}/images/{image_id}
     * @example $product_id = 112; $image_id = 80;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/deleteproductimage
     * @param $product_id
     * @param $image_id
     * @return mixed
     * @throws GuzzleException
     */
    public function delete($product_id, $image_id);
}
