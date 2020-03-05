<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category;


interface Metafield
{
    /**
     * Get a list of Metafields on a Category. Optional filter parameters can be passed in.
     * GET /catalog/categories/{category_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/getcategorymetafieldsbycategoryid
     * @param $category_id
     * @return mixed
     */
    public function all($category_id);

    /**
     * Get a single Category Metafield
     * GET /catalog/categories/{category_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/getcategorymetafieldbycategoryid
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($category_id, $metafield_id);

    /**
     * Creates a Cateory Metafield.
     * POST /catalog/categories/{category_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/createcategorymetafield
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function create($category_id, $data);

    /**
     * Updates a Category Metafield.
     * PUT /catalog/categories/{category_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/updatecategorymetafield
     * @param $category_id
     * @param $metafield_id
     * @param $data
     * @return mixed
     */
    public function update($category_id, $metafield_id, $data);

    /**
     * Deletes a Category Metafield.
     * DELETE /catalog/categories/{category_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/deletecategorymetafieldbyid
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($category_id, $metafield_id);


}
