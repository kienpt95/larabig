<?php


namespace Smartosc\LaraBig\Model\Api\Cart;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Cart\Item as IItem;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Item extends AbstractModel implements IItem
{
    protected $resource = "items/{itemId}";

    /**
     * @inheritDoc
     */
    public function add($cartId, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'cartId' => $cartId
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($cartId, $itemId, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'cartId' => $cartId,
            'itemId' => $itemId
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($cartId, $itemId)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'cartId' => $cartId,
            'itemId' => $itemId
        ]));
        return $result;
    }
}
