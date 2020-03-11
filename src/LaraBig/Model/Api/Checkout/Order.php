<?php


namespace Smartosc\LaraBig\Model\Api\Checkout;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Order as IOrder;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Order extends AbstractModel implements IOrder
{
    protected $resource = "orders/{id}";

    /**
     * @inheritDoc
     */
    public function create($checkoutId, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'checkoutId' => $checkoutId
        ]), $data);
        return $result;
    }
}
