<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\ShippingAddress as IShippingAddress;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class ShippingAddress extends AbstractModel implements IShippingAddress
{
    protected $resource = "shipping_addresses/{id}";
    /**
     * @inheritDoc
     */
    public function all($order_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($order_id, $id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id,
            'id' => $id
        ]));
        return $result;
    }
}
