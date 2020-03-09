<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand;

use GuzzleHttp\Exception\GuzzleException;

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
     * @example $brand_id = 1; $data = [
                                "data" => [
                                        "image_url" => "https://cdn11.bigcommerce.com/s-{store_hash}/product_images/k/group_1545334669__76009.png"
                                ],
                                "meta"=> []
                            ];
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-images/createbrandimage
     * @throws GuzzleException
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function create($brand_id, $data);

    /**
     * Deletes a Brand Image.
     * DELETE /catalog/brands/{brand_id}/image
     * @example $brand_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/brand-images/deletebrandimage
     * @param $brand_id
     * @return mixed
     */
    public function delete($brand_id);
}
