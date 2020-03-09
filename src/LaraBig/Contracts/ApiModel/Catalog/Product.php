<?php

namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Metafield;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\CustomField;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Image;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\BulkPricingRule;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\ComplexRule;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Option;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Review;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Video;

/**
 * Interface Product
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog
 *
 * @property Image image
 * @property BulkPricingRule bulk_pricing_rule
 * @property ComplexRule complex_rule
 * @property CustomField custom_field
 * @property Metafield meta_field
 * @property Modifier modifier
 * @property Option option
 * @property Review review
 * @property Variant variant
 * @property Video video
 *
 */
interface Product
{
    const PREFIX = 'products';
    const VERSION = 'v3';

    /**
     * Get list of products
     * GET /catalog/products
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/getproducts
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Get a Product
     * GET /catalog/products/{product_id}
     * @exampe $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/getproductbyid
     * @throws GuzzleException
     * @param $product_id
     * return mixed
     */
    public function get($product_id);

    /**
     * Create a Product
     * POST /catalog/products
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/createproduct
     * @example $data = [
                        "name" => "Bread",
                        "type" => "physical",
                        "price" => 10.00,
                        "categories"=>[25],
                        "weight" => 4
                        ];
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a product
     * PUT /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/updateproduct
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     * @example $id = 112; $data = [ "name" => "Milk Tee" ];
     */
    public function update($product_id, $data);

    /**
     * Deletes a Product
     * DELETE /catalog/products/{product_id}
     * $product_id = 117;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/deleteproductbyid
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function delete($product_id);
}
