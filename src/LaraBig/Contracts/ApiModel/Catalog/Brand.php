<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;


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
    public function getBrand($brand_id);

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

    /**
     * Creates a Brand Image.
     * POST /catalog/brands/{brand_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-images/createbrandimage
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function createBrandImage($brand_id, $data);

    /**
     * Deletes a Brand Image.
     * DELETE /catalog/brands/{brand_id}/image
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-images/deletebrandimage
     * @param $brand_id
     * @return mixed
     */
    public function deleteBrandImage($brand_id);

    /**
     * Get a list of Brand Metafields
     * GET /catalog/brands/{brand_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/getbrandmetafieldsbybrandid
     * @return mixed
     */
    public function allMetaFields();

    /**
     * Get a Brand Metafield
     * GET /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/getbrandmetafieldbybrandid
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function getMetafield($brand_id, $metafield_id);

    /**
     * Creates a Brand Metafield.
     * POST /catalog/brands/{brand_id}/metafields
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/createbrandmetafield
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function createBrandMEtaField($brand_id, $data);

    /**
     * Updates a Brand Metafield.
     * PUT /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/updatebrandmetafield
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function updateBrandMEtaField($brand_id, $metafield_id);

    /**
     * Deletes a Brand Metafield.
     * DELETE /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/deletebrandmetafieldbyid
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function deleteBrandMEtaField($brand_id, $metafield_id);
}