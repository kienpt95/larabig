<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant;

/**
 * Interface Metafield
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant
 */
interface Metafield
{
    const PREFIX = "metafields";
    const VERSION = "v3";
    /**
     * Get a list of product variant Metafields.
     * GET /catalog/products/{product_id}/variants/{variant_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/getvariantmetafieldsbyproductidandvariantid
     * @param $product_id
     * @param $variant_id
     * @return mixed
     */
    public function all($product_id, $variant_id);

    /**
     * Get a single product variant Metafield.
     * GET /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/getvariantmetafieldbyproductidandvariantid
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($product_id, $variant_id, $metafield_id);

    /**
     * Creates a product variant Metafield.
     * POST /catalog/products/{product_id}/variants/{variant_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/createvariantmetafield
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $variant_id, $data);

    /**
     * Updates a product variant Metafield.
     * PUT /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/updatevariantmetafield
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $variant_id, $metafield_id, $data);
    /**
     * Deletes a product variant Metafield.
     * DELETE /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @param $product_id
     * @param $variant_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($product_id, $variant_id, $metafield_id);
}
