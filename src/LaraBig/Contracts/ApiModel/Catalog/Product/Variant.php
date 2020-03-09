<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant\Metafield;

/**
 * Interface Variant
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 * @property Metafield metafield
 */
interface Variant
{
    const PREFIX = "variants";
    const VERSION = "v3";
    /**
     * Returns a list of product Variants
     * GET /catalog/products/{product_id}/variants
     * @example $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/getvariantsbyproductid
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single product Variant
     * GET /catalog/products/{product_id}/variants/{variant_id}
     * @example $product_id = 112; $variant_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/getvariantsbyproductid
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function get($product_id, $variant_id);

    /**
     * Creates a Product Variant.
     * POST /catalog/products/{product_id}/variants
     * @example $product_id = 112; $data = [
                                            "title" => "Great Product",
                                            "text" => "This product is amazing!!!",
                                            "status" => "approved",
                                            "rating" => 5,
                                            "email" => "janedoe@email.com",
                                            "name" => "Jane Doe",
                                            "date_reviewed" => "2018-05-07T19:37:13+00:00"
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/getvariantsbyproductid
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a product Variant.
     * PUT /catalog/products/{product_id}/variants/{variant_id}
     * @example $product_id = 112;$variant_id = 1; $data = [
                                            "email" => "admin@email.com"
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/updatevariant
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $variant_id, $data);

    /**
     * Deletes a product Variant.
     * DELETE /catalog/products/{product_id}/variants/{variant_id}
     * @example $product_id = 112;$variant_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/deletevariantbyid
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function delete($product_id, $variant_id);
}
