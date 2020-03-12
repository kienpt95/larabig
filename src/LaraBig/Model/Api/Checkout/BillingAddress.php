<?php


namespace Smartosc\LaraBig\Model\Api\Checkout;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\BillingAddress as IBillingAddress;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class BillingAddress extends AbstractModel implements IBillingAddress
{
    protected $resource = "billing-address/{address_id}";

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
    public function update($checkout_id, $address_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'checkout_id' => $checkout_id,
            'address_id' => $address_id
        ]), $data);
        return $result;
    }
}
