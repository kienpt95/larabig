<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

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
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/getbulkpricingrules
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Creates a Bulk Pricing Rule.
     * POST /catalog/products/{product_id}/bulk-pricing-rules
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/createbulkpricingrule
     * @param $product_id
     * @param
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Get a single Bulk Pricing Rule
     * GET /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/getbulkpricingrulebyid
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @return mixed
     */
    public function get($product_id, $bulk_pricing_rule_id);

    /**
     * Updates a Bulk Pricing Rule.
     * PUT /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/updatebulkpricingrule
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $bulk_pricing_rule_id, $data);

    /**
     * Deletes a Bulk Pricing Rule.
     * DELETE /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-bulk-pricing-rules/deletebulkpricingrulebyid
     * @param $product_id
     * @param $bulk_pricing_rule_id
     */
    public function delete($product_id, $bulk_pricing_rule_id);
}
