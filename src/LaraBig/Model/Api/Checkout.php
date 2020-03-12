<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout as ICheckout;

class Checkout extends AbstractModel implements ICheckout
{
    protected $resource = "checkouts/{checkout_id}";

    /**
     * @inheritDoc
     */
    public function get($checkout_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'checkout_id' => $checkout_id
        ]));
        return $result;
    }
}
