<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

/**
 * Interface Summary
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog
 */
interface Summary
{
    const PREFIX = "summary";
    const VERSION = "v3";
    /**
     * Returns a lightweight inventory summary from the BigCommerce Catalog.
     * GET /catalog/summary
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/summary/getcatalogsummary
     */
    public function get();
}
