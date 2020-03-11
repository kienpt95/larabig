<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Metafield
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant
 */
interface Metafield
{
    const PREFIX = "metafields";
    const VERSION = "v3";
    /**
     * Get a list of product variant Metafields.
     * GET /catalog/products/{product_id}/variants/{variant_id}/metafields
     * @example $product_id = 112; $variant_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/getvariantmetafieldsbyproductidandvariantid
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function all($product_id, $variant_id);

    /**
     * Get a single product variant Metafield.
     * GET /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @example $product_id = 112; $variant_id = 12; $mtafield_id = 1;
     * @throws GuzzleException
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/getvariantmetafieldbyproductidandvariantid
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($product_id, $variant_id, $metafield_id);

    /**
     * Creates a product variant Metafield.
     * POST /catalog/products/{product_id}/variants/{variant_id}/metafields
     * @example $product_id = 112l $variant_id = 11; $data = [
                                                                "permission_set" => "app_only",
                                                                "namespace" => "App Namespace",
                                                                "key"=> "location_id",
                                                                "value"=> "Shelf 3, Bin 5",
                                                                "description"=> "Where products are locationed",
                                                                "resource_type"=> "variant",
                                                                "resource_id"=> 111
                                                                 ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/createvariantmetafield
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $variant_id, $data);

    /**
     * Updates a product variant Metafield.
     * PUT /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @example $product_id = 112l $variant_id = 11; $variant_id = 1; $data = [
                                                            "description"=> "where you write description",
                                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/updatevariantmetafield
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $variant_id, $metafield_id, $data);
    /**
     * Deletes a product variant Metafield.
     * DELETE /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @example $product_id = 112l $variant_id = 11; $variant_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($product_id, $variant_id, $metafield_id);
}
