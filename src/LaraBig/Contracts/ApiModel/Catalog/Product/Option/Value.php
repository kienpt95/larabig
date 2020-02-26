<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Option;


interface Value
{
    const PREFIX = "values";
    const VERSION = "v3";

    /**
     * Get a list of all Variant Option Values.
     * GET /catalog/products/{product_id}/options/{option_id}/values
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/getoptionvalues
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function all($product_id, $option_id);

    /**
     * Get a single Variant Option Value
     * GET /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/getoptionvaluebyid
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @return mixed
     */
    public function get($product_id, $option_id, $value_id);

    /**
     * Creates a Variant Option Value.
     * POST /catalog/products/{product_id}/options/{option_id}/values
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/createoptionvalue
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $option_id, $data);

    /**
     * Updates a Variant Option Value.
     * PUT /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/updateoptionvalue
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $option_id,$value_id, $data);

    /**
     * Deletes a Variant Option Value.
     * DELETE /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/deleteoptionvaluebyid
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @return mixed
     */
    public function delete($product_id, $option_id, $value_id);
}