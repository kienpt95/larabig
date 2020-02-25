<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;


interface Category
{
    const PREFIX = "categories";
    const VERSION = "v3";

    /**
     * @param $category_id
     * @Returns a list of Metafields on a Category. Optional filter parameters can be passed in.
     */
    public function allCategoryMetafield($category_id);

    /**
     * @param $category_id
     * @param $metafield_id
     * @Returns a single Category Metafield. Optional parameters can be passed in.
     * @return mixed
     */
    public function getCategoryMetafield($category_id, $metafield_id);

    /**
     * @param $category_id
     * @param $data
     * @Creates a Cateory Metafield.
     * * @return mixed
     */
    public function createCategoryMetafield($category_id, $data);

    /**
     * @param $category_id
     * @param $metafield_id
     * @Updates a Category Metafield.
     * * @return mixed
     */
    public function updateCategoryMetafield($category_id, $metafield_id);

    /**
     * @param $category_id
     * @param $metafield_id
     * @Deletes a Category Metafield.
     * @return mixed
     */
    public function deleteCategoryMetafield($category_id, $metafield_id);

    /**
     * @param $category_id
     * @return mixed
     */
    public function createCategoryImage($category_id);

    /**
     * @param $category_id
     * @return mixed
     */
    public function deleteCategoryImage($category_id);

}