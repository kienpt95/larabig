<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier\Value;

/**
 * Interface Modifier
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 * @property Value value
 */
interface Modifier
{
    const PREFIX = "modifiers";
    const VERSION = "v3";

    /**
     * Get a list of all Product Modifiers.
     * GET /catalog/products/{product_id}/modifiers
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/getmodifiers
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Modifier.
     * GET /catalog/products/{product_id}/modifiers/{modifier_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/getmodifierbyid
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function get($product_id, $modifier_id);

    /**
     * Create a Product Modifier;
     * POST /catalog/products/{product_id}/modifiers
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/createmodifier
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Update Modifiers
     * PUT /catalog/products/{product_id}/modifiers/{modifier_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/updatemodifier
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function update($product_id, $modifier_id, $data);

    /**
     * Delete Modifier
     * DELETE /catalog/products/{product_id}/modifiers/{modifier_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifiers/deletemodifierbyid
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function delete($product_id, $modifier_id);
}