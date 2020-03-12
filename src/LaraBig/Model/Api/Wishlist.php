<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Wishlist as IWishlist;

class Wishlist extends AbstractModel implements IWishlist
{
    protected $resource = "wishlists/{wishlist_id}";

    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($wishlist_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'wishlist_id' => $wishlist_id
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
    public function update($wishlist_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'wishlist_id' => $wishlist_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($wishlist_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'wishlist_id' => $wishlist_id
        ]));
        return $result;
    }
}
