<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Cart as ICart;

class Cart extends AbstractModel implements ICart
{
    protected $resource = "carts/{cartId}";

    /**
     * @inheritDoc
     */
    public function get($cardId)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'cartId' => $cardId
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($cartId, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'cartId' => $cartId
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($cartId)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'cartId' => $cartId
        ]));
        return $result;
    }
}
