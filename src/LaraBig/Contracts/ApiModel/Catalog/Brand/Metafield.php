<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand;

use GuzzleHttp\Exception\GuzzleException;

interface Metafield
{
    const PREFIX = "metafields";
    const VERSION = "v3";
    /**
     * Get a list of Brand Metafields
     * GET /catalog/brands/{brand_id}/metafields
     * @example $brand_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/getbrandmetafieldsbybrandid
     * @throws GuzzleException
     * @param $brand_id
     * @return mixed
     */
    public function all($brand_id);

    /**
     * Get a Brand Metafield
     * GET /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @example $brand_id = 1; $metafield_id = 2;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/getbrandmetafieldbybrandid
     * @throws GuzzleException
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function get($brand_id, $metafield_id);

    /**
     * Creates a Brand Metafield.
     * POST /catalog/brands/{brand_id}/metafields
     * @example $brand_id = 2; $data = [
                                        "permission_set"=> "app_only",
                                        "namespace"=> "App Namespace",
                                        "key"=> "location_id",
                                        "value"=> "Shelf 3, Bin 5",
                                        "description"=> "Product Location",
                                        "resource_type"=> "brand"
                                        ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/createbrandmetafield
     * @throws GuzzleException
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function create($brand_id, $data);

    /**
     * Updates a Brand Metafield.
     * PUT /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @example $brand_id = 2; $metafield_id = 1; $data = [
                                        "permission_set"=> "app_only",
                                        "namespace"=> "App Namespace",
                                        "key"=> "location_id",
                                        "value"=> "Shelf 3, Bin 5",
                                        "description"=> "Product Location",
                                        "resource_type"=> "brand"
                                        ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/updatebrandmetafield
     * @throws GuzzleException
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function update($brand_id, $metafield_id, $data);

    /**
     * Deletes a Brand Metafield.
     * DELETE /catalog/brands/{brand_id}/metafields/{metafield_id}
     * @example $brand_id = 2; $metafield_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-metafields/deletebrandmetafieldbyid
     * @throws GuzzleException
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function delete($brand_id, $metafield_id);
}
