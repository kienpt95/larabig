<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;


interface Category
{
    const PREFIX = "categories";
    const VERSION = "v3";

    public function allCategoryMetafield($category_id);

    public function getCategoryMetafield($category_id, $metafield_id);

    public function createCategoryMetafield($category_id, $data);

    public function updateCategoryMetafield($category_id, $metafield_id);

    public function deleteCategoryMetafield($category_id, $metafield_id);

    public function createCategoryImage($category_id);

    public function deleteCategoryImage($category_id);

}