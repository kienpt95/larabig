<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;

interface Coupon
{
    const PREFIX = "coupons";
    const VERSION = "";
    /**
     * Lists all order coupons. Optional parameters can be passed in.
     * GET /orders/{order_id}/coupons
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-coupons/getallordercoupons
     * @param $order_id
     * @return mixed
     */
    public function all($order_id);
}
