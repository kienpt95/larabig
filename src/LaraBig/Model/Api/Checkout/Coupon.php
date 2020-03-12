<?php


namespace Smartosc\LaraBig\Model\Api\Checkout;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Coupon as ICoupon;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Coupon extends AbstractModel implements ICoupon
{
    protected $resource = "coupons/{couponCode}";

    /**
     * @inheritDoc
     */
    public function add($checkout_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'checkout_id' => $checkout_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($checkout_id, $couponCode)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'checkout_id' => $checkout_id,
            'couponCode' => $couponCode
        ]));
        return $result;
    }
}
