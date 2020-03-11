<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface StorefrontOrder
{
    const PREFIX = "orders";
    const VERSION = "v3";

    /**
     * Returns Order data. This will return order data immediately after an order is placed on the storefront.
     * GET /orders/{orderId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-orders/order/ordersbyorderidget
     * @throws GuzzleException
     * @param $orderId
     * @return mixed
     */
    public function get($orderId);
}
