<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

/**
 * Interface CustomField
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface CustomField
{
    const PREFIX = "custom-fields";
    const VERSION = "v3";

    /**
     * Get a list of product Custom Fields.
     * GET /catalog/products/{product_id}/custom-fields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/getcustomfields
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Custom Field.
     * GET /catalog/products/{product_id}/custom-fields/{custom_field_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/getcustomfieldbyid
     * @param $product_id
     * @param $custom_field_id
     * @return mixed
     */
    public function get($product_id, $custom_field_id);

    /**
     * Creates a Custom Field
     * POST /catalog/products/{product_id}/custom-fields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/createcustomfield
     * @param $product_id
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Custom Field
     * PUT /catalog/products/{product_id}/custom-fields/{custom_field_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/updatecustomfield
     * @param $product_id
     * @param $custom_field_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $custom_field_id, $data);

    /**
     * Deletes a product Custom Field
     * DELETE /catalog/products/{product_id}/custom-fields/{custom_field_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-custom-fields/deletecustomfieldbyid
     * @param $product_id
     * @param $custom_field_id
     * @return mixed
     */
    public function delete($product_id, $custom_field_id);
}
