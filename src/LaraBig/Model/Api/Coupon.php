<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Coupon as ICoupon;

class Coupon extends AbstractModel implements ICoupon
{
    protected $resource = "coupons/{id}";
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
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'id' => $id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'id' => $id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        $resource = $this->getResource().'/count';
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
