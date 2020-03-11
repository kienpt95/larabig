<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use GuzzleHttp\Exception\GuzzleException;

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
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Creates a Coupon
     * POST /coupons
     * @example $data = [
                                "name"=> "5% off order total",
                                "type"=> "per_item_discount",
                                "code"=> "4F75AF0C3802D39",
                                "enabled"=> true,
                                "amount"=> "5",
                                "applies_to"=> [
                                    "entity"=> "categories",
                                    "ids"=> [
                                                0
                                            ]
                                    ]
                                ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/postcoupons
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Coupon
     * PUT /coupons/{id}
     * @example $id = 1; $data = [
                                "name"=> "Happy Womenday saleoff 5% order total"
                                 ];
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/updateacoupon
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a Coupon.
     * DELETE /coupons/{id}
     * @example $id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/deleteacoupon
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Returns a count of all Coupons in the store.
     * GET /coupons/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/coupons/getacountofcoupons
     * @throws GuzzleException
     * @return mixed
     */
    public function count();
}
