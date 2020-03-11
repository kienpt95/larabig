<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Video
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface Video
{
    const PREFIX = "videos";
    const VERESION = "v3";
    /**
     * Get a list of Product Videos.
     * GET /catalog/products/{product_id}/videos
     * @example $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Returns a single Product Video.
     * GET /catalog/products/{product_id}/videos/{id}
     * @example $product_id = 112; $id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $id
     * @return mixed
     */
    public function get($product_id, $id);

    /**
     * Creates a Product Video.
     * POST /catalog/products/{product_id}/videos
     * @example $product_id = 112; $data = [
                                            "title" => "Your Video",
                                            "description" => "Company Values",
                                            "sort_order"=> 1,
                                            "type"=> "youtube",
                                            "video_id"=> "123345AA"
                                            ]
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a *Product Video.
     * PUT /catalog/products/{product_id}/videos/{id}
     * @example $product_id = 112; $id = 1; $data = [ "title" => "Test Video" ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @throws GuzzleException
     * @param $product_id
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $id, $data);

    /**
     * Deletes a Product Video.
     * DELETE /catalog/products/{product_id}/videos/{id}
     * @example $product_id = 112; $id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/deleteproductvideo
     * @throws GuzzleException
     * @param $product_id
     * @param $video_id
     * @return mixed
     */
    public function delete($product_id, $id);
}
