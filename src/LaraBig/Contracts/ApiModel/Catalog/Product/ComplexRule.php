<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;


interface ComplexRule
{
    const PREFIX = "complex-rules";
    const VERSION = "v3";

    /**
     * Get a list of all product Complex Rules
     * GET /catalog/products/{product_id}/complex-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/getcomplexrules
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Metafield.
     * GET /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/getcomplexrulebyid
     * @param $product_id
     * @param $complex_rule_id
     * @return  mixed
     */
    public function get($product_id, $complex_rule_id);

    /**
     * Creates a product Complex Rule
     * POST /catalog/products/{product_id}/complex-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/createcomplexrule
     * @param $product_id
     * @param $data
     * @return  mixed
     */
    public function  create($product_id, $data);

    /**
     * Updates a product Complex Rule.
     * PUT /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/updatecomplexrule
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $complex_rule_id , $data);

    /**
     * Deletes a product Complex Rule.
     * DELETE /catalog/products/{product_id}/complex-rules/{complex_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-complex-rules/deletecomplexrulebyid
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * return mixed
     */
    public function delete($product_id, $complex_rule_id , $data);
}