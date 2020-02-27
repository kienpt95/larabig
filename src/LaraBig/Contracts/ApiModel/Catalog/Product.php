<?php

namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

interface Product
{
    const PREFIX = 'products';
    const VERSION = 'v3';

    /**
     * Get list of products
     * GET /catalog/products
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/getproducts
     * @return mixed
     */
    public function all();

    /**
     * Get a Product
     * GET /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/getproductbyid
     * @param $id
     * return mixed
     */
    public function get($id);

    /**
     * Create a Product
     * POST /catalog/products
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/createproduct
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a product
     * PUT /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/updateproduct
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $data);

    /**
     * Deletes a Product
     * DELETE /catalog/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/products/deleteproductbyid
     * @param $product_id
     * @return mixed
     */
    public function delete($product_id);
}
