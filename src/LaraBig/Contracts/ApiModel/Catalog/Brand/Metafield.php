<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand;


interface Metafield
{
    const PREFIX = "metafields";
    const VERSION = "v3";
    /**
     * Get a list of Brand Metafields
     * GET /catalog/brands/{brand_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/getbrandmetafieldsbybrandid
     * @param $brand_id
     * @return mixed
     */
    public function all($brand_id);

    /**
     * Get a Brand Metafield
     * GET /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/getbrandmetafieldbybrandid
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($brand_id, $metafield_id);

    /**
     * Creates a Brand Metafield.
     * POST /catalog/brands/{brand_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/createbrandmetafield
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function create($brand_id, $data);

    /**
     * Updates a Brand Metafield.
     * PUT /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/updatebrandmetafield
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function update($brand_id, $metafield_id, $data);

    /**
     * Deletes a Brand Metafield.
     * DELETE /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/deletebrandmetafieldbyid
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($brand_id, $metafield_id);
}
