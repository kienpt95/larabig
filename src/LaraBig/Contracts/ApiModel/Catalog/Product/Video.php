<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;


interface Video
{
    /**
     * Get a list of Product Videos.
     * GET /catalog/products/{product_id}/videos
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-variants-metafields/deletevariantmetafieldbyid
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Returns a single Product Video.
     * GET /catalog/products/{product_id}/videos/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $id
     * @return mixed
     */
    public function get($product_id, $id);

    /**
     * Creates a Product Video.
     * POST /catalog/products/{product_id}/videos
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a *Product Video.
     * PUT /catalog/products/{product_id}/videos/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/getproductvideobyid
     * @param $product_id
     * @param $video_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $video_id, $data);

    /**
     * Deletes a Product Video.
     * DELETE /catalog/products/{product_id}/videos/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-videos/deleteproductvideo
     * @param $product_id
     * @param $video_id
     * @return mixed
     */
    public function delete($product_id, $video_id);
}
