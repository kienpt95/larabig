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

    const INCOMPLETE = 0;
    const PENDING = 1;
    const SHIPPED = 2;
    const PARTIALLY_SHIPPED = 3;
    const REFUNDED = 4;
    const CANCELLED = 5;
    const DECLINED = 6;
    const AWAITING_PAYMENT = 7;
    const AWAITING_PICKUP = 8;
    const AWAITING_SHIPMENT = 9;
    const COMPLETED = 10;
    const AWAITING_FULFILLMENT = 11;
    const MANUAL_VERIFY_REQUIRED = 12;
    const DISPUTED = 13;
    const PARTIAL_REFUNDED = 14;

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
