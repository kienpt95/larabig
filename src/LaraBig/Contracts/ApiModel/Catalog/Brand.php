<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand\Image;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand\Metafield;
use Symfony\Component\HttpKernel\Exception\GoneHttpException;

/**
 * Interface Brand
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog
 * @property Image image
 * @property Metafield meta_field_brand
 */
interface Brand
{
    const PREFIX = "brands";
    const VERSION = "v3";

    /**
     * Get a list of Brands
     * GET /catalog/brands
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/getbrands
     * @throws GuzzleException
     * @return mixed
     */
    public function all();
    /**
     * Get a single Brand
     * GET /catalog/brands/{brand_id}
     * @example $brand_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/getbrandbyid
     * @throws GuzzleException
     * @param $brand_id
     * @return mixed
     */
    public function get($brand_id);

    /**
     * Create a Brand
     * POST /catalog/brands
     * @example  $data = [
                            "name"=> "Common Good",
                            "meta_keywords"=> [],
                            "image_url"=> "https://cdn8.bigcommerce.com/s-123456/product_images/d/fakeimage.png",
                            "custom_url"=> [
                            "url"=> "/brands/Common-Good.html"
                            ]
                        ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/createbrand
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a Brand
     * PUT /catalog/brands/{brand_id}
     * @example $brand_id = 1; $data = [
                                            "name"=> "Test",
                                        ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/updatebrand
     * @throws GuzzleException
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function update($brand_id, $data);

    /**
     * Delete a Brand
     * DELETE /catalog/brands/{brand_id}
     * @example $brand_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brands/deletebrandbyid
     * @throws GuzzleException
     * @param $brand_id
     * @return mixed
     */
    public function delete($brand_id);
}
