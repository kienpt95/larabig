<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface Banner
 * @package Smartosc\LaraBig\Contracts\ApiModel
 */
interface Banner
{
    const PREFIX = "banners";
    const VERISON = "v2";

    /**
     * Returns a list of Banners. Default sorting is by banner id, from lowest to highest.
     * GET /banners
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/getallbanners
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Banner
     * GET /banners/{id}
     * @example $id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/getabanner
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Create a Banner
     * POST /banners
     * @example $data = [
                        "name"=> "Sale Banner",
                        "content"=> "<p> Sale! Tuesday at 9am! </p>",
                        "page" => "home_page",
                        "location" => "top",
                        "date_type" => "always",
                        "visible" => 1
                        ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/createabanner
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update Banner
     * PUT /banners/{id}
     * @example $id = 2; $data = [
                                    "name"=> " Not Sale Banner",
                                    "content"=> "<p> Not Sale! Tuesday at 9am! </p>",
                                    "page" => "home_page",
                                    "location" => "bottom",
                                    "date_type" => "always",
                                    "visible" => 1
                                    ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/updateabanner
     * @throws GuzzleException
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Delete a Banner
     * DELETE /banners/{id}
     * @example $id = 2;
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/deleteabanner
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function delete($id);
    /**
     * Returns a count of Banners.
     * GET /banners/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/getacountofbanners
     * @throws GuzzleException
     * @return mixed
     */
    public function count();
}
