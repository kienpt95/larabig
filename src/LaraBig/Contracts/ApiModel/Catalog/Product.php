<?php

namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

interface Product
{
    const PREFIX = 'products';
    const VERSION = 'v3';

    public function all();

    public function get($id);

    public function create($data);

    public function update($id, $data);

    public function delete($id);

    /**
     * @param $product_id
     * @return a list of Bulk Pricing Rules
     */
    public function  getAllBulkPricingRules($product_id);

    /**
     * @param $product_id
     * @param $data
     * @Creates a Bulk Pricing Rule.
     */
    public function createBulkPricingRule($product_id, $data);

    /**
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @return a single Bulk Pricing Rule
     */
    public function getBulkPricingRule($product_id, $bulk_pricing_rule_id);

    /**
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @param $data
     * @Updates a Bulk Pricing Rule.
     */
    public function updateBulkPricingRule($product_id, $bulk_pricing_rule_id, $data);

    /**
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @Deletes a Bulk Pricing Rule.
     */
    public function deleteBulkPricingRule($product_id, $bulk_pricing_rule_id);

    /**
     * @param $product_id
     * @Returns a list of all product Complex Rules
     */
    public function getComplexRules($product_id);

    /**
     * @param $product_id
     * @param $complex_rule_id
     * @Returns a single Product Metafield. Optional parameters can be passed in.
     */
    public function getAComplexRule($product_id, $complex_rule_id);

    /**
     * @param $product_id
     * @param $data
     * @Creates a product Complex Rule
     */
    public function  createComplexRule($product_id, $data);

    /**
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @Updates a product Complex Rule.
     */
    public function updateComplexRule($product_id, $complex_rule_id , $data);

    /**
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @Deletes a product Complex Rule.
     */
    public function DeleteComplexRule($product_id, $complex_rule_id , $data);

    /**
     * @param $product_id
     * @Returns a list of product Custom Fields. Optional parameters can be passed in.
     */
    public function getCustomFields($product_id);

    /**
     * @param $product_id
     * @param $custom_field_id
     * @Returns a single Custom Field. Optional parameters can be passed in.
     */
    public function getACustomField($product_id, $custom_field_id);

    /**
     * @param $product_id
     * @Creates a Custom Field
     */
    public function createCustomField($product_id, $data);

    /**
     * @param $product_id
     * @param $custom_field_id
     * @param $data
     * @Updates a Custom Field
     */
    public function updateCustomField($product_id, $custom_field_id, $data);

    /**
     * @param $product_id
     * @param $custom_field_id
     * @Deletes a product Custom Field
     */
    public function deleteCustomField($product_id, $custom_field_id);

    /**
     * @param $product_id
     * @Returns a list of Product Images. Optional parameters can be passed in.
     */
    public function getAllProductImages($product_id);

    /**
     * @param $product_id
     * @param $image_id
     * @Returns a single Product Image
     */
    public function getProductImage($product_id, $image_id);

    /**
     * @param $product_id
     * @param $data
     * @Creates a Product Image.
     */
    public function createProductImage($product_id, $data);
}
