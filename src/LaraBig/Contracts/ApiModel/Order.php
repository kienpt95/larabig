<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Order\Coupon;
use Smartosc\LaraBig\Contracts\ApiModel\Order\Message;
use Smartosc\LaraBig\Contracts\ApiModel\Order\Product;
use Smartosc\LaraBig\Contracts\ApiModel\Order\Shipment;
use Smartosc\LaraBig\Contracts\ApiModel\Order\ShippingAddress;
use Smartosc\LaraBig\Contracts\ApiModel\Order\Tax;
use Smartosc\LaraBig\Contracts\ApiModel\Order\Transaction;

/**
 * Interface Order
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Coupon coupon
 * @property Message message
 * @property Product product
 * @property Shipment shipment
 * @property Tax tax
 * @property Transaction transaction
 * @property ShippingAddress shipping_Address
 */

interface Order
{
    const PREFIX = 'orders';
    const VERSION = 'v3';

    /**
     * Gets a list of orders using the filter query. (The default sort is by order id, from lowest to highest.
     * GET /orders
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/orders/getallorders
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Gets an Order.
     * GET /orders/{order_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/orders/getanorder
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function get($order_id);

    /**
     * Creates an Order.
     * An order can be created with an existing catalog product or a custom product.
     * POST /orders
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/orders/createanorder
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates an Order.
     * PUT /orders/{order_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/orders/updateanorder
     * @throws GuzzleException
     * @param $order_id
     * @param $data
     * @return mixed
     */
    public function updateOrder($order_id, $data);

    /**
     * Archives an order.Any attempt to archive an order on a store with automatic tax enabled will fail, and will return 405 Method not allowed.
     * DELETE /orders/{order_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/orders/deleteanorder
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function delete($order_id);

    /**
     * Gets an array of orders in the store organized by order status.
     * GET /orders/count
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/orders/getcountorder
     * @throws GuzzleException
     * @return mixed
     */
    public function count();
}
