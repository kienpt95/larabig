<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category;

use GuzzleHttp\Exception\GuzzleException;

interface Metafield
{
    /**
     * Get a list of Metafields on a Category. Optional filter parameters can be passed in.
     * GET /catalog/categories/{category_id}/metafields
     * @example $category_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/getcategorymetafieldsbycategoryid
     * @throws GuzzleException
     * @param $category_id
     * @return mixed
     */
    public function all($category_id);

    /**
     * Get a single Category Metafield
     * GET /catalog/categories/{category_id}/metafields/{metafield_id}
     * @example $category_1; $metafield_id = 2;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/getcategorymetafieldbycategoryid
     * @throws GuzzleException
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($category_id, $metafield_id);

    /**
     * Creates a Cateory Metafield.
     * POST /catalog/categories/{category_id}/metafields
     * @example $category_id = 2; $data = [
                                        "permission_set": "app_only",
                                        "namespace": "App Namespace",
                                        "key": "location_id",
                                        "value": "Shelf 3, Bin 5",
                                        "description": "Where products are located",
                                        "resource_type": "category",
                                        "resource_id": 111
                                        ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/createcategorymetafield
     * @throws GuzzleException
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function create($category_id, $data);

    /**
     * Updates a Category Metafield.
     * PUT /catalog/categories/{category_id}/metafields/{metafield_id}
     * @example $category_id = 2; $metafield_id = 1; $data = [
                                                                "description": "Where products are located"
                                                            ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/updatecategorymetafield
     * @throws GuzzleException
     * @param $category_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function update($category_id, $metafield_id, $data);

    /**
     * Deletes a Category Metafield.
     * DELETE /catalog/categories/{category_id}/metafields/{metafield_id}
     * @example $category_id = 1; $metafield_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/deletecategorymetafieldbyid
     * @throws GuzzleException
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($category_id, $metafield_id);
}
