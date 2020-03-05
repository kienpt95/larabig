<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant;

/**
 * Interface Image
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant
 */
interface Image
{
    const PREFIX = "image";
    const VERSION = "v3";

    /**
     * Creates a Variant Image.
     * POST /catalog/products/{product_id}/variants/{variant_id}/image
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/createvariantimage
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $variant_id, $data);
}
