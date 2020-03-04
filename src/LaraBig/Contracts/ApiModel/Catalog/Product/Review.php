<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

/**
 * Interface Review
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 */
interface Review
{
    const PREFIX = "reviews";
    const VERSION = "v3";

    /**
     * Get a list of all Product Reviews
     * GET /catalog/products/{product_id}/reviews
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/getproductreviews
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Review.
     * GET /catalog/products/{product_id}/reviews/{review_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/getproductreviewbyid
     * @param $product_id
     * @param $review_id
     * @return mixed
     */
    public function get($product_id, $review_id);

    /**
     * Creates a Product Review.
     * POST /catalog/products/{product_id}/reviews
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/createproductreview
     * @param $product_id
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Product Review.
     * PUT /catalog/products/{product_id}/reviews/{review_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/updateproductreview
     * @param $product_id
     * @param $review_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $review_id, $data);

    /**
     * Deletes a Product Review
     * DELETE /catalog/products/{product_id}/reviews/{review_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/deleteproductreview
     * @param $product_id
     * @param $review_id
     * @return mixed
     */
    public function delete($product_id, $review_id);
}