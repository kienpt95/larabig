<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier\Value\Image;

/**
 * Interface Value
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier
 * @property Image image
 */
interface Value
{
    const PREFIX = "values";
    const VERSION = "v3";

    /**
     * Get a list of all product Modifier Values
     * GET /catalog/products/{product_id}/modifiers/{modifier_id}/values
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/getmodifiervalues
     * @param $product_id
     * @param $modifier_id
     * @return mixed
     */
    public function all($product_id, $modifier_id);

    /**
     * Get a single Modifier Value.
     * GET /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/getmodifiervaluebyid
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @return mixed
     */
    public function get($product_id, $modifier_id, $value_id);

    /**
     * Create a Modifier Value
     * POST /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/createmodifiervalue
     * @param $product_id
     * @param $modifier_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $modifier_id,$data);

    /**
     * Update a Modifier Value
     * PUT /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/updatemodifiervalue
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $modifier_id, $value_id, $data);

    /**
     * Delete modifier value
     * DELETE /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-values/deletemodifiervaluebyid
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @return mixed
     */
    public function delete($product_id, $modifier_id, $value_id);
}