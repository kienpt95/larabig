<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier\Value;

interface Image
{
    const PREFIX = "image";
    const VERSION = "v3";
    /**
     * Creates a Modifier Image.
     * POST /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-images/createmodifierimage
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $modifier_id, $value_id, $data);

    /**
     * Deletes a Modifier Image.
     * DELETE /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-modifier-images/deletemodifierimage
     * @param $product_id
     * @param $modifier_id
     * @param $value_id
     * @return mixed
     */
    public function delete($product_id, $modifier_id, $value_id);
}
