<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\OrderStatus as IOrderStatus;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class OrderStatus extends AbstractModel implements IOrderStatus
{
    protected $resource = "order_statuses/{status_id}";

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
    public function get($status_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'status_id' => $status_id
        ]));
        return $result;
    }
}
