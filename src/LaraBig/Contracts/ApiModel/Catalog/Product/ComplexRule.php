<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;

interface ComplexRule
{
    const PREFIX = "complex-rules";
    const VERSION = "v3";

    /**
     * Get a list of all product Complex Rules
     * GET /catalog/products/{product_id}/complex-rules
     * @example  $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/getcomplexrules
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Metafield.
     * GET /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @example $product_id = 112; $complex_rule_id = 82;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/getcomplexrulebyid
     * @param $product_id
     * @param $complex_rule_id
     * @return  mixed
     */
    public function get($product_id, $complex_rule_id);

    /**
     * Creates a product Complex Rule
     * POST /catalog/products/{product_id}/complex-rules
     * @example $product_id = 112; $data = [ "product_id" => 77,
                                            "sort_order" => 0,
                                            "enabled" => true,
                                            "stop" => false,
                                            "purchasing_disabled" => false,
                                            "purchasing_hidden" => false,
                                            "price_adjuster" => [
                                            "adjuster" => "relative",
                                            "adjuster_value" => 6
                                            ],
                                            "weight_adjuster" => [
                                            "adjuster" => "relative",
                                            "adjuster_value" => 6
                                            ],
                                            "conditions": [
                                            [
                                            "id" => 5,
                                            "rule_id" => 5,
                                            "modifier_id" => 123,
                                            "modifier_value_id" => 104
                                            ]
                                            ]];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/createcomplexrule
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return  mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a product Complex Rule.
     * PUT /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @example $product_id = 112; $complex_rule_id = 82; $data = ["weight_adjuster" => [
                                                                                        "adjuster" => "relative",
                                                                                        "adjuster_value" => 6
                                                                                        ]];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/updatecomplexrule
     * @throws GuzzleException
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $complex_rule_id, $data);

    /**
     * Deletes a product Complex Rule.
     * DELETE /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @example $product_id = 112; $complex_rule_id = 82;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/deletecomplexrulebyid
     * @param $product_id
     * @param $complex_rule_id
     * return mixed
     */
    public function delete($product_id, $complex_rule_id);
}
