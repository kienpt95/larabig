<?php


namespace Smartosc\LaraBig\Model\Api;


class Order extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Order
{
    protected $resource = "orders";

    public function all()
    {
        $result = $this->service()->call('GET',$this->getResource());
        return $result;
    }

    public function getOrder($order_id)
    {

    }

    public function updateOrder($order_id , $data)
    {

    }
}