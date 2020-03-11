<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface AbandonedCart
{
    const PREFIX = "abandoned-carts";
    const VERSION  = "v3";

    /**
     * Returns the cart_id corresponding to the abandoned cart {token} passed in.
     * GET /abandoned-carts/{token}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/s2s-abandoned-carts/abandoned-carts/getabandonedcarts
     * @throws GuzzleException
     * @param $token
     * @return mixed
     */
    public function get($token);
}
