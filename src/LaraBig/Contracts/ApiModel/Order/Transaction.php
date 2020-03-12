<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;

use GuzzleHttp\Exception\GuzzleException;

interface Transaction
{
    const PREFIX = "transactions";
    const VERSION = "v3";

    /**
     * Returns an order’s transactions.
     * GET /orders/{order_id}/transactions
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-transactions-api/transactions/gettransactions
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function get($order_id);
}
