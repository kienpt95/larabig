<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Cart as ICart;

class Cart extends AbstractModel implements ICart
{
    protected $resource = "carts/{cart_id}";

    /**
     * @inheritDoc
     */
    public function get($cart_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'cart_id' => $cart_id
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
    public function update($cart_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'cart_id' => $cart_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($cart_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'cart_id' => $cart_id
        ]));
        return $result;
    }
}
