<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\Tax as ITax;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Tax extends AbstractModel implements  ITax
{
    protected $resource = "taxes/{id}";

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
}
