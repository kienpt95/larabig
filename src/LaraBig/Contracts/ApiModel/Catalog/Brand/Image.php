<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand;

/**
 * Interface Image
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand
 */
interface Image
{
    const PREFIX = "image";
    const VERSION = "v3";
    /**
     * Creates a Brand Image.
     * POST /catalog/brands/{brand_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-images/createbrandimage
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function create($brand_id, $data);

    /**
     * Deletes a Brand Image.
     * DELETE /catalog/brands/{brand_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-images/deletebrandimage
     * @param $brand_id
     * @return mixed
     */
    public function delete($brand_id);
}
