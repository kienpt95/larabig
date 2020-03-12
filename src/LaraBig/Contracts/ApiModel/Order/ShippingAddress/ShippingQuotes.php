<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order\ShippingAddress;

interface ShippingQuotes
{
    const PREFIX = "shipping_quotes";
    const VERSION = "";

    /**
     * Gets any shipping quotes assocated to an order.
     * This is a read only enpoint and the output can vary based on the shipping quote. A shipping quote can only be generated using the storefront at this time. Orders that are created in the control panel or via api return a 204 for this endpoint since a shipping quote is not generated during that process.
     * GET /orders/{order_id}/shipping_addresses/{shipping_address_id}/shipping_quotes
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipping-addresses-quotes/getshippingquotes
     * @throws GuzzleException
     * @param $order_id
     * @param $shipping_address_id
     * @return mixed
     */
    public function get($order_id, $shipping_address_id);
}
