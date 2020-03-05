<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\ShippingAddress\ShippingQuotes;

/**
 * Interface ShippingAddress
 * @package Smartosc\LaraBig\Contracts\ApiModel\Order
 * @property ShippingQuotes shipping_quotes
 */

interface ShippingAddress
{
    const PREFIX = "shipping_addresses";
    const VERSION = "";

    /**
     * Get all shipping addresses on an order using the order_id.
     * GET /orders/{order_id}/shipping_addresses
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipping-addresses/getallshippingaddresses
     * @param $order_id
     * @return mixed
     */
    public function all($order_id);

    /**
     * Gets a shipping address associated with an order.
     * Returned in the response is shipping_quotes object. Please use the Get Shipping Quotes Endpoint. Using the response will return a 204 for the shipping quote.
     * GET /orders/{order_id}/shipping_addresses/{id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipping-addresses/getashippingaddress
     * @param $order_id
     * @param $id
     * @return mixed
     */
    public function get($order_id, $id);
}
