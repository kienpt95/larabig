<?php

namespace Smartosc\LaraBig\Model\Api\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\a;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Product extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
{
    protected $resource = 'products';

    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
        // TODO: Implement all() method.
    }

    public function get($id)
    {
        $resource = $this->getResource() . '/' . $id;
        $result = $this->service()->call('GET', $resource);
        return $result;
    }

    public function create($data)
    {
        $resource = $this->getResource();
        $result = $this->service()->call('GET', $resource, $data);
        return $result;
    }

    public function update($id, $data)
    {
        $resource = $this->getResource() . '/' . $id;
        $result = $this->service()->call('GET', $resource, $data);
        return $result;
    }

    public function delete($id)
    {
        $resource = $this->getResource() . '/' . $id;
        $result = $this->service()->call('DELETE', $resource);
        return $result;
    }

    /**
     * @param $product_id
     * @return a list of Bulk Pricing Rules
     */
    public function getAllBulkPricingRules($product_id)
    {
        // TODO: Implement getAllBulkPricingRules() method.
    }

    /**
     * @param $product_id
     * @param $data
     * @Creates a Bulk Pricing Rule.
     */
    public function createBulkPricingRule($product_id, $data)
    {
        // TODO: Implement createBulkPricingRule() method.
    }

    /**
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @return a single Bulk Pricing Rule
     */
    public function getBulkPricingRule($product_id, $bulk_pricing_rule_id)
    {
        // TODO: Implement getBulkPricingRule() method.
    }

    /**
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @param $data
     * @Updates a Bulk Pricing Rule.
     */
    public function updateBulkPricingRule($product_id, $bulk_pricing_rule_id, $data)
    {
        // TODO: Implement updateBulkPricingRule() method.
    }

    /**
     * @param $product_id
     * @param $bulk_pricing_rule_id
     * @Deletes a Bulk Pricing Rule.
     */
    public function deleteBulkPricingRule($product_id, $bulk_pricing_rule_id)
    {
        // TODO: Implement deleteBulkPricingRule() method.
    }

    /**
     * @param $product_id
     * @Returns a list of all product Complex Rules
     */
    public function getComplexRules($product_id)
    {
        // TODO: Implement getComplexRules() method.
    }

    /**
     * @param $product_id
     * @param $complex_rule_id
     * @Returns a single Product Metafield. Optional parameters can be passed in.
     */
    public function getAComplexRule($product_id, $complex_rule_id)
    {
        // TODO: Implement getAComplexRule() method.
    }

    /**
     * @param $product_id
     * @param $data
     * @Creates a product Complex Rule
     */
    public function createComplexRule($product_id, $data)
    {
        // TODO: Implement createComplexRule() method.
    }

    /**
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @Updates a product Complex Rule.
     */
    public function updateComplexRule($product_id, $complex_rule_id, $data)
    {
        // TODO: Implement updateComplexRule() method.
    }

    /**
     * @param $product_id
     * @param $complex_rule_id
     * @param $data
     * @Deletes a product Complex Rule.
     */
    public function DeleteComplexRule($product_id, $complex_rule_id, $data)
    {
        // TODO: Implement DeleteComplexRule() method.
    }

    /**
     * @param $product_id
     * @Returns a list of product Custom Fields. Optional parameters can be passed in.
     */
    public function getCustomFields($product_id)
    {
        // TODO: Implement getCustomFields() method.
    }

    /**
     * @param $product_id
     * @param $custom_field_id
     * @Returns a single Custom Field. Optional parameters can be passed in.
     */
    public function getACustomField($product_id, $custom_field_id)
    {
        // TODO: Implement getACustomField() method.
    }

    /**
     * @param $product_id
     * @Creates a Custom Field
     */
    public function createCustomField($product_id, $data)
    {
        // TODO: Implement createCustomField() method.
    }

    /**
     * @param $product_id
     * @param $custom_field_id
     * @param $data
     * @Updates a Custom Field
     */
    public function updateCustomField($product_id, $custom_field_id, $data)
    {
        // TODO: Implement updateCustomField() method.
    }

    /**
     * @param $product_id
     * @param $custom_field_id
     * @Deletes a product Custom Field
     */
    public function deleteCustomField($product_id, $custom_field_id)
    {
        // TODO: Implement deleteCustomField() method.
    }

    /**
     * @param $product_id
     * @Returns a list of Product Images. Optional parameters can be passed in.
     */
    public function getAllProductImages($product_id)
    {
        // TODO: Implement getAllProductImages() method.
    }

    /**
     * @param $product_id
     * @param $image_id
     * @Returns a single Product Image
     */
    public function getProductImage($product_id, $image_id)
    {
        // TODO: Implement getProductImage() method.
    }

    /**
     * @param $product_id
     * @param $data
     * @Creates a Product Image.
     */
    public function createProductImage($product_id, $data)
    {
        // TODO: Implement createProductImage() method.
    }
}
