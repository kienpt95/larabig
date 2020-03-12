<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface Checkout
{
    const PREFIX = "checkouts";
    const VERSION = "v3";

    /**
     * Returns a Checkout.
     * GET/checkouts/{checkoutId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout/checkoutsbycheckoutidget
     * @throws GuzzleException
     * @param $checkout_id
     * @return mixed
     */
    public function get($checkout_id);
}
