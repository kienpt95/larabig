<?php


namespace Smartosc\LaraBig\Model\Api;

class Order extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Order
{
    protected $resource = "orders/{order_id}";

    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($order_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function updateOrder($order_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'order_id' =>$order_id
        ]));
    }

    /**
     * @inheritDoc
     */
    public function delete($order_id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        // TODO: Implement count() method.
    }
}
