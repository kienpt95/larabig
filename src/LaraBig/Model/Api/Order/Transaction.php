<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\Transaction as ITransaction;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Transaction extends AbstractModel implements ITransaction
{

    protected $resource = "transactions/{id}";
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
}
