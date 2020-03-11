<?php


namespace Smartosc\LaraBig\Model\Api\Checkout;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\BillingAddress as IBillingAddress;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class BillingAddress extends AbstractModel implements IBillingAddress
{
    protected $resource = "billing-address/{addressId}";

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
    public function update($checkoutId, $addressId, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'checkoutId' => $checkoutId,
            'addressId' => $addressId
        ]), $data);
        return $result;
    }
}
