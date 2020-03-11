<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface BulkPricingRule
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant\
 */
interface BulkPricingRule
{
    const PREFIX = "bulk-pricing-rules";
    const VERSION = "v3";

    /**
     * Get a list of Bulk Pricing Rules
     * GET /catalog/products/{product_id}/bulk-pricing-rules
     * @example $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/getbulkpricingrules
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Creates a Bulk Pricing Rule.
     * POST /catalog/products/{product_id}/bulk-pricing-rules
     * @example  $product_id = 112; $data = [
                                            "quantity_min" => 600,
                                            "quantity_max" => 1000,
                                            "type" => "price",
                                            "amount" => 2
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/createbulkpricingrule
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Get a single Bulk Pricing Rule
     * GET /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @example $product_id = 112; $bulk_pridcing_id  = 11;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/getbulkpricingrulebyid
     * @throws GuzzleException
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @return mixed
     */
    public function get($product_id, $bulk_pricing_rule_id);

    /**
     * Updates a Bulk Pricing Rule.
     * PUT /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @example @product_id = 112; $bulk_pricing_rule_id = 11; $data = ["quantity_min" => 300];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/updatebulkpricingrule
     * @throws GuzzleException
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $bulk_pricing_rule_id, $data);

    /**
     * Deletes a Bulk Pricing Rule.
     * DELETE /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @example $product_id = 112; $bulk_pricing_rule_id = 11;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/deletebulkpricingrulebyid
     * @param $product_id
     * @param $bulk_pricing_rule_id
     */
    public function delete($product_id, $bulk_pricing_rule_id);
}
