<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;

use GuzzleHttp\Exception\GuzzleException;

interface Message
{
    const PREFIX = "messages";
    const VERSION = "";

    /**
     * Gets the messages associated with an order.
     * GET /orders/{order_id}/messages
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-messages/getordermessages
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function get($order_id);
}
