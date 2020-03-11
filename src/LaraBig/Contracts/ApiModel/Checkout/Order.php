<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Checkout;


use GuzzleHttp\Exception\GuzzleException;

interface Order
{
    const PREFIX = "orders";
    const VERSION = "v3";

    /**
     * Creates an Order.
     * POST /checkouts/{checkoutId}/orders
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-orders/createanorder
     * @throws GuzzleException
     * @param $checkoutId
     * @param $data
     * @return mixed
     */
    public function create($checkoutId, $data);
}
