<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Order as IOrder;

class Order extends AbstractModel implements IOrder
{
    protected $resource = "orders/{order_id}";

    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource([], 'v2'));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($order_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id
        ], 'v2'));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource([], 'v2'), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($order_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'order_id' =>$order_id
        ], 'v2'));
    }

    /**
     * @inheritDoc
     */
    public function delete($order_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'order_id' => $order_id
        ], 'v2'));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        $resource = $this->getResource([], 'v2').'/count';
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
