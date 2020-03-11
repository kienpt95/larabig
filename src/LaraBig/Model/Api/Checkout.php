<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout as ICheckout;

class Checkout extends AbstractModel implements ICheckout
{
    protected $resource = "checkouts/{checkoutId}";

    /**
     * @inheritDoc
     */
    public function get($checkoutId)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'checkoutId' => $checkoutId
        ]));
        return $result;
    }
}
