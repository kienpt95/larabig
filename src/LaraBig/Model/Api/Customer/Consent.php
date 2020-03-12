<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use Smartosc\LaraBig\Contracts\ApiModel\Customer\Consent as IConsent;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Consent extends AbstractModel implements IConsent
{
    protected $resource = "consent";

    /**
     * @inheritDoc
     */
    public function get($customer_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'customer_id' => $customer_id
        ]));
        return  $result;
    }

    /**
     * @inheritDoc
     */
    public function update($customer_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'customer_id' => $customer_id
        ]), $data);
        return $result;
    }
}
