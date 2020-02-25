<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


interface Order
{
    const PREFIX = 'orders';
    const VERSION = 'v3';

    public function all();

    public function getOrder($order_id);

    public function updateOrder($order_id, $data);
}