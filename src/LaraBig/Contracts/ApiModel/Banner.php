<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use Smartosc\LaraBig\Contracts\ApiModel\Banner\Count;

/**
 * Interface Banner
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Count count
 */
interface Banner
{
    const PREFIX = "banners";
    const VERION = "v3";

    /**
     * Returns a list of Banners. Default sorting is by banner id, from lowest to highest.
     * GET /banners
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/getallbanners
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Banner
     * GET /banners/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/getabanner
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Create a Banner
     * POST /banners
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/createabanner
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update Banner
     * PUT /banners/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/updateabanner
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Delete a Banner
     * DELETE /banners/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/deleteabanner
     * @param $id
     * @return mixed
     */
    public function delete($id);

}
