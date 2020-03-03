<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

/**
 * Interface Metafield
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface Metafield
{
    const PREFIX = "metafields";
    const VERSION = "v3";

    /**
     * Get a list of Product Metafields.
     * GET /catalog/products/{product_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/getproductmetafieldsbyproductid
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Metafield
     * GET /catalog/products/{product_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/getproductmetafieldbyproductid
     * @param $product_id
     * @param $metafields_id
     * @return mixed
     */
    public function get($product_id, $metafields_id);

    /**
     * Creates a Product Metafield.
     * POST /catalog/products/{product_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/createproductmetafield
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Product Metafield
     * PUT /catalog/products/{product_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/updateproductmetafield
     * @param $product_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $metafield_id, $data);

    /**
     * Deletes a Product Metafield
     * DELETE /catalog/products/{product_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-metafields/deleteproductmetafieldbyid
     * @param $product_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($product_id, $metafield_id);
}
