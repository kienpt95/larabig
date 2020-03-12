<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Checkout;


use GuzzleHttp\Exception\GuzzleException;

interface Coupon
{
    const PREFIX = "coupons";
    const VERSION = "v3";

    /**
     * Adds a Coupon Code to Checkout.
     * POST /checkouts/{checkoutId}/coupons
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-coupons/checkoutscouponsbycheckoutidpost
     * @throws GuzzleException
     * @param $checkoutId
     * @param $data
     * @return mixed
     */
    public function add($checkoutId, $data);

    /**
     * Deletes a Coupon Code from Checkout.
     * DELETE /checkouts/{checkoutId}/coupons/{couponCode}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-coupons/checkoutscouponsbycheckoutidandcouponcodedelete
     * @throws GuzzleException
     * @param $checkoutId
     * @param $couponCode
     * @return mixed
     */
    public function delete($checkoutId, $couponCode);
}
