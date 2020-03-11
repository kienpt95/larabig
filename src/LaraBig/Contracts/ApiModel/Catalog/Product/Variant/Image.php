<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant;

use GuzzleHttp\Exception\GuzzleException;

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
     * @example $product_id =  112; $variant_id = 1; $data = [
                                                                "image_url": "https://upload.wikimedia.org/wikipedia/commons/7/7f/Anglel_Bless_Legendary_Hills_1_m%C4%9Bs%C3%ADc_st%C3%A1%C5%99%C3%AD.jpg"
                                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants/createvariantimage
     * @throws GuzzleException
     * @param $product_id
     * @param $variant_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $variant_id, $data);
}
