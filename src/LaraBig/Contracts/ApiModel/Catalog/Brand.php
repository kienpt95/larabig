<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand\Image;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand\Metafield;

/**
 * Interface Brand
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog
 * @property Image image
 * @property Metafield metafield
 */
interface Brand
{
    const PREFIX = "brands";
    const VERSION = "v3";

    /**
     * Get a list of Brands
     * GET /catalog/brands
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/getbrands
     * @return mixed
     */
    public function all();
    /**
     * Get a single Brand
     * GET /catalog/brands/{brand_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/getbrandbyid
     * @param $brand_id
     * @return mixed
     */
    public function get($brand_id);

    /**
     * Create a Brand
     * POST /catalog/brands
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/createbrand
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a Brand
     * PUT /catalog/brands/{brand_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/updatebrand
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function update($brand_id, $data);

    /**
     * Delete a Brand
     * DELETE /catalog/brands/{brand_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/deletebrandbyid
     * @param $brand_id
     * @return mixed
     */
    public function delete($brand_id);
}
