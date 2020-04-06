<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\Coupon as ICouponuse;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Coupon extends AbstractModel implements ICouponuse
{
    protected $resource  = "coupons/{id}";

    /**
     * @inheritDoc
     */
    public function all($order_id)
    {
        $resource = $this->getResource([
            'order_id' => $order_id
        ], 'v2');
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
