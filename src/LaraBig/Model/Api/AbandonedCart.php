<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\AbandonedCart as IAbandonedCart;

class AbandonedCart extends AbstractModel implements IAbandonedCart
{
    protected $resource = "abandoned-carts/{token}";
    /**
     * @inheritDoc
     */
    public function get($token)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'token' => $token
        ]));
        return $result;
    }
}
