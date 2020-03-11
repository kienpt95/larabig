<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface StorefrontCheckout
{
    const PREFIX = "checkouts";
    const VERSION  = "v3";

    /**
     * Returns a Checkout (*NOTE: The cart ID and checkout ID are the same.).
     * GET /checkouts/{checkoutId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout/checkoutsbycheckoutidget
     * @throws GuzzleException
     * @param $checkoutId
     * @return mixed
     */
    public function  get($checkoutId);

    /**
     * Updates Checkout customer messages.
     * PUT /checkouts/{checkoutId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout/checkoutsbycheckoutidput
     * @throws GuzzleException
     * @param $checkoutId
     * @param $data
     * @return mixed
     */
    public function updateCustomerMessages($checkoutId, $data);
}
