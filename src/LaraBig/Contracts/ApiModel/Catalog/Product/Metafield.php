<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Metafield
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface Metafield
{
    const PREFIX = "metafields";
    const VERSION = "v3";

    /**
     * Get a list of Product Metafields.
     * GET /catalog/products/{product_id}/metafields
     * @example $product_id = 80;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/getproductmetafieldsbyproductid
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Metafield
     * GET /catalog/products/{product_id}/metafields/{metafield_id}
     * @example $product_id = 80; $metafield_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/getproductmetafieldbyproductid
     * @throws GuzzleException
     * @param $product_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($product_id, $metafield_id);

    /**
     * Creates a Product Metafield.
     * POST /catalog/products/{product_id}/metafields
     * @example $product_id = 80; $data = [
                                            "permission_set" => "app_only",
                                            "namespace"=> "TEST Namespace",
                                            "key"=> "location_id",
                                            "value"=> "Shelf 3, Bin 5, UPDATE 234",
                                            "description"=> "Where products are located"
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/createproductmetafield
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Product Metafield
     * PUT /catalog/products/{product_id}/metafields/{metafield_id}
     * * @example $product_id = 80;, $metafield_id = 1; $data = [
                                                                "permission_set" => "app_only",
                                                                "namespace"=> "TEST Namespace",
                                                                "key"=> "location_id",
                                                                "value"=> "Shelf 3, UPDATE 234",
                                                                "description"=> "Where products are located"
                                                                ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/updateproductmetafield
     * @throws GuzzleException
     * @param $product_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $metafield_id, $data);

    /**
     * Deletes a Product Metafield
     * DELETE /catalog/products/{product_id}/metafields/{metafield_id}
     * @example $product_id = 80; $metafield_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/deleteproductmetafieldbyid
     * @throws GuzzleException
     * @param $product_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($product_id, $metafield_id);
}
