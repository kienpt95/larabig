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
    public function add($checkoutId, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'checkoutId' => $checkoutId
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($checkoutId, $couponCode)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'checkoutId' => $checkoutId,
            'couponCode' => $couponCode
        ]));
        return $result;
    }
}
