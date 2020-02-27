<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

/**
 * Interface Image
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface Image
{
    const PREFIX = "images";
    const VERSION = "v3";
    /**
     * GET a list of Product Images.
     * GET /catalog/products/{product_id}/images
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimages
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Image
     * GET /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimagebyid
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function get($product_id, $image_id);

    /**
     * Creates a Product Image.
     * POST /catalog/products/{product_id}/images
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/createproductimage
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Product Image
     * PUT /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/updateproductimage
     * @param $product_id
     * @param $image_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $image_id, $data);

    /**
     * Deletes a Product Image.
     * DELETE /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/deleteproductimage
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function delete($product_id, $image_id);
}