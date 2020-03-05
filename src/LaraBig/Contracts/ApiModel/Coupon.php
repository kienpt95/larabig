<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

/**
 * Interface Coupon
 * @package Smartosc\LaraBig\Contracts\ApiModel
 */
interface Coupon
{
    const PREFIX = "coupons";
    const VERSION = "v3";

    /**
     * Returns a list of Coupons. Default sorting is by coupon/discount id, from lowest to highest. Optional filter parameters can be passed in.
     * GET /coupons
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/getallcoupons
     * @return mixed
     */
    public function all();

    /**
     * Creates a Coupon
     * POST /coupons
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/postcoupons
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Coupon
     * PUT /coupons/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/updateacoupon
     * @param $id
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a Coupon.
     * DELETE /coupons/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/deleteacoupon
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Returns a count of all Coupons in the store.
     * GET /coupons/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/getacountofcoupons
     * @return mixed
     */
    public function count();
}