<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category;

/**
 * Interface Tree
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category
 */
interface Tree
{
    /**
     * Returns the categories tree, a nested lineage of the categories with parent->child relationship. The Category objects returned are simplified versions of the category objects returned in the rest of this API.
     * GET /catalog/categories/tree
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/category/getcategorytree
     * @return mixed
     */
    public function get();
}
