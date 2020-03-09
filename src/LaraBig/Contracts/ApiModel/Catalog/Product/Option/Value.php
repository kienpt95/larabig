<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Option;

use GuzzleHttp\Exception\GuzzleException;

interface Value
{
    const PREFIX = "values";
    const VERSION = "v3";

    /**
     * Get a list of all Variant Option Values.
     * GET /catalog/products/{product_id}/options/{option_id}/values
     * @example $product_id = 80; $option_id = 40;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/getoptionvalues
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function all($product_id, $option_id);

    /**
     * Get a single Variant Option Value
     * GET /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @example $product_id = 100; $option_id = 112; $value_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/getoptionvaluebyid\
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @return mixed
     */
    public function get($product_id, $option_id, $value_id);

    /**
     * Creates a Variant Option Value.
     * POST /catalog/products/{product_id}/options/{option_id}/values
     * @example $product_id = 80; $option_id = 10; $data = {
                                                            "is_default" => true,
                                                            "label" => "Colors",
                                                            "sort_order" => 2,
                                                            "value_data" => [
                                                            "colors"=> [
                                                            "#123c91, #FFFF00, #397a44"
                                                            ]
                                                            ]
                                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/createoptionvalue
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $option_id, $data);

    /**
     * Updates a Variant Option Value.
     * PUT /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @example $product_id = 80; $option_id = 10; $value_id = 2; $data = {
                                                            "is_default" => true,
                                                            "label" => "Colors",
                                                            "sort_order" => 2,
                                                            "value_data" => [
                                                            "colors"=> [
                                                            "#000000, #FFFFFF, #397a45"
                                                            ]
                                                            ]
                                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/updateoptionvalue
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $option_id, $value_id, $data);

    /**
     * Deletes a Variant Option Value.
     * DELETE /catalog/products/{product_id}/options/{option_id}/values/{value_id}
     * @example $product_id = 80; $option_id = 20; $value_id = 10;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-option-values/deleteoptionvaluebyid
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @param $value_id
     * @return mixed
     */
    public function delete($product_id, $option_id, $value_id);
}
