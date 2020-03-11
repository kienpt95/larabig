<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;

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
     * @example $product_id = 112;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/getproductreviews
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Product Review.
     * GET /catalog/products/{product_id}/reviews/{review_id}
     * @example $product_id = 112; $review_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/getproductreviewbyid
     * @throws GuzzleException
     * @param $product_id
     * @param $review_id
     * @return mixed
     */
    public function get($product_id, $review_id);

    /**
     * Creates a Product Review.
     * POST /catalog/products/{product_id}/reviews
     * @example $product_id = 112; $data = [
                                            "title" => "Great Product",
                                            "text"=> "This product is amazing!!!",
                                            "status"=> "approved",
                                            "rating"=> 5,
                                            "email"=> "janedoe@email.com",
                                            "name"=> "Jane Doe",
                                            "date_reviewed"=> "2018-05-07T19:37:13+00:00"
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/createproductreview
     * @throws GuzzleException
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Product Review.
     * PUT /catalog/products/{product_id}/reviews/{review_id}
     * @example $product_id = 112; $review_id = 1; $data = [
                                            "email"=> "lindan@email.com",
                                            "name"=> "LinDan"
                                            ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/updateproductreview
     * @throws GuzzleException
     * @param $product_id
     * @param $review_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $review_id, $data);

    /**
     * Deletes a Product Review
     * DELETE /catalog/products/{product_id}/reviews/{review_id}
     * @example $product_id = 112; $review_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-reviews/deleteproductreview
     * @throws GuzzleException
     * @param $product_id
     * @param $review_id
     * @return mixed
     */
    public function delete($product_id, $review_id);
}
