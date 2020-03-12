<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;

use GuzzleHttp\Exception\GuzzleException;

interface Shipment
{
    const PREFIX = "shipments";
    const VERSION = "";

    /**
     * Gets a list of all shipments on an order.
     * GET /orders/{order_id}/shipments
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipments/getallordershipments
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function all($order_id);

    /**
     * Gets an order shipment.
     * GET /orders/{order_id}/shipments/{shipment_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipments/getordershipment
     * @throws GuzzleException
     * @param $order_id
     * @param $shipment_id
     * @return mixed
     */
    public function get($order_id, $shipment_id);

    /**
     * Gets a count of the number of shipments that have been made for a single order
     * GET /orders/{order_id}/shipments/count
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipments/getcountshipments
     * @throws GuzzleException
     * @param $order_id
     * @return mixed
     */
    public function count($order_id);

    /**
     * Creates an Order Shipment.
     * POST /orders/{order_id}/shipments
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipments/createordershipments
     * @throws GuzzleException
     * @param $order_id
     * @param $data
     * @return mixed
     */
    public function create($order_id, $data);

    /**
     * Updates an existing shipment associated with an order.
     * PUT /orders/{order_id}/shipments/{shipment_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipments/updateordershipment
     * @throws GuzzleException
     * @param $order_id
     * @param $shipment_id
     * @param $data
     * @return mixed
     */
    public function update($order_id, $shipment_id, $data);

    /**
     * Deletes a shipment associated with an order.
     * DELETE /orders/{order_id}/shipments/{shipment_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-shipments/deleteordershipment
     * @throws GuzzleException
     * @param $order_id
     * @param $shipment_id
     * @return mixed
     */
    public function delete($order_id, $shipment_id);
}
