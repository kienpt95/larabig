<?php


namespace Smartosc\LaraBig\Model\Api\Order\ShippingAddress;

use Smartosc\LaraBig\Contracts\ApiModel\Order\ShippingAddress\ShippingQuotes as IShippingQuotes;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class ShippingQuotes extends AbstractModel implements IShippingQuotes
{
    protected $resource = "shipping_quotes/{id}";
    /**
     * @inheritDoc
     */
    public function get($order_id, $shipping_address_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id,
            'shipping_address_id' => $shipping_address_id
        ]));
        return $result;
    }
}
