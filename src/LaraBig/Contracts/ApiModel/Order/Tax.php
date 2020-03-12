<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;

use GuzzleHttp\Exception\GuzzleException;

interface Tax
{
    const PREFIX = "taxes";
    const VERSION = "";

    /**
     * Gets all order taxes using order_id. Each tax applied to an order. This information can be useful for reporting purposes. Pass in the query parameter ?details=true to return extra details about order taxes. order_product_id and line_item_type are also returned
     * GET /orders/{order_id}/taxes
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-taxes/getordertaxes
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function all($order_id);
}
