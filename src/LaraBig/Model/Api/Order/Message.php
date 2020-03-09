<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\Message as IMess;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Message extends AbstractModel implements IMess
{
    protected $resource = "messages/{message_id}";
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
