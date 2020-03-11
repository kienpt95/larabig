<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Variant
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog
 */
interface Variant
{
    const PREFIX = "variants";
    const VERSION = "v3";

    /**
     * Get a list of all variants in your catalog.
     * GET /catalog/variants
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/variants/getvariants
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Creates or updates a batch of Variant objects. At the time of writing, the current limit is 50 variants. This limit is subject to change.
     * PUT /catalog/variants
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/variants/updatevariantsbatch
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function update($data);
}
