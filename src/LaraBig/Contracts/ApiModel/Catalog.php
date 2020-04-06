<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Variant;

/**
 * Interface Catalog
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Product product
 * @property Brand brand
 * @property Variant variant
 * @property Category category
 */
interface Catalog
{
    /**
     * Returns a lightweight inventory summary from the BigCommerce Catalog.
     * GET /catalog/summary
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/summary/getcatalogsummary
     * @throws GuzzleException
     */
    public function getSummary();
}
