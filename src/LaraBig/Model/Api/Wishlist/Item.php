<?php


namespace Smartosc\LaraBig\Model\Api\Wishlist;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Wishlist\Item as IItem;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Item extends AbstractModel implements IItem
{
    protected $resource = "items/{item_id}";

    /**
     * @inheritDoc
     */
    public function add($wishlist_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'wishlist_id' => $wishlist_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($wishlist_id, $item_id)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'wishlist_id' => $wishlist_id,
            'item_id' => $item_id
        ]));
        return $result;
    }
}
