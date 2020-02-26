<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;


interface Category
{
    const PREFIX = "categories";
    const VERSION = "v3";

    /**
     * Get  a list of Categories
     * GET /catalog/categories
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategories
     * @return mixed
     */
    public function all();

    /**
     * Get a single Category. 
     * GET /catalog/categories/{category_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategorybyid
     * @param $category_id
     * @return mixed
     */
    public function getCategory($category_id);

    /**
     * Create a Category
     * POST /catalog/categories
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/createcategory
     * @param $data
     * @return mixed
     */
    public function create( $data);

    /**
     * Updates a Category.
     * PUT /catalog/categories/{category_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/updatecategory
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function update($category_id, $data);
    
    /**
     * Delete a category
     * DELETE /catalog/categories/{category_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/deletecategorybyid
     * @param $category_id
     * @return mixed
     */
    public function delete($category_id);
    
    /**
     * Returns the categories tree, a nested lineage of the categories with parent->child relationship. The Category objects returned are simplified versions of the category objects returned in the rest of this API.
     * GET /catalog/categories/tree
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategorytree
     * @return mixed
     */
    public function getTree();

     /**
     * Get a list of Metafields on a Category. Optional filter parameters can be passed in.
     * GET /catalog/categories/{category_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/getcategorymetafieldsbycategoryid
     * @param $category_id
     * @return mixed
     */
    public function getAllCategoryMetafield($category_id);

    /**
     * Get a single Category Metafield
     * GET /catalog/categories/{category_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/getcategorymetafieldbycategoryid
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function getCategoryMetafield($category_id, $metafield_id);

    /**
     * Creates a Cateory Metafield.
     * POST /catalog/categories/{category_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/createcategorymetafield
     * @param $category_id
     * @param $data
     * @return mixed
     */
    public function createCategoryMetafield($category_id, $data);

    /**
     * Updates a Category Metafield.
     * PUT /catalog/categories/{category_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/updatecategorymetafield
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function updateCategoryMetafield($category_id, $metafield_id);

    /**
     * Deletes a Category Metafield.
     * DELETE /catalog/categories/{category_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-metafields/deletecategorymetafieldbyid
     * @param $category_id
     * @param $metafield_id
     * @return mixed
     */
    public function deleteCategoryMetafield($category_id, $metafield_id);

    /**
     * Create a Category Image.
     * POST /catalog/categories/{category_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-images/createcategoryimage
     * @param $category_id
     * @return mixed
     */
    public function createCategoryImage($category_id);

    /**
     * Deletes a Cateogory Image.
     * DELETE /catalog/categories/{category_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category-images/deletecategoryimage
     * @param $category_id
     * @return mixed
     */
    public function deleteCategoryImage($category_id);

}