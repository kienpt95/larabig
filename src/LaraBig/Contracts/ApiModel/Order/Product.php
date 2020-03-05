<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Order;


interface Product
{
    const PREFIX = "products";
    const VERSION = "";

    /**
     * Lists all order products on an order using order_id. By default, items sort from lowest to highest according to a newly created ID, separate from the order_id and the product_id.
     * GET /orders/{order_id}/products
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-products/getallorderproducts
     * @param $order_id
     */
    public function all($order_id);

    /**
     * Gets a product line item associated with the order.
     * GET /orders/{order_id}/products/{product_id}
     * @see https://developer.bigcommerce.com/api-reference/orders/orders-api/order-products/getanorderproduct
     * @param $order_id
     * @param $product_id
     * @return mixed
     */
    public function get($order_id, $product_id);

}