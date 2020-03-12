<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Interface OrderStatus
 * @package Smartosc\LaraBig\Contracts\ApiModel
 */
interface OrderStatus
{
    const PREFIX = "order_statuses";
    const VERSION = "";

    /**
     * Returns a Collection of All Order Statuses.
     * GET /order_statuses
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-status/getorderstatus
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a single order status.
     * GET /order_statuses/{status_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-status/getaorderstatus
     * @throws GuzzleException
     * @param $status_id
     * @return mixed
     */
    public function get($status_id);
}
